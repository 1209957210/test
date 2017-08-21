<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <meta name="description" content="专业的综合网上购物商城,销售家电、数码通讯、电脑、家居百货、服装服饰、母婴、图书、食品等数万个品牌优质商品.便捷、诚信的服务，为您提供愉悦的网上购物体验!" />
 <meta name="Keywords" content="网上购物,网上商城,手机,笔记本,电脑,MP3,CD,VCD,DV,相机,数码,配件,手表,存储卡,京东" />
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
<!--header-->
<header id="header" class="header header-style1">
    <div class="header-top clearfix">
        <div class="container">
            <div class="rows">
                <!-- SIDEBAR TOP MENU -->
                <div class="pull-left top1">
                    <div class="widget text-2 widget_text pull-left">
                        <div class="widget-inner">
                            <div class="textwidget">
                                <div class="call-us"><span>联系电话: </span>0123-444-666654123</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--未登录-->
                <div id="not_log_in" class="hidden">
                    <div class="wrap-myacc pull-right">
                        <div class="sidebar-account pull-left">
                            <a href="/Login/index.html"><div class="account-title">登陆</div></a>
                        </div>
                        <div class="pull-left top2">
                            <div class="widget-1 widget-first widget nav_menu-2 widget_nav_menu">
                                <div class="widget-inner">
                                    <ul  class="menu menu-checkout">
                                        <li class="menu-checkout">
                                            <a class="item-link" href="/Login/register.html">
                                                <span class="menu-title">注册</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--已登录-->
                <div id="have_logged_on" class="hidden pull-right">
                    <div class="sidebar-account pull-left">
                        <a href="javaScript:void(0)" onclick="login_out()"><div class="account-title">退出登陆</div></a>
                    </div>
                    <div class="pull-right top2">
                        <div class="widget-1 widget-first widget nav_menu-2 widget_nav_menu">
                            <div class="widget-inner">
                                <ul  class="menu menu-checkout">
                                    <li class="menu-checkout">
                                        <a class="item-link" href="/User/index.html">
                                            <span class="glyphicon glyphicon-user"></span><span>：</span><span id="nickname"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="header-mid clearfix">
        <div class="container">
            <div class="rows">
                <!-- LOGO -->
                <div class="etrostore-logo pull-left">
                    <a href="/Index/index.html">
                        <img src="/dangdang/Public/Bootstrap/images/icons/logo-orange.png" alt="Shoopy">
                    </a>
                </div>

                <div class="mid-header pull-right">
                    <div class="widget-1 widget-first widget sw_top-2 sw_top">
                        <div class="widget-inner">
                            <div class="top-form top-search">
                                <div class="topsearch-entry">
                                    <form method="get" action="/Index/search.html">
                                        <div>
                                            <input type="text" value="" name="goods_name" placeholder="搜索商品">
                                            </div>
                                            <button type="submit" title="Search" class="fa fa-search button-search-pro form-button"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget sw_top-3 sw_top pull-left">
                        <div class="widget-inner">
                            <div class="top-form top-form-minicart etrostore-minicart pull-left">
                                    <div class="top-minicart-icon pull-right">
                                        <a href="/Cart/index.html">
                                        <i class="fa fa-shopping-cart"></i>
                                    <a class="cart-contents" href="/Cart/index.html" title="购物车">
                                        <span class="minicart-number number-count" id="number-count">0</span>
                                    </a>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom clearfix">
        <div class="container">
            <div class="rows">
                <!-- Primary navbar -->
                <div id="main-menu" class="main-menu">
                    <nav id="primary-menu" class="primary-menu">
                        <div class="navbar-inner navbar-inverse">
                            <div class="resmenu-container">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuprimary_menu">
                                    <span class="sr-only">Categories</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
                                    <!--移动导航栏-->
                                    <ul id="menu-primary-menu" class="etrostore_resmenu">
                                        <li><a href="/Index/index.html" id="shop">首页</a></li>
                                        <li><a href="/Cart/index.html">购物车</a></li>
                                        <li><a href="/User/index.html">我的账号</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--web导航栏-->
                            <ul id="menu-primary-menu-1" class="nav nav-pills nav-mega etrostore-mega etrostore-menures">
                                <li><a href="/Index/index.html">首页</a></li>
                                <li><a href="/Cart/index.html">购物车</a></li>
                                <li><a href="/User/index.html">我的账号</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- /Primary navbar -->

                <div class="top-form top-form-minicart etrostore-minicart pull-left">
                    <div class="top-minicart-icon pull-right">
                        <a href="/Cart/index.html"> <i class="fa fa-shopping-cart"></i></a>
                        <a class="cart-contents" href="/Cart/index.html" title="View your shopping cart">
                            <span class="minicart-number number-count">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script language="JavaScript" type="text/javascript">
    $(function () {
        //获取是否登陆
        var url='/Login/getLogin';
        $.ajax({
            'url':url,
            'type':'get',
            'success':function (res) {
                if(res!='error'){
                    $("#have_logged_on").removeClass('hidden').addClass('show');
                    $("#nickname").text(eval("("+res+")").nickname);
                    $("#not_log_in").removeClass('show').addClass('hidden');
                    var url='/Cart/number_count.html';
                    //获取已登录用户购物车商品数量
                    $.ajax({
                        'url':url,
                        'type':'get',
                        'success':function (res) {
                            if(!isNaN(res)){
                                $(".number-count").text(res);
                            }else{
                                $('.number_count').text(0);
                            }
                        }
                    });
                }else{
                    $("#not_log_in").removeClass('hidden').addClass('show');
                    $("#have_logged_on").removeClass('show').addClass('hidden');
                }

            }
        });



    });
    //退出登陆
    function login_out() {
        $(function () {
            $.ajax({
                'url':'/Login/login_out.html',
                'type':'get',
                'dataType':'json',
                'success':function (res) {
                    if(res=='success'){
                        $("#not_log_in").removeClass('hidden').addClass('show');
                        $("#have_logged_on").removeClass('show').addClass('hidden');
                    }else{
                        layer.msg('退出登陆失败，请重新尝试');
                    }
                }
                })
        });
    }
