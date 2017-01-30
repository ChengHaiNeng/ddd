<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro;
use App\Att;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DddIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$pros = Pro::where('status',1)->take(4)->get();
    	return view('index',['pros'=>$pros]);
    }

   
}
