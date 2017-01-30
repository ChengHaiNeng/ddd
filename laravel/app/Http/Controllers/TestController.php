<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TestController extends Controller{
	public function test(){
		$data = ['title'=>'题目','content'=>'内容'];
		return view('test',$data);
	}

	public function testBlade(){	
		$code = '<script>alert(12345)</script>';
		return view('testBlade',['code'=>$code]);
	}

	public function testFuc(){
		$arr = [[1,2,3],[3,4,5],[4,5,6]];
		print_r(array_collapse($arr)); 
		echo '<br>';
		$syr = 'sjdhaskdasdasd0';
		echo str_limit($syr,3),'<br>';
		echo str_random(20),'<br>';
		echo bcrypt('asdsd'),'<br>';
		echo public_path(),'<br>';
		echo base_path(),'<br>';
		echo config('app.timezone'),'<br>';
		echo e('<html>"html"</html>'),'<br>';
		echo url('/ad');

	}
}

 ?>