<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品分类</title>
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
<div>
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
    <div class="listings-title">
    <div class="container">
        <div class="wrap-title">
            <h1>分类</h1>
            <div class="bread">
                <div class="breadcrumbs theme-clearfix">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li><a href="/Index/index.html">首页</a><span class="go-page"></span></li>
                            <li><a href="">商品详情</a><span class="go-page"></span></li>
                            <li class="active"><span>Turkey Qui</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row" id="page">
        <?php if(is_array($goods)): foreach($goods as $key=>$value): ?><a href="/Index/item/id/<?php echo ($value["id"]); ?>.html">
           <div style="padding-top:15px;" class="col-md-3">
               <div class="thumbnail">
                       <img  class="img-responsive " src="/Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?>" alt="<?php echo ($value["goods_name"]); ?>"/>

                   <div class="caption">
                       <p><?php echo ($value["goods_name"]); ?></p>
                       <div>
                           <h3 class="pull-left">
                               <span class="text-error"><span>￥</span><?php echo ($value["sales_price"]); ?></span>
                               <small class="text-muted"><del><span>￥</span><?php echo ($value["market_price"]); ?></del></small>
                           </h3>
                       </div>
                       <br/>
                       <hr/>
                       <span class="text-left">月销8337</span>
                       <span class="pull-right">包邮</span>
                   </div>
               </div>
           </div>
           </a><?php endforeach; endif; ?>
    </div>
</div>
<script type="text/javascript" src="/Public/Bootstrap/js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/jquery/js.cookie.min.js"></script>
<!-- OPEN LIBS JS -->
<script type="text/javascript" src="/Public/Bootstrap/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/slick-1.6.0/slick.min.js"></script>

<script type="text/javascript">
    /* <![CDATA[ */
    var woocommerce_price_slider_params = {"currency_symbol":"$","currency_pos":"left","min_price":"100","max_price":"500"};
    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
    /* ]]> */
</script>

<script type="text/javascript" src="/Public/Bootstrap/js/widget.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/mouse.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/slider.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/js_composer/js_composer_front.min.js"></script>

<script type="text/javascript" src="/Public/Bootstrap/js/yith-woocommerce-compare/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/sw_core/isotope.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/sw_core/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/sw_woocommerce/category-ajax.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/sw_woocommerce/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/woocommerce/price-slider.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/woocommerce/single-product.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/woocommerce/prettyPhoto/jquery.prettyPhoto.init.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/woocommerce/prettyPhoto/jquery.prettyPhoto.min.js"></script>

<script type="text/javascript" src="/Public/Bootstrap/js/plugins.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/megamenu.min.js"></script>
<script type="text/javascript" src="/Public/Bootstrap/js/main.min.js"></script>
<script type="text/javascript" src="/Public/layer/layer.js"></script>
<script type="text/javascript">
    var sticky_navigation_offset_top = $("#header .header-bottom").offset().top;
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop();
        if (scroll_top > sticky_navigation_offset_top) {
            $("#header .header-bottom").addClass("sticky-menu");
            $("#header .header-bottom").css({ "top":0, "left":0, "right" : 0 });
        } else {
            $("#header .header-bottom").removeClass("sticky-menu");
        }
    };
    sticky_navigation();
    $(window).scroll(function() {
        sticky_navigation();
    });

    $(document).ready (function () {
        $( ".show-dropdown" ).each(function(){
            $(this).on("click", function(){
                $(this).toggleClass("show");
                var $element = $(this).parent().find( "> ul" );
                $element.toggle( 300 );
            });
        });
    });
</script>

<!--[if gte IE 9]><!-->
<script type="text/javascript">
    var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');
    request = true;

    b[c] = b[c].replace( rcs, ' ' );
    // The customizer requires postMessage and CORS (if the site is cross domain)
    b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
</script>
<!--<![endif]-->
<script>
    $(function () {
        var id='<?php echo ($id); ?>';
        var goods_name='<?php echo ($goods_name); ?>';
        var i=1;
        var height=$(window).height();//页面可视高度
        $(window).scroll(function () {
            var scrollTop=$(window).scrollTop();
            var pageHeight=$(document.body).height();
            var math=(pageHeight-height-scrollTop)/height;
            if(math<0.1){
                var url='/Index/search';
                if(id){
                    var data={'page':i,'id':id};
                }else if(goods_name){
                    var data={'page':i,'goods_name':goods_name};
                }else{
                    var data={'page':i};
                }
                i++;
                $.getJSON(url,data,function(arr){
                    var arr=eval("("+arr+")");
                    var add='';
                    $.each(arr,function (i,n) {
                        add+="<a href='/Index/item/id/"+n.id+".html'>";
                        add+="<div style='padding-top:15px;' class='col-md-3'>";
                        add+="<div class='thumbnail'>";
                        add+="<img  class='img-responsive ' src='/Public/Uploads/"+n.time+"/"+n.images+"' alt='"+n.goods_name+"'/>";
                        add+="<div class='caption'>";
                        add+="<p>"+n.goods_name+"</p>";
                        add+="<div>";
                        add+="<h3 class='pull-left'>";
                        add+="<span class='text-error'><span>￥</span>"+n.sales_price+"</span>";
                        add+="<small class='text-muted'><del><span>￥</span>"+n.sales_price+"</del></small>";
                        add+="</h3>";
                        add+="</div>";
                        add+="<br/>";
                        add+="<hr/>";
                        add+="<span class='text-left'>月销8337</span>";
                        add+="<span class='pull-right'>包邮</span>";
                        add+="</div>";
                        add+="</div>";
                        add+="</div>";
                        add+="</a>";
                    });
                    $("#page").append(add);
                });
            }

        });
    });
</script>
</body>
</html>