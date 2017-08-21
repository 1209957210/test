<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分配权限</title>
    

 <meta name="keywords" content="设置关键词..." />
 <meta name="description" content="设置描述..." />
 <meta name="author" content="DeathGhost" />
 <meta name="renderer" content="webkit">
 <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <!--<link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/bootstrap.min.css">-->
 <link rel="icon" href="/dangdang/Public/Admin/images/icon/favicon.ico" type="image/x-icon">
 <link rel="stylesheet" type="text/css" href="/dangdang/Public/Admin/css/style.css" />
 <!--<link rel="stylesheet" href="//res.layui.com/layui/build/css/layui.css"  media="all">-->
 <!--<link rel="stylesheet" href="/dangdang/Public/layui/layui-v1.0.9_rls/layui/css/layui.css">-->
 <!--<script src="/dangdang/Public/layui/layui-v1.0.9_rls/layui/layui.js"></script>-->
 <script src="/dangdang/Public/Admin/javascript/jquery.js"></script>
 <script src="/dangdang/Public/Admin/javascript/plug-ins/customScrollbar.min.js"></script>
 <script src="/dangdang/Public/Admin/javascript/plug-ins/echarts.min.js"></script>
 <script src="/dangdang/Public/Admin/javascript/plug-ins/layerUi/layer.js"></script>
 <script src="/dangdang/Public/Admin/editor/ueditor.config.js"></script>
 <script src="/dangdang/Public/Admin/editor/ueditor.all.js"></script>
 <script src="/dangdang/Public/Admin/javascript/plug-ins/pagination.js"></script>
 <script src="/dangdang/Public/Admin/javascript/public.js"></script>
 <!--<script src="/dangdang/Public/Bootstrap/js/bootstrap.min.js"></script>-->

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
                                        <a href="/dangdang/Admin/<?php echo ($vo["controller"]); ?>/<?php echo ($vo["way"]); ?>.html" class=""><i class="icon-dashboard"></i><?php echo ($vo["name"]); ?></a>
                                    </dt><?php endif; endif; ?>
                        <!--二级菜单-->
                        <?php if(is_array($arr)): foreach($arr as $key=>$vi): if(($vi["module"]) == "1"): if(($vi["pid"]) == $vo["id"]): ?><dd>
                                        <a href="/dangdang/Admin/<?php echo ($vi["controller"]); ?>/<?php echo ($vi["way"]); ?>.html"><?php echo ($vi["name"]); ?></a>
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
                <a href="/dangdang" target="_blank"><i class="icon-home"></i>前台访问</a>
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
                <a href="/dangdang/Admin/Login/log_out.html" id="JsSignOut"><i class="icon-signout"></i>安全退出</a>
            </li>
        </ul>
    </div>
</header>
        <!--表单-->
        <main class="main-cont content mCustomScrollbar">
            <form action="/dangdang/Admin/Role/add_role_limit.html" id="limit" method="post">
                <div class="page-wrap">
                    <!--开始::内容-->
                    <section class="page-hd">
                        <header>
                            <h2 class="title">分配权限</h2>
                        </header>
                        <hr>
                    </section>
                    <div class="form-group-col-2">
                        <div class="form-label">职位：</div>
                        <div class="form-cont" id="classify">
                            <select onchange="role(this)" id="role_name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="role_id" class="" style="width:20%;border-radius:20px;">
                                <?php if(is_array($role)): foreach($role as $key=>$vo): ?><ul class="dropdown" aria-labelledby="classify">
                                        <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["role_name"]); ?></option>
                                    </ul><?php endforeach; endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group-col-2">
                        <div class="form-label">权限：</div>
                        <div class="form-cont" id="">
                            <?php if(is_array($limit)): foreach($limit as $key=>$vo): if(($vo["pid"]) == "0"): ?><div class="checkbox" >
                                                <label for="role-<?php echo ($vo["id"]); ?>">
                                                    <input type="checkbox" name="limit_id[]" value="<?php echo ($vo["id"]); ?>" id="role-<?php echo ($vo["id"]); ?>"> <?php echo ($vo["name"]); ?>
                                                </label>
                                            </div>
                                    <?php if(is_array($limit)): foreach($limit as $key=>$value): if(($value["pid"]) == $vo["id"]): ?><div class="checkbox" style="margin-left:20px;">
                                                <label for="role-<?php echo ($vo["id"]); ?>">
                                                    <input type="checkbox" name="limit_id[]" value="<?php echo ($value["id"]); ?>" id="role-<?php echo ($value["id"]); ?>"> <?php echo ($value["name"]); ?>
                                                </label>
                                            </div><?php endif; endforeach; endif; endif; ?>

                                <!--<input type="checkbox" name="limit_id[]" value="<?php echo ($vo["id"]); ?>" id="role-<?php echo ($vo["id"]); ?>"><label for="role-<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></label>--><?php endforeach; endif; ?>
                        </div>
                    </div>
                    <div class="form-group-col-2">
                        <div class="form-label"></div>
                        <div class="form-cont">
                            <input type="button" onclick="limit()" class="btn btn-primary" value="分配" style="width:20%;border-radius:20px;"/>
                        </div>
                    </div>
                    <!--开始::结束-->
                </div>
            </form>
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
<script language="JavaScript" type="text/javascript">
    //分配权限
    function limit() {
        $(function () {
            var url='/dangdang/Admin/Role/add_role_limit.html';
            var data=$("#limit").serialize();
//            alert(data);
            $.ajax({
                'url':url,
                'data':data,
                'dataType':'json',
                'type':'post',
                'success':function (res) {
                    if(res=='success'){
                        layer.msg('分配职位成功');
                    }else{
                        layer.msg('分配职位失败');
                    }
                }
            });
        });
    }
    //加载页面时请求已分配的权限信息
   role(document.getElementById('role_name'));
    //改变职位时请求已分配的权限信息
    function role(obj) {
        var role_id=obj.value;
        $(function () {
            var url='/dangdang/Admin/Role/add_role_limit.html';
          var data={'role_id':role_id};
            $.ajax({
                'url':url,
                'data':data,
                'dataType':'json',
                'type':'get',
                'success':function (res) {
                    if(res=='error'){
                        $("input[id^='role-']").prop('checked',false);
                    }else{
                        var role_id=eval("("+res+")");
                        $("input[id^='role-']").prop('checked',false);
                        $.each(role_id,function (i,n) {
                            $('#role-'+n.limit_id).prop('checked',true);
                        });
                    }
                }
            });
        });
    }
</script>
</body>
</html>