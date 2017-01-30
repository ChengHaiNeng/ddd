<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GrowController extends Controller
{
    public function run(){
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

    	$grows = DB::table('grows')->get();
    	return view('mysy',['grows'=>$grows]);



    }
}
