<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- GOOGLE WEB FONTS -->
    <link rel="stylesheet" href="/Public/Bootstrap/css/font-awesome.min.css">


    <!-- BOOTSTRAP 3.3.7 CSS -->
    <!--<link rel="stylesheet" href="/Public/Bootstrap/css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="/Public/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <!-- SLICK v1.6.0 CSS -->
    <link rel="stylesheet" href="/Public/Bootstrap/css/slick-1.6.0/slick.css"/>

    <link rel="stylesheet" href="/Public/Bootstrap/css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="/Public/Bootstrap/css/yith-woocommerce-compare/colorbox.css"/>
    <link rel="stylesheet" href="/Public/Bootstrap/css/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/Public/Bootstrap/css/owl-carousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/Public/Bootstrap/css/js_composer/js_composer.min.css"/>
    <link rel="stylesheet" href="/Public/Bootstrap/css/woocommerce/woocommerce.css"/>
    <link rel="stylesheet" href="/Public/Bootstrap/css/yith-woocommerce-wishlist/style.css"/>


    <link rel="stylesheet" href="/Public/Bootstrap/css/yith-woocommerce-wishlist/style.css" />
    <link rel="stylesheet" href="/Public/Bootstrap/css/custom.css" />
    <link rel="stylesheet" href="/Public/Bootstrap/css/app-orange.css" id="theme_color" />
    <link rel="stylesheet" href="" id="rtl" />
    <link rel="stylesheet" href="/Public/Bootstrap/css/app-responsive.css" />

    
<script type="text/javascript" src="/Public/Bootstrap/js/jquery/jquery.min.js"></script>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-xs-12 col-md-4" style="margin: auto;">
            <div style="width: 100%;">
                <a href="/Index/index">
                    <div class="logo" style="width: 60%;margin:10px auto;">
                        <img src="/Public/Bootstrap/images/icons/logo-orange.png" alt="">
                    </div>
                </a>
                <div style="width: 100%;border:1px solid #CCCCCC;border-radius:10px;margin-top: 20px;" class="content">
                    <div style="width: 95%;margin:auto;">
                        <div class="text-center"><h3>注册</h3></div>
                        <form action="/index.php/Home/Login/to_register" method="post" class="form-horizontal">

                            <label for="phone" ><h5>手 机 号</h5></label>
                            <div class="">
                                <input class="form-control" type="text" id="phone" placeholder="手机号" name="phone"/>
                            </div>
                            <div class="">
                                <label for="password" class=""><h5>密　　码</h5></label>
                                <div class="">
                                    <input class="form-control" type="password" id="password" placeholder="密码" name="password"/>
                                </div>
                            </div>
                            <div class="">
                                <label for="repassword" class=""><h5>确认密码</h5></label>
                                <div class="">
                                    <input class="form-control" type="password" id="repassword" placeholder="确认密码" name="repassword"/>
                                </div>
                            </div>
                            <div class="">
                                <div class="">

                                    <input style="width:50%;" class="form-control" type="password" id="verify" placeholder="验证码" name="verify"/>
                                    <label for="verify" class=""><button id="verify_btn" class="btn btn-info" style="float:left;" type="button" onclick="phone_verify()">获取验证码</button></label>
                                </div>
                            </div>
                            <script>
                                function phone_verify() {
                                    var phone=$('#phone').val();
                                    if(!isNaN(phone) && phone.length==11){
                                       $(function () {
                                           var url='/Login/verify';
                                           var data={'phone':phone};
                                           $.ajax({
                                               'url':url,
                                               'data':data,
                                               'type':'post',
                                               'success':function (res) {
                                                   if(res=='error'){
                                                       layer.msg('出错了,请重新尝试');
                                                   }else{

                                                   }
                                               }
                                           });
                                       });
                                    }

                                }
                            </script>
                            <div class="col-md-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" checked="checked" name="agree" value="yes">
                                    <span>我已阅读并同意网站的 <a href="###" class="text-info">使用条件</a> 及 <a href="###" class="text-info">隐私声明</a> 。 </span>
                                </label>
                            </div>
                            <div class="col-md-12" style="width:90%;margin: auto">
                                <hr style="width: 40%;" class="pull-left">
                                <div class="pull-left text-center" style="position: relative;top:12px;">注册</div>
                                <hr style="width: 40%;" class="pull-left">
                            </div>
                            <div style="width: 90%;margin:auto;">
                                <button type="submit" class="btn btn-info btn-lg btn-block">注册新账号</button>
                            </div>
                            <div class="col-md-12" style="width:90%;margin: auto">
                                <hr style="width: 40%;" class="pull-left">
                                <div class="pull-left text-center" style="position: relative;top:12px;">
                                    已拥有帐户？
                                </div>
                                <hr style="width: 30%;" class="pull-left">
                            </div>
                            <div style="width: 90%;margin:auto;">
                                <a href="/index.php/Home/Login/index"><button type="button" class="btn btn-info btn-lg btn-block">登陆</button></a>
                            </div>

                            <div style="height: 30px;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 "></div>
    </div>
</div>

</body>
</html>