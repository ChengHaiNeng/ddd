<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
    .h{width: 80%;margin: 0px auto;height: 80px;}
	.hl{float: left;}
	.hr{float: right;line-height: 80px;}
	.zl{font-size: 24px;color: #999;line-height: 80px;}
	.register-box{border: 1px red solid;width: 30%;}
	.m{width:100%;height:550px;background-image: url(/image/4de265ce-09be-4e7d-bb84-9ac5944c8c6b.jpeg);}
	.image{float: right;}
	.form-group{width:100%;max-width: 300px;height: 40px;margin: 0px auto;}

	.foot1{margin-top: 50px;background: #dedede;}
	.bt{float: left;margin-left: 0px;margin-top: 0px;}
	.lg_box{display: block;width:120px;height:30px; float: left;}
	.lg_box{background-image: url(/image/bank03030000.gif);}

	.out{background: #555;margin-top: 80px;height: 100px;}
	.line li {float: left;}
	.line2 {text-align: center;font-size: 18px;}
	.lunbo1 li a{color: white;}
</style>
<body class="container dddai">
	<div class="row h">
		<div class="hl">
			<a href=""><img src="/image/logo_all.png" alt=""></a>
			<span class="zl">注册</span>
		</div>
		<div class="hr">
			<span class="zr">已有账号?</span>
			<a href="#">立即登录</a>
		</div>
	</div>
	<div class="row m">
		<div class="register-box">
			<div class="register-title">
				<h2><small>注册送10000元体验金+100元红包</small></h2>
			</div>
			<div class="register-content">
				<div class="form">
					<form action="" method="post">
						{!!csrf_field()!!}
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<input type="text" id="mobile" name="mobile" class="form-control" placeholder="手机号">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<input type="text" id="name" name="name" class="form-control" placeholder="用户名">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<input type="text" id="email" name="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<input type="text" id="pwd" name="password" class="form-control" placeholder="密码">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<input type="text" id="repwd" name="password_confirmation" class="form-control" placeholder="确认密码">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-9 input-group">
								<input type="text" id="cap" name="cap" class="form-control" placeholder="验证码">
							</div>
							<div class="col-xs-3 image">
								<span><a href="#"><img id="imgc" class="img-responsive" alt="换一张" name="imgc" src="/image/refresh.jpg"></a></span>
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-xs-4 ">
								<button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-off"></span> 注册</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row foot">
					<div class="foot1">
				    <div class="footlink footlink2">
				        <span class="bt">合作伙伴：</span>
				        <span class="lg_box fl_img2"><a target="_blank" href="#">&nbsp;</a></span>
				        <span class="lg_box fl_img3"></span>
				        <span class="lg_box fl_img4"><a target="_blank" href="#">&nbsp;</a></span>
				        <span class="lg_box fl_img5"></span>
				        <span class="lg_box fl_img6"></span>
				        <span class="lg_box fl_img7"></span>
				        <span class="lg_box fl_img8"></span>
				        <span class="lg_box fl_img9"></span>
				        <a rel="nofollow" class="lg_box fl_img10" target="_blank" href="#"></a>
				    </div>
			</div>
			<div class="foot2">
				  <div class="out ff">
					<div class="line1">
					    <ul class="lunbo1">
					    <li>
					        <a target="_blank" href="#">现金宝</a>丨
					        <a target="_blank" href="#">人人贷</a>丨
					        <a target="_blank" href="#">陆金所</a>丨
					        <a target="_blank" href="#">拍拍贷</a>丨
					        <a target="_blank" href="#">南方基金</a>丨
					        <a target="_blank" href="#">定期宝</a>丨
					        <a target="_blank" href="#">活期宝</a>丨
					        <a target="_blank" href="#">安心贷</a>丨
					        <a target="_blank" href="#">有利网</a>丨
					        <a target="_blank" href="#">天弘基金</a>丨
					        <a target="_blank" href="#">余额宝收益</a>丨
					        <a target="_blank" href="#">货币基金收益排行</a>丨
					        <a target="_blank" href="#">基金公司排名</a>丨
					        <a target="_blank" href="#">基金经理排名</a>丨
					        <a target="_blank" href="#">证券公司排名</a>丨
					        <a target="_blank" href="#">基金排名</a>丨
					        <a target="_blank" href="#">期货公司排名</a>丨
					        <a target="_blank" href="#">炒外汇入门</a>丨
					        <a target="_blank" href="#">什么是基金</a>丨
					        <a target="_blank" href="#">理财产品排行</a>丨
					        <a target="_blank" href="#">股票入门基础知识</a>丨
					        <a target="_blank" href="#">网络贷款平台</a>丨
					    </li>
					    </ul>
					</div>
			        <div class="line2">
			            Copyright © 2016 点点贷（www.dddai.com）　版权所有；市场有风险，投资需谨慎，营造合法、诚信借贷环境。
			        </div>
			    </div>
	</div>
</body>
</html>