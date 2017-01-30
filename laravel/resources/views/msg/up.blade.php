
<body>
	<form action="" method="post"  >
	{!! csrf_field() !!}
		题目:<input type="text" name="title" value="{{$row->title}}">
		<p>
			<textarea name="content">{{$row->content}}</textarea>
		</p>
		<p>
			<input type="file" name="pic" value="" placeholder="">
		</p>
		<p>
			<input type="submit" name="" value="提交" >
		</p>
	</form>
</body>
</html>