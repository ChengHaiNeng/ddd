<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
    body{background:#f1f1f1;}
    .w1190{width: 80%;margin: 0px auto;}
	.niwdoawi_top{background:#333;width: 100%;}
	.fr{float: right;}
	.niwdoawi_center{height: 90px;width: 90%;margin: 0px auto;}
	.daohang{margin-top:20px; }

	.main{width: 80%;background:white;margin: 0px auto; }
	.main-le{margin: 10px 0px;}

	.mainfoot{margin-top: 80px;background:#dedede; }
	.mainfoot li {float:left; width: 140px;text-align: center;}
	.main-l{width:80%;margin: 0px auto;}
	.l{line-height: 24px; margin: 20px 0px;}
	.span01{font-size: 16px;color: #333;line-height: 20px;}
	.a01{font-size: 14px;color: #333;margin-top:20px;}

    .r{line-height: 24px;padding: 20px 0px;}

	.mainfoot{width: 100%;}
    .foot1{margin-top: 50px;background: #dedede;}
	.bt{float: left;margin-left: 0px;margin-top: 0px;}
	.lg_box{display: block;width:120px;height:30px; float: left;}
	.lg_box{background-image: url(/image/bank03030000.gif);}

	.out{background: #555;margin-top: 80px;height: 100px;}
	.line li {float: left;}
	.line2 {text-align: center;font-size: 18px;}
	.lunbo1 li a{color: white;}
</style>
<body class="container">
			<div class="row niwdoawi_top">
				<div class="header w1190 clearfix">
					<div class="row">
						<div class="col-xs-8 fl tel ">
							<span class="label label-default fs_14 mr_5 tel_ico">客服热线</span>
							<span class="label label-default aril">010-57155250</span>
							<span class="label  iphone">
								<a href="#" target="_blank">手机客户端</a>
							</span>
				            <span class="label  hover_sina">
	                            <a target="_blank" href="#">微博</a>
	            			</span>
	            			<span class="label label-default fs_12">市场有风险，投资需谨慎</span>
						</div>
						<div class="col-xs-4 fr login clearfix">
							<div class="login_at">
								<span class="label"><a href="#" target="_blank">登录</a></span>
								<span class="label"><a href="#" target="_blank">注册</a></span>
							    <button type="button" class="" id="dropdownMenu1" data-toggle="dropdown">账户中心
							        <span class="caret"></span>
							    </button>
							    <span class="lable community" ><a href="#" class="fc_white" target="_blank">关于我们</a></span>
							</div>  
						</div>
					</div>
				</div>
		    </div>
			<div class="row niwdoawi_center ">
				<div class="daohang">
					<div class="row">
						<div class="col-xs-6 image_at">
							<a href="#"><img heght="52" src="/image/logo_all.png" alt="" class="dddai"></a>
							<img src="/image/logo1200.png" alt="" class="">
						</div>
						<div class="col-xs-6 danghang_at">		
							<ul class="nav nav-justified">
								<li><a href="#">首页</a></li>
								<li><a href="#">我的投资</a></li>
								<li><a href="#">我的借款</a></li>
								<li><a href="#">新手导航</a></li>
								<li><a href="#">社区</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row main">
				<div class="col-xs-6 le">
					<div class="main-le">
						<img src="/image/jkbanner.jpg" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-xs-6 re">
					<div class="form-content">
						<div class="form-header">
							<span><h1><small>快速申请</small></h1></span>
						</div>
						<div class="form">
							<form id="applyForm" name="applyForm" action="" method="post">
								{!!csrf_field()!!}
								<div class="form-group">
									<label class="col-sm-3 control-label">真实年龄</label>
									<div class="col-sm-9">
										<select class="form-control" id="age" name="age">
										<option selected="selected" value="0">请选择年龄</option>
										<option>15</option>
										<option>40</option>
										<option>80</option>
										</select>
										@if($errors->has('age'))
										<p id="ageError" class="error">{{$errors->first('age')}}</p>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-lable">借款金额</label>
									<div class="col-sm-9">
										<input type="text" id="loanAmount" placeholder="请输入借款金额" name="money" value='{{old('money')}}'>
										@if($errors->has('money'))
										<p id="amountError" class="error" style="display: block;">{{$errors->first('money')}}</p>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-lable">手机号码</label>
									<div class="col-sm-9">
										<input type="text" id="mobile" name="mobile" placeholder="请输入手机号码" value= '{{old('money')}}'>
										@if($errors->has('mobile'))
										<p id="mobileError" class="error">{{$errors->first('mobile')}}</p>@endif								
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-lable">图片验证码</label>
									<div class="col-sm-6">
										<input id="imgcode"  type="text" placeholder="请输入图形验证码" name="imgcode">
									</div>
									<div class="col-sm-3">
										<span><a href="#"><img id="imgc" class="img-responsive" alt="换一张" name="imgc" src="/image/refresh.jpg"></a></span>
										
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-lable">短信验证码</label>
									<div class="col-sm-6">
										<input id="fucode" type="text" placeholder="请输入短信验证码" name="verify">
									</div>
									<div class="col-sm-3">
										<a id="dtmbtn" class="get-code" onclick="putyzm()" name="dtmbtn" href="javascript:;">获取验证码</a>
									</div>
								</div>
								<div class="form-group form-actions">
									<div class="col-sm-12 col-xs-offset-3 ">
										<button type="submit" class="btn  btn-info">立即申请</button>
									</div>
								</div>	
							</form>
						</div>							
					</div>
				</div>
			</div>
					<div class="row mainfoot">
			<div class="row">
				<div class="main-l">
				<div class="col-xs-8 l">
	        	<ul class="clearfix fNav">
	            	<li>
	                	<a href="#" target="_blank" class="span01">关于我们</a><br>
	                    <a href="#" target="_blank" class="a01">公司简介</a><br>
	                    <a href="#" target="_blank" class="a01">业绩报告</a><br>
	                    <a href="#" target="_blank" class="a01">法律法规</a><br>
	                </li>
	                <li>
	                	<a href="#" target="_blank" class="span01">安全保障</a><br>
	                    <a href="#" target="_blank" class="a01">本金保障</a><br>
	                    <a href="#" target="_blank" class="a01">风控保障</a><br>
	                    <a href="#" target="_blank" class="a01">账户安全</a><br>
	                </li>
	                <li>
	                	<a href="#" target="_blank" class="span01">帮助中心</a><br>
	                    <a href="#" target="_blank" class="a01">如何投资</a><br>
	                    <a href="#" target="_blank" class="a01">如何借款</a><br>
	                    <a href="#" target="_blank" class="a01">网站资费</a><br>
	                </li>	
	            </ul>
	        </div>
	        <div class="col-xs-4">
	        	  <div class="r">
	        	  	<ul class="nav navbar">
	        	  		<li class="line1"><span class="rexian"><h4>热线电话</h4></span></li>
	        	  		<li class="line2"><span class="d"><h5>010-5715520</h5><span></li>
	        	  	</ul>
                 </div>
	        </div>
	        </div>
        </div>
		</div>
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
</body>
<!-- <script src="http://libs.baidu.com/jquery/1.8.2/jquery.min.js"></script>
<script >
$('#applyForm').submit(function(){
            var patt;
            if($('#age').val()=='0'){
                alert('请选择年龄');
                return false;
            }
            patt = /^[1-9]\d*$/;
            if(!patt.test($('#loanAmount').val())){
            	alert('金额必须是整数');
            	return false;
            }
            patt = /^1[3578]\d{9}$/;
            if(!patt.test($('#mobile').val())){
            	alert('手机号不正确');
            	return false;
            }
        });
</script> -->
</html>