<?php

namespace App\Http\Controllers;
use App\Att;
use App\Pro;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckController extends Controller
{
    public function getProlist(){
    	$pros = Pro::orderBy('pid','desc')->get();
    	return view('prolist',['pros'=>$pros]);
    	/*print_r($pros);*/
    }

    public function getCheck($pid){
    	$pro = Pro::find($pid);
    	$att = Att::where('pid',$pid)->first();
    	return view('shenhe',['pro'=>$pro,'att'=>$att]);
    }

    public function postCheck(Request $req){
    	$pro = Pro::find($req->pid);
    	$att = Att::where('pid',$req->pid)->first();
    	$pro->name = $req->name;
    	$att->realname = $req->realname;
    	$att->gender = $req->gender;
    	$pro->money = $req->money*100;
        $pro->status = 1;
    	if($pro->save()&&$att->save()){
    		return redirect('/');
    	}else{
    		return "请重新审核";
    	}

    	


    }
}