</script>
<script>
//    layer.msg('hello');
</script>

<div class="container" style="padding-top: 20px;">
    <div class="">
        <div class="pull-left" style="border:1px solid #CCCCCC">
    <ul class="nav nav-pills nav-stacked">
        <li><a href="/User/index.html" class="thumbnail">
            <img style="height:140px;" src="/Public/Uploads/2017-06-26/5951105e910c7.jpg" class="img-responsive" alt=""/>
        </a></li>
        <li><a href="/User/index.html">用户首页</a></li>
        <li><a href="/Cart/index.html">我的购物车</a></li>
        <li><a href="#">已购买的商品</a></li>
        <li><a href="#">评价商品</a></li>
        <li><a href="#">我的发票</a></li>
        <li><a href="/Site/site.html">添加收货地址</a></li>
    </ul>
</div>
        <div class="pull-left">
            <table class="table text-center" style="border:1px #CCCCCC solid;width:800px;">
                <tr style="background: #CCCCCC">
                    <td colspan="2">
                        <a href="" class="navbar-brand text-muted"><?php echo $_SESSION['nickname']; ?></a>
                    </td>
                    <td><a href="" class="navbar-brand text-muted">收货地址</a></td>
                    <td><a href="" class="navbar-brand text-muted">我的优惠</a></td>
                    <td><a href="" class="navbar-brand text-muted">购物车</a></td>
                </tr>
                <tr class="">
                    <td style="border:1px #CCCCCC solid;"><a href="/Order/index.html" id="cart_count">待付款</a></td>
                    <td style="border:1px #CCCCCC solid;">待发货</td>
                    <td style="border:1px #CCCCCC solid;">待收货</td>
                    <td style="border:1px #CCCCCC solid;">待评价</td>
                    <td style="border:1px #CCCCCC solid;">退货</td>
                </tr>
            </table>
            <script language="JavaScript" type="text/javascript">
                $(function () {
                    var url='/Cart/cart_count';
                    $.ajax({
                        'url':url,
                        'type':'get',
                        'success':function (res) {
                           if(!isNaN(res)){
                               $("#cart_count").append("<span style='background: orangered;' class='badge'>"+res+"</span>");
                           }
                        }
                    });
                });
            </script>
            <table class="table text-center" style="border:1px #CCCCCC solid;">
                <tr style="background: #CCCCCC">
                    <td colspan="5">
                        <div class="pull-left">
                            <span class="glyphicon glyphicon-plane"></span>
                        </div>
                        <a href="" class="pull-left text-muted">我的物流</a>
                    </td>
                </tr>
                <tr class="">
                    <td><img src="" alt=""></td>
                    <td colspan="3">
                        <p>快件已签收,感谢您使用中通快递!</p>
                        <p>2017-07-19 13:30:32 <a href="">查看物流明细</a></p>
                    </td>
                    <td><button class="btn" type="button">确认收货</button></td>
                </tr>
            </table>
            <!--<ul class="nav nav-pills">-->
            <!--<li  class="pull-left">"/></div></li>-->
            <!--<li  class="pull-left">name</li>-->
            <!--<li class="pull-left"><a href="#">编辑资料</a></li>-->
            <!--</ul>-->
        </div>
        <div class="">

        </div>
    </div>

