


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form  method="post" action="http:\\127.0.0.1\src\Bool\day43\pay\index.php">
	<input type="hidden" name="v_moneytype" value="{{$row['v_moneytype']}}" placeholder="">
	<input type="hidden" name="v_mid" value="{{$row['v_mid']}}" placeholder="">
	<input type="hidden" name="v_url" value="{{$row['v_url']}}" placeholder="">	
	<input type="hidden" name="key" value="{{$row['key']}}" placeholder="">
	<input type="hidden" name="v_md5info" value="{{$row['v_md5info']}}" placeholder="">
	数额：<input type="text" name="v_amount" value="{{$row['v_amount']}}" placeholder="">
	订单号:<input type="text" name="v_oid" value="{{$row['v_oid']}}" placeholder="">
	<input type="submit" name="" value="投资" placeholder="">
	</form>
</body>
</html>