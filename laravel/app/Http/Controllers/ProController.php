<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro;
use App\Att;
use App\Bid;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProController extends Controller
{

	protected $middleware = ['App\Http\Middleware\Authenticate'=>[]];

    public function jie(){
        return view('woyaojiekuan');
    }

    public function jiePost(Request $req){
        $this->validate($req,[
            'age'=>'required|in:15,40,80',
            'money'=>'required|digits_between:2,7',
            'mobile'=>'required|regex:/^1[3458]\d{9}$/'
        ],
        [
            'age.required'=>'年龄必须填写',
            'age.in'=>'年龄必须在所提供的范围之内选择',
            'money.required'=>'钱的数额必须填写',
            'money.digits_between'=>'钱必须是2-7位数值',
            'mobile.required'=>'手机号必须填写',
            'mobile.regex'=>'手机格式不合规范']
        );

        $pro = new Pro();
        $att = new Att();

        $user = $req->user();
        if(empty($user)){
        	return "用户未登录";
        }else{
        	$pro->uid = $user->uid;
        	$pro->name = $user->name;
        	$pro->money = $req->money*100;
	        $pro->mobile = $req->mobile;
	        $pro->pubtime = time();
	        $pro->save();

	        $att->uid = $user->uid;
	        $att->age = $req->age;
	        $att->pid = $pro->pid;
	        $att->save();

	        return redirect('/');
        }

        
    }

//立刻投资
    public function touzi($pid){
    	$pro = Pro::find($pid);
    	return view('liketouzi',['pro'=>$pro]);
    }

    public function touziPost(Request $req,$pid){
    	$pro = Pro::find($pid);
    	$bid = new Bid();
    	$user = Auth::user();
    	if(empty($user)){
    		return "用户未登陆，不能购买";
    	}
    	/*
    	if($req->money>($pro->money-$pro->recive)){
    		return "金额不能多于";
    	}*/
    	$bid->uid = $user->uid;
    	$bid->pid = $pro->pid;
    	$bid->title = $pro->title;
    	$bid->money = $req->v_amount*100;
    	$bid->pubtime = time();
    	$bid->save();

    	$pro->recive += $bid->money;
    	$pro->save();

    	//
    	if($pro->recive == $pro->money){
    		$this->touziDone($pro);
    	}

    	return "收益成功";		
    }

    protected function touziDone($pro){
    	$pid = $pro->pid;
    	$pro->status = 2;
    	$pro->save();

    	//为借款者，生成还款记录
    	//每月应还钱数：（本金+利息） 
    	$amount = ($pro->money*$pro->rate/1200) + ($pro->money/$pro->hrange);
    	$row = ['uid'=>$pro->uid,'pid'=>$pro->pid,'title'=>$pro->title];
    	$row['amount'] = $amount;
    	$row['status'] = 0;

    	for($i = 1;$i<=$pro->hrange;$i++){
    		$paydate = date('Y-m-d',strtotime("+ $i months"));
    		$row['paydate'] = $paydate;
    		DB::table('hks')->insert($row);
    	}

    	//为投资者，生成收益打款任务
    	$bids = Bid::where('pid',$pid)->get();
    	$row = [];
    	$row['pid'] = $pid;
    	$row['title'] = $pro->title;
    	$row['enddate'] = date('Y-m-d',strtotime("+ $pro->hrange months"));

    	//循环为每位投资者生成预期收益信息，tasks表
    	foreach($bids as $bid){
    		$row['uid'] = $bid->uid;
    		$row['amount'] = $bid->money*$pro->rate/36500;
    		DB::table('tasks')->insert($row);
    	}


    	//生成实际收益表
    	$today = date('Y-m-d');
    	//从task表中，取出结束日期大于今天的条目
    	$tasks = DB::table('tasks')->where('enddate','>=',$today)->get();
    	/*return $tasks;*/
    	//循环为每个人写入收益信息
    	foreach($tasks as $t){
    		$t->paytime = $today;
    		$t = (array)$t;
    		unset($t['tid']);
    		unset($t['enddate']);
    		DB::table('grows')->insert($t);
    	}
    }


//将还款数据传递到还款页面
    public function hks(){
    	$user  = Auth::user();
    	$hks = DB::table('hks')->where('uid',$user->uid)->paginate(4);
    	return view('myhk',['hks'=>$hks]);
    }


//投资收益将投资收益传到收益页面
    public function run(){
    	$user  = Auth::user();
    	$grows = DB::table('grows')->where('uid',$user->uid)->get();
    	return view('mysy',['grows'=>$grows]);
    }


    public function juanqian(){
    	$user  = Auth::user();
    	$jqs = DB::table('bids')->where('bids.uid',$user->uid)->join('pros','bids.pid','=','pros.pid')->select('bids.*','pros.title','pros.hrange','pros.rate')->get();
    	return view('myjq',['jqs'=>$jqs]);
    }

    public function pay(Request $req){

            $pro = Pro::find($req->pid);
            if($req->money>($pro->money-$pro->recive)){
                return "金额不能多于";
            }

            if($req->money<=0){
                return "金额不能小于等于0";
            }

            $row = [];
            $row['v_amount'] = $req->money;
            $row['v_moneytype'] = 'CNY';
            $row['v_oid'] = date('Ymd').mt_rand(10000,99999);
            $row['v_mid'] = '20272562';
            $row['v_url'] = 'http://ddd.com/touziPost/'.$req->pid;
            $row['key'] = '%()#QOKFDLS:1*&U';
            $row['v_md5info'] = strtoupper(md5(implode('',$row)));
            return view('pay',['row'=>$row]);
            
            

    }

}
