<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	

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
<body>
<div class="main-wrap">
	<div class="side-nav">
    <div class="side-logo">
        <div class="logo">
				<span class="logo-ico">
					<i class="i-l-1"></i>
					<i class="i-l-2"></i>
					<i class="i-l-3"></i>
				</span>
            <strong>后台管理系统</strong>
        </div>
    </div>

    <nav class="side-menu content mCustomScrollbar" data-mcs-theme="minimal-dark">
        <ul>
            <?php if(is_array($arr)): foreach($arr as $key=>$vo): if(($vo["module"]) == "1"): ?><li>
                    <dl>
                            <?php if(($vo["pid"]) == "0"): if($vo["judge"] == 1): ?><dt>
                                        <!--一级下拉菜单-->
                                        <i class="icon-columns"></i><?php echo ($vo["name"]); ?><i class="icon-angle-right"></i>
                                    </dt>
                                    <?php else: ?>
                                    <dt>
                                        <!--一级点击菜单-->
                                        <a href="/Admin/<?php echo ($vo["controller"]); ?>/<?php echo ($vo["way"]); ?>.html" class=""><i class="icon-dashboard"></i><?php echo ($vo["name"]); ?></a>
                                    </dt><?php endif; endif; ?>
                        <!--二级菜单-->
                        <?php if(is_array($arr)): foreach($arr as $key=>$vi): if(($vi["module"]) == "1"): if(($vi["pid"]) == $vo["id"]): ?><dd>
                                        <a href="/Admin/<?php echo ($vi["controller"]); ?>/<?php echo ($vi["way"]); ?>.html"><?php echo ($vi["name"]); ?></a>
                                    </dd><?php endif; endif; endforeach; endif; ?>
                    </dl>
                </li><?php endif; endforeach; endif; ?>
        </ul>
    </nav>
    <footer class="side-footer">© DeathGhost 版权所有</footer>
</div>
	<div class="content-wrap">
		<header class="top-hd">
    <div class="hd-lt">
        <a class="icon-reorder"></a>
    </div>
    <div class="hd-rt">
        <ul>
            <li>
                <a href="" target="_blank"><i class="icon-home"></i>前台访问</a>
            </li>
            <li>
                <a><i class="icon-random"></i>清除缓存</a>
            </li>
            <li>
                <a><i class="icon-user"></i>管理员:<em><?php echo ($name); ?></em></a>
            </li>
            <li>
                <a><i class="icon-bell-alt"></i>系统消息</a>
            </li>
            <li>
                <a href="/Admin/Login/log_out.html" id="JsSignOut"><i class="icon-signout"></i>安全退出</a>
            </li>
        </ul>
    </div>
</header>
		<main class="main-cont content mCustomScrollbar">
			<!--开始::内容-->
			<div class="page-wrap">
				<section class="page-hd">
					<header>
						<h2 class="title"><i class="icon-home"></i>hello：<?php echo ($name); ?></h2>
					</header>
					<hr>
				</section>
			</div>

			<!--开始::结束-->
		</main>
		<footer class="btm-ft">
    <p class="clear">
        <span class="fl">©Copyright 2016 <a href="#" title="DeathGhost" target="_blank">DeathGhost.cn</a></span>
        <span class="fr text-info">
					<em class="uppercase">
						<i class="icon-user"></i>
						author:deathghost
					</em> |
					<em class="uppercase"><i class="icon-envelope-alt"></i>
						更多模板： <a href="http://www.mycodes.net/" target="_blank">源码之家</a>
					</em>
					<a onclick="reciprocate()" class="text-primary"><i class="icon-qrcode"></i>捐赠</a>
				</span>
    </p>
</footer>
	</div>
</div>
</body>
</html>