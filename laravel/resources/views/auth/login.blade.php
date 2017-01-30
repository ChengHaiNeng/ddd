{{print_r($errors)}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
    body{background:#f1f1f1;}
    .f1{margin-top:20px; height: 57px;line-height: 20px;width: 70%;}
	.f1_n{font-size: 22px;color: #999;}
	.login-box {
	width: 100%;
	max-width:500px;
	height: 400px;
	position: absolute;
	top: 50%;
	margin-top: -200px;
	
}
	.login-box {
		left: 50%;
		margin-left: -250px;
	}
	

.form {
	width: 100%;
	max-width:500px;
	height: 275px;
	margin: 25px auto 0px auto;
	padding-top: 25px;
}	
.login-content {
	height: 200px;
	width: 100%;
	max-width:500px;
	background-color: rgba(255, 250, 2550, .6);
	float: left;
}			
.input-group {
	margin: 0px 0px 30px 0px;
}
.form-control,
.input-group {
	height: 40px;
}

.form-group {
	margin-bottom: 0px;
}
.login-title {
	padding: 10px 10px;
	background-color: rgba(0, 0, 0, .6);
}
.login-title h1 {
	margin-top: 0px ;
}
.login-title small {
	color: #fff;
}

.link p {
	line-height: 20px;
	margin-top: 30px;
}
.btn-sm {
	padding: 8px 24px ;
	font-size: 16px ;
}

.footer{margin-top:40%;text-align: center;font-size: 20px;background: rgba(0, 0, 0, .6);line-height: 80px;height: 80px;}

</style>
<body class="container >
	<div class="row">
	<div class="n">
		<div class="f1">
			<a href="#"><img width="173" height="57"src="/image/logo_all.png" alt=""></a>
			<span class="f1_n">登录</span>
		</div>
	</div>
	<div class="login">
			<div class="login-box">
				<div class="login-title text-left">
					<a href="#"><img width="173" height="57"src="/image/logo_all.png" alt=""></a>
				</div>
				<div class="login-content ">
				<div class="form">
				<form action="#" method="post">
					{!!csrf_field()!!}
					<div class="form-group">
						<div class="col-xs-12  ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" id="name" name="email" class="form-control" placeholder="用户名">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12 ">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="text" id="password" name="password" class="form-control" placeholder="密码">
							</div>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-xs-4 col-xs-offset-4 ">
							<button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-off"></span> 登录</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 link">
							<p class="text-center remove-margin"><small>忘记密码？</small> <a href="javascript:void(0)" ><small>找回</small></a>
							</p>
						</div>
						<div class="col-xs-6 link">
							<p class="text-center remove-margin"><small>还没注册?</small> <a href="javascript:void(0)" ><small>注册</small></a>
							</p>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<span class="foot1">Copyright &copy; 2016 点点贷（www.dddai.com）&#12288;版权所有；市场有风险，投资需谨慎，营造合法、诚信借贷环境。</span>
	</div>
	</div>
</body>
</html>