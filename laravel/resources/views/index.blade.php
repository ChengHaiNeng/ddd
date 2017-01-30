<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
body{
	background:#f1f1f1;
}
    .holiday_bg{
    	width: 100%;
    }
    .w1190{
    	width: 80%;
    	margin: 0px auto;
    }
	.niwdoawi_top{
		background:#333;
	}
	.fr{
		float: right;
	}
	.niwdoawi_center{
		height: 90px;
		width: 80%;
		margin: 0px auto;
	}
	.daohang{
		margin-top:20px; 
	}
.niwdoawi_banner{box-shadow:5px 5px 5px #ccc; height:350px; width:100%; position:relative;
				background:url(/image/banner-2.png) center top no-repeat;  margin: 0px auto;
}
.front{ position:absolute; top:120px; left:50%; margin-left:550px;}
.login_front{width:270px; height:270px; color:#fff; background:url(/image/loginBg.png) no-repeat; position:absolute; top:54px; right:8px; padding:25px;}
.login_front .t{padding:20px; text-align:center;}
.login_front .m{padding:0 20px 30px; text-align:center;}
.login_front .btn_orange{ text-align:center; width:270px; height:43px; display:block; font-size:20px; line-height:43px; background: #ff7f00;}
.login_front .orange{ color:#ff9900; font-weight:700;  display:block; text-align:right; margin-top:5px;}
.login_front .orange:hover{ text-decoration:underline}
.index_footer {
		width: 90%;
		height: 280px;
		margin: 0px auto;

}
.index_left{background: white;padding: 0px; margin-top:20px; }
.pro_bor{
		float: left;

}
.pro_bor ul{
    line-height: 20px;
	height: 63px;
	text-align: center;
}
.img2{
	float: left;
}
 .w1{
	width: 120px;
	height: 62px;
}
.w2{
	width: 80px;
	height: 62px;
}
.w3{
	width: 80px;
	height: 62px;
}
.w4{
	width: 80px;
	height: 62px;
}
.w5{
	height: 62px;
} 
.index_right{margin-left:30px;background: white;box-szing:border-box;margin-top:20px; }
.xin{line-height: 48px;background: white;}
.xin a{font-size: 14px;float: right;}
.xin span{font-size: 14px;}
.f{font-size: 14px;line-height: 24px;}.shujutime{background: #f1f1f1;}
.shujuclass{padding:10px; background: url(/image/Numline.png) center no-repeat; height: 120px; margin-top: 5px;}
.shujuclass span.NumlineCon{display:inline-block; width:85px; text-align:left; position: relative;}
.shujuclass span.NumlineCon i{display:block;  color:#f60; font-family:Arial, Helvetica, sans-serif; font-size: 18px;}
.shujuclass span.Num1{padding:0 0 0 25px;}
.shujuclass span.Num2{padding:0 0 0 40px;}
/**/
.ind_tit{line-height: 48px;margin-left: 20px;}
.ind_partner{height:250px;background: white;}
.par_box{padding:20px 0;}
.par_box li{float:left; width:190px; margin-left:30px; text-align:center;}
.par_box li.first{width: 155px;}
.par_box li span{display:inline-block; width:185px; height:84px;}
.par_box li a{line-height:20px;}
/**/
.foot1{margin-top: 50px;background: #dedede;margin-bottom: 20px;}
.bt{float: left;}
.lg_box{display: block;width:120px;height:30px; float: left;}
.lg_box{background-image: url(/image/bank03030000.gif);}

.out{background: #555;margin-top:100px;height: 100px;}
.line li {float: left;}
.line2 {text-align: center;font-size: 18px;}
.lunbo1 li a{color: white;}

</style>
<body class="container index_niwo holiday_bg">
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
							@if(!Auth::user())
							<span class="label"><a href="{{url('auth/login')}}" target="_blank">登录</a></span>
							<span class="label"><a href="{{url('auth/register')}}" target="_blank">注册</a></span>
							@else
							<em class="fff fs_12"> 您好, </em>
							<a href="#" rel="nofollow" class="hello">{{Auth::user()->name}}</a>
							<a href="{{url('auth/logout')}}" id="loginOut" class="hello"> 退出 </a></div>
							<a class="txnone" title=" 账户中心 " rel="nofollow" target="_blank" href="/home"> 账户中心 </a>
							@endif
						    
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
		<div class="row niwdoawi_banner">
			<div class="img">
		    </div>
			</div>
			<div class="index_main w1180 front">
				    <div class="login_front">
				        <p class="fs_24 t">安全、稳健、高收益</p>
				        <p class="fs_24 bold m">注册送10000元体验金</p>
				         <span class="lable lable-default static_banner_login">
				         	<a title="免费注册" rel="nofollow" href="#" class="btn_orange">免费注册</a><a title="马上登录" rel="nofollow" class="orange" href="#">马上登录</a>
				         </span>
				    </div>
		</div>
		<div class="row clearfix w1180 pt_20 index_footer">
			<div class="clearfix">
				<div class="col-xs-8 index_left">
					<div class="content">
						<div class="img2">
							<img src="/image/ind_l3.jpg" alt="">
						</div>
						@foreach($pros as $p)
                        <div class="pro_bor">
	                        <ul class=" nav nav-tabs clearfix pro_list_box">
	                            <li class="w1">
	                                <p class="fc_9 mb_5">预期年化 </p>
	                                <p class="fc_orange airal"><em class="fs_28">{{$p->rate}}</em>
	                                    <em class="fs_18">%</em>
	                                </p>
	                            </li>
	                            <li class="w2">
	                                <p class="fc_9 mb_5">期限</p>
	                                <p class="fc_6"><em class="fs_18">{{$p->hrange}}</em>个月</p>
	                            </li>
	                            <li class="w3">
	                                <p class="fc_9 mb_5">投资金额 </p>
	                                <p class="fc_6 airal fs_18">{{($p->money-$p->recive)/100}}</p>
	                            </li>
	                            <li class="w4">
	                                <span class="b_jingdu b_jd86">{{($p->recive/$p->money)*100}}%</span>
	                            </li>
	                            <li class="w5">
	                                    <a class="btn btnSize_1 btn_orange" href="{{url('/touzi',$p->pid)}}">立即投标</a>
	                            </li>
	                        </ul>
                        </div>
                        @endforeach
					</div>

				</div>
				<div class="col-xs-3 index_right">
					<h3 class="xin"> 新手导航
					<a href="#" class="" target="_blank">前往</a>
					<span class="fm">规范.专业.透明</span>
					</h3>
					<div class="shujutime">
						<span class="f">2016年02月数据</span>
					</div>
					<div class="shujuclass">
						<span class="NumlineCon Num1">
							<i>461,366</i>成功注册(人)
						</span>
						<span class="NumlineCon Num2"><i>51,397</i>成功投标(人)</span>
						<span class="NumlineCon Num1 mt_20"><i>6,598</i>实现借款(人)</span>
						<span class="NumlineCon Num2 mt_20"><i>188,817</i>成交(万元)</span>
					</div>
				</div>
			</div>
			<div class="fluid">
				<div class="module mb_20 ind_partner holidy_main_no4">
					<h3 class="ind_tit">
						<span class="fs_18">资金安全</span>
					</h3>
					<ul class="nav navbar par_box">
	                    <li>
	                        <span><img width="185" height="84" alt="" src="/image/ind_par2.png"></span>
	                        <a class="a6" href="#">
	                        点点贷风险保证金托管<br>
	    中国光大银行上海分行
	                        </a>
	                    </li>
	                     <li>
	                    <span><img width="185" height="84" alt="" src="/image/ind_par5.png"></span>
	                    <a class="a6" href="#">
	                        点点贷交易账户因盗用、盗刷的资金损失由PICC承保

	                    </a>
	                    </li>
	                    <li>
	                        <span><img width="185" height="84" alt="" src="/image/ind_par4.png"></span>
	                        <a class="a6" href="#">
	                       点点贷使用美国FICO<br>
	    决策引擎建立评分卡系统
	                        </a>
	                    </li>
	                    <li>
	                        <span><img width="185" height="84" alt="公安部第三研究所" src="/image/ind_par1.png"></span>
	                        <a class="a6" href="#">
	                        点点贷信息安全通过<br>
	                        公安部等保二级测评
	                        </a>
	                    </li>
	                    <li>
	                        <span><img width="185" height="84" alt="" src="/image/ind_par3.png"></span>
	                        <a class="a6" href="#">
	                        点点贷违约客户数据对<br>
	    接报送上海资信有限公司
	                        </a>
	                    </li>
                </ul>
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
		</div>
</body>
</html>