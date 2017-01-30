<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Msg;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MsgController extends Controller
{
    public function add(){
    	return view('msg.add');
    }
    public function addPost(Request $req){
    	$data['title'] = $req->title;
    	$data['content'] = $req->content;
    	$req->file('pic')->move(public_path(),'meiruhua.png');
    	/*$rs = DB::table('msgs')->insert($data);*/
    	$msg = new Msg;
    	$rs = $msg->insert($data);
    	if($rs){
    		return redirect('index');
    	}else{
    		return "添加失败";
    	}
    	
    }

    function up(Request $req,$id){
    	if(empty($_POST)){
    		/*$row = DB::table('msgs')->find($id);*/
    		$row = Msg::find($id);
    		return view('msg.up',['row'=>$row]);
    	}else{
    		$data['title'] = $req->title;
    		$data['content'] = $req->input('content');
    		$data['age'] = $req->input('age',20);
    		/*$rs = DB::table('msgs')->where('id',$id)->update($data);*/
    		$rs = Msg::where('id',$id)->update($data);
    		if($rs){
    			return redirect('index');
    		}else{
    			return 'update error';
    		}

    	}
    }

    function del($id){
    	/*$rs = DB::table('msgs')->where('id',$id)->delete();*/
    	$rs = Msg::where('id',$id)->delete();
    	if($rs){
    		return redirect('index');
    	}else{
    		return 'del error';
    	}
    }

    function index(){
    	/*$msgs = DB::table('msgs')->get();*/
    	$msgs = Msg::select(['id','content'])->where('id','>','0')->skip(1)->take(2)->orderBy('id','desc')->get();
    	return view('msg.index',['msgs'=>$msgs]);
    }


}
