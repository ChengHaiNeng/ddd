@extends('msg.head')
@section('body')
<form action="addPost" method="post"  enctype="multipart/form-data">
	{!! csrf_field() !!}
		题目:<input type="text" name="title">
		<p>
			<textarea name="content"></textarea>
		</p>
		<p>
			<input type="file" name="pic" value="" placeholder="">
		</p>
		<p>
			<input type="submit" name="" value="提交" >
		</p>
	</form>
@endsection