</div>
<footer id="footer" class="footer default theme-clearfix">
    <!-- Content footer -->
    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid footer-style1 vc_row-no-padding">
        <div class="container float wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid footer-bottom">
                        <div class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="ya-logo">
                                                <a href="#">
                                                    <img src="/Public/Bootstrap/images/icons/logo-footer.png" alt="logo" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                        <div class="wpb_wrapper">
                                            <div class="infomation">
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>

                                                <div class="info-support">
                                                    <ul>
                                                        <li>No 1123, Marmora Road, Glasgow, D04 89GR.</li>
                                                        <li>(801) 2345 - 6788 / (801) 2345 - 6789</li>
                                                        <li><a href="mailto:contact@etrostore.com">support@etrostore.com</a></li>
                                                    </ul>
                                                </div>

                                                <div class="store">
                                                    <a href="#">
                                                        <img src="/Public/Bootstrap/images/1903/app-store.png" alt="store" title="store" />
                                                    </a>

                                                    <a href="#">
                                                        <img src="/Public/Bootstrap/images/1903/google-store.png" alt="store" title="store" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_wp_custommenu wpb_content_element">
                                        <div class="widget widget_nav_menu">
                                            <h2 class="widgettitle">Support</h2>

                                            <ul id="menu-support" class="menu">
                                                <li class="menu-product-support">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Product Support</span>
                                                    </a>
                                                </li>

                                                <li class="menu-pc-setup-support-services">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">PC Setup & Support Services</span>
                                                    </a>
                                                </li>

                                                <li class="menu-extended-service-plans">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Extended Service Plans</span>
                                                    </a>
                                                </li>

                                                <li class="menu-community">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Community</span>
                                                    </a>
                                                </li>

                                                <li class="menu-product-manuals">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Product Manuals</span>
                                                    </a>
                                                </li>

                                                <li class="menu-product-registration">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Product Registration</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_wp_custommenu wpb_content_element">
                                        <div class="widget widget_nav_menu">
                                            <h2 class="widgettitle">Your Links</h2>

                                            <ul id="menu-your-links" class="menu">
                                                <li class="menu-my-account">
                                                    <a class="item-link" href="my_account.html">
                                                        <span class="menu-title">My Account</span>
                                                    </a>
                                                </li>

                                                <li class="menu-order-tracking">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Order Tracking</span>
                                                    </a>
                                                </li>

                                                <li class="menu-watch-list">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Watch List</span>
                                                    </a>
                                                </li>

                                                <li class="menu-customer-service">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Customer Service</span>
                                                    </a>
                                                </li>

                                                <li class="menu-returns-exchanges">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Returns / Exchanges</span>
                                                    </a>
                                                </li>

                                                <li class="menu-faqs">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">FAQs</span>
                                                    </a>
                                                </li>

                                                <li class="menu-financing">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Financing</span>
                                                    </a>
                                                </li>

                                                <li class="menu-card">
                                                    <a class="item-link" href="#">
                                                        <span class="menu-title">Card</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                        <div class="wpb_wrapper">
                                            <div class="sp-map">
                                                <div class="title">
                                                    <h2>find a store</h2>
                                                </div>

                                                <img src="/Public/Bootstrap/images/1903/map.jpg" alt="map" title="map" />

                                                <a href="#" class="link-map">Store locator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_wp_custommenu wpb_content_element wrap-cus">
                        <div class="widget widget_nav_menu">
                            <ul id="menu-infomation" class="menu">
                                <li class="menu-about-us">
                                    <a class="item-link" href="about_us.html">
                                        <span class="menu-title">About Us</span>
                                    </a>
                                </li>

                                <li class="menu-customer-service">
                                    <a class="item-link" href="#">
                                        <span class="menu-title">Customer Service</span>
                                    </a>
                                </li>

                                <li class="menu-privacy-policy">
                                    <a class="item-link" href="#">
                                        <span class="menu-title">Privacy Policy</span>
                                    </a>
                                </li>

                                <li class="menu-site-map">
                                    <a class="item-link" href="#">
                                        <span class="menu-title">Site Map</span>
                                    </a>
                                </li>

                                <li class="menu-orders-and-returns">
                                    <a class="item-link" href="#">
                                        <span class="menu-title">Orders and Returns</span>
                                    </a>
                                </li>

                                <li class="menu-contact-us">
                                    <a class="item-link" href="contact_us.html">
                                        <span class="menu-title">Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>

    <div class="footer-copyright style1">
        <div class="container">
            <!-- Copyright text -->
            <div class="copyright-text pull-left">
                <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </div>

            <div class="sidebar-copyright pull-right">
                <div class="widget-1 widget-first widget text-4 widget_text">
                    <div class="widget-inner">
                        <div class="textwidget">
                            <div class="payment">
                                <a href="#">
                                    <img src="/Public/Bootstrap/images/1903/paypal.png" alt="payment" title="payment" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>