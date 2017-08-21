<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员登陆</title>
	

 <meta name="keywords" content="设置关键词..." />
 <meta name="description" content="设置描述..." />
 <meta name="author" content="DeathGhost" />
 <meta name="renderer" content="webkit">
 <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <!--<link rel="stylesheet" href="/Public/Bootstrap/css/bootstrap.min.css">-->
 <link rel="icon" href="/Public/Admin/images/icon/favicon.ico" type="image/x-icon">
 <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" />
 <!--<link rel="stylesheet" href="//res.layui.com/layui/build/css/layui.css"  media="all">-->
 <!--<link rel="stylesheet" href="/Public/layui/layui-v1.0.9_rls/layui/css/layui.css">-->
 <!--<script src="/Public/layui/layui-v1.0.9_rls/layui/layui.js"></script>-->
 <script src="/Public/Admin/javascript/jquery.js"></script>
 <script src="/Public/Admin/javascript/plug-ins/customScrollbar.min.js"></script>
 <script src="/Public/Admin/javascript/plug-ins/echarts.min.js"></script>
 <script src="/Public/Admin/javascript/plug-ins/layerUi/layer.js"></script>
 <script src="/Public/Admin/editor/ueditor.config.js"></script>
 <script src="/Public/Admin/editor/ueditor.all.js"></script>
 <script src="/Public/Admin/javascript/plug-ins/pagination.js"></script>
 <script src="/Public/Admin/javascript/public.js"></script>
 <!--<script src="/Public/Bootstrap/js/bootstrap.min.js"></script>-->

</head>
<body class="login-page">
	<section class="login-contain">
		<header>
			<h1>管理员登录</h1>
			<p>management system</p>
		</header>
		<form action="/index.php/Admin/Login/login" method="post">
			<div class="form-content">
				<ul>
					<li>
						<div class="form-group">
							<label class="control-label">管理员账号：</label>
							<input type="text" name="phone" placeholder="管理员账号" class="form-control form-underlined" id="adminName"/>
						</div>
					</li>
					<li>
						<div class="form-group">
							<label class="control-label">管理员密码：</label>
							<input type="password" name="password" placeholder="管理员密码" class="form-control form-underlined" id="adminPwd"/>
						</div>
					</li>
					<li>
						<button type="submit" class="btn btn-lg btn-block" id="entry">立即登录</button>
					</li>
					<li>
						<p class="btm-info">©Copyright 2017-2018 <a href="#" target="_blank" title="DeathGhost">DeathGhost.cn</a></p>
						<address class="btm-info">广东省广州市</address>
					</li>
				</ul>
			</div>
		</form>
	</section>
</body>
</html>