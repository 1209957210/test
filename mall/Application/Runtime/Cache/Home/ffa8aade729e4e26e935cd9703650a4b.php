<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>结算中心</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- GOOGLE WEB FONTS -->
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/font-awesome.min.css">


    <!-- BOOTSTRAP 3.3.7 CSS -->
    <!--<link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <!-- SLICK v1.6.0 CSS -->
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/slick-1.6.0/slick.css"/>

    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/yith-woocommerce-compare/colorbox.css"/>
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/owl-carousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/js_composer/js_composer.min.css"/>
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/woocommerce/woocommerce.css"/>
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/yith-woocommerce-wishlist/style.css"/>


    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/yith-woocommerce-wishlist/style.css" />
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/custom.css" />
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/app-orange.css" id="theme_color" />
    <link rel="stylesheet" href="" id="rtl" />
    <link rel="stylesheet" href="/dangdang/Public/Bootstrap/css/app-responsive.css" />

    
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/jquery/jquery.min.js"></script>


</head>
<body>
<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
                            <a href="/dangdang/Login/index.html"><div class="account-title">登陆</div></a>
                        </div>
                        <div class="pull-left top2">
                            <div class="widget-1 widget-first widget nav_menu-2 widget_nav_menu">
                                <div class="widget-inner">
                                    <ul  class="menu menu-checkout">
                                        <li class="menu-checkout">
                                            <a class="item-link" href="/dangdang/Login/register.html">
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
                                        <a class="item-link" href="/dangdang/User/index.html">
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
                    <a href="/dangdang/Index/index.html">
                        <img src="/dangdang/Public/Bootstrap/images/icons/logo-orange.png" alt="Shoopy">
                    </a>
                </div>

                <div class="mid-header pull-right">
                    <div class="widget-1 widget-first widget sw_top-2 sw_top">
                        <div class="widget-inner">
                            <div class="top-form top-search">
                                <div class="topsearch-entry">
                                    <form method="get" action="/dangdang/Index/search.html">
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
                                        <a href="/dangdang/Cart/index.html">
                                        <i class="fa fa-shopping-cart"></i>
                                    <a class="cart-contents" href="/dangdang/Cart/index.html" title="购物车">
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
                                        <li><a href="/dangdang/Index/index.html" id="shop">首页</a></li>
                                        <li><a href="/dangdang/Cart/index.html">购物车</a></li>
                                        <li><a href="checkout.html">结账</a></li>
                                        <li><a href="/dangdang/User/index.html">我的账号</a></li>
                                        <li><a href="shop.html">商店</a></li>
                                        <li><a href="simple_product.html">产品</a></li>
                                        <li><a href="about_us.html">关于我们</a></li>
                                        <li><a href="contact_us.html">联系我们</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--web导航栏-->
                            <ul id="menu-primary-menu-1" class="nav nav-pills nav-mega etrostore-mega etrostore-menures">
                                <li><a href="/dangdang/Index/index.html">首页</a></li>
                                <li><a href="/dangdang/Cart/index.html">购物车</a></li>
                                <li><a href="checkout.html">结账</a></li>
                                <li><a href="/dangdang/User/index.html">我的账号</a></li>
                                <li><a href="shop.html">商店</a></li>
                                <li><a href="simple_product.html">产品</a></li>
                                <li><a href="about_us.html">关于我们</a></li>
                                <li><a href="contact_us.html">联系我们</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- /Primary navbar -->

                <div class="top-form top-form-minicart etrostore-minicart pull-left">
                    <div class="top-minicart-icon pull-right">
                        <a href="/dangdang/Cart/index.html"> <i class="fa fa-shopping-cart"></i></a>
                        <a class="cart-contents" href="/dangdang/Cart/index.html" title="View your shopping cart">
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
        var url='/dangdang/Login/getLogin';
        $.ajax({
            'url':url,
            'type':'get',
            'success':function (res) {
                if(res!='error'){
                    $("#have_logged_on").removeClass('hidden').addClass('show');
                    $("#nickname").text(eval("("+res+")").nickname);
                    $("#not_log_in").removeClass('show').addClass('hidden');
                    var url='/dangdang/Cart/number_count.html';
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
                'url':'/dangdang/Login/login_out.html',
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
<div class="container text-muted">
    <form action="/dangdang/Order/close_an_account.html" method="post">
        <div style="padding-top:10px;"><h4>填写并核对订单信息</h4></div>
        <div style="padding-top:10px;">
            <div>
                <span class="pull-left"><h5>确认收货地址</h5></span>
                <span class="pull-right "><a href="/dangdang/Site/site.html" class="text-primary "><h5>管理收货地址</h5></a></span>
            </div>
            <hr/>
            <ul class="list-group" >
                <?php if(is_array($site)): foreach($site as $key=>$val): if(($val["state"]) == "1"): ?><li class="list-group-item">
                            <input type="radio" checked="checked" id="<?php echo ($val["id"]); ?>" name="site_id" value="<?php echo ($val["id"]); ?>">
                            <label for="<?php echo ($val["id"]); ?>">
                                <?php echo ($val["province"]["name"]); ?> <?php echo ($val["city"]["name"]); ?> <?php echo ($val["region"]["name"]); ?> <?php echo ($val["address"]); ?> （<?php echo ($val["name"]); ?> 收）<?php echo ($val["phone"]); ?>
                            </label>
                            <span class="pull-right">默认收货地址</span>
                        </li>
                        <?php else: ?>
                        <li class="list-group-item">
                            <input  type="radio" id="<?php echo ($val["id"]); ?>" name="site_id" value="<?php echo ($val["id"]); ?>">
                            <label for="<?php echo ($val["id"]); ?>">
                                <?php echo ($val["province"]["name"]); ?> <?php echo ($val["city"]["name"]); ?> <?php echo ($val["region"]["name"]); ?> <?php echo ($val["address"]); ?> （<?php echo ($val["name"]); ?> 收）<?php echo ($val["phone"]); ?>
                            </label>
                        </li><?php endif; endforeach; endif; ?>
            </ul>
        </div>
        <div>
            <span>选择付款方式</span>
            <hr>
            <ul class="nav nav-pills">
                <li role="presentation" class="active">
                    <div  class="111">
                        <input onchange="gaibian(this)" checked="checked" class="hidden" type="radio" id="alipay" name="pay" value="alipay">
                        <label for="alipay">
                            <img src="/dangdang/Public/Images/zf/2410b912c8fcc3cef418db839845d688d53f20a1.png" alt="支付宝支付"/>
                        </label>
                    </div></li>
                <li role="presentation">
                    <div id="zfbs" class="zfb">
                        <input class="hidden" onchange="gaibian(this)" type="radio" id="WecChat" value="wechat" name="pay">
                        <label for="WecChat">
                            <img src="/dangdang/Public/Images/zf/2410b912c8fcc3cef418db839845d688d53f20a1.png" alt="微信支付"/>
                        </label>
                    </div></li>
            </ul>


        </div>
        <hr/>
        <div>
            <span class=""><h5>确认订单信息</h5></span>
        </div>
        <hr/>
        <table class="table table-condensed">
                <thead>
                <tr>
                    <th class="product-thumbnail">商品</th>
                    <th colspan="2" class="product-name">名称</th>
                    <th class="product-name">商品属性</th>
                    <th class="product-price">单价</th>
                    <th class="product-quantity">数量</th>
                    <th class="product-quantity">优惠方式</th>
                    <th class="product-subtotal" >小计</th>
                </tr>
                </thead>
                <!--购物车商品信息-->
                <tbody id="cart_content text-center">
                <?php if(is_array($arr)): foreach($arr as $key=>$value): ?><input class="id" type="hidden" name="cart_id[]" value="<?php echo ($value["cid"]); ?>"/>
                    <tr class='cart_item' id="goods-<?php echo ($value["id"]); ?>-<?php echo ($value["color"]); ?>-<?php echo ($value["size"]); ?>">
                        <td class='product-thumbnail'>
                            <img style="height:80px;" src='/dangdang/Public/Uploads/<?php echo ($value["time"]); ?>/<?php echo ($value["images"]); ?>' class='attachment-shop_thumbnail size-shop_thumbnail wp-post-image' alt="<?php echo ($value["goods_name"]); ?>">
                        </td>
                        <td colspan="2" class='product-name' data-title='Product'>
                            <span><?php echo ($value["goods_name"]); ?></span>
                        </td>
                        <td class='product-price' data-title='color-size'>
                            <span class='woocommerce-Price-amount amount'><?php echo ($value["color"]); echo ($value["size"]); ?></span>
                        </td>
                        <td class='product-price' data-title='Price'>
                                                   <span class='woocommerce-Price-amount amount'>
                                                       <span class='woocommerce-Price-currencySymbol'>￥</span><?php echo ($value["sales_price"]); ?></span>
                        </td>
                        <td class='product-quantity' data-title='Quantity'>
                            <input type="hidden" name="count[]" value="<?php echo ($value["count"]); ?>">
                            <span class="text-muted text-center"><?php echo ($value["count"]); ?></span>
                            <!--<input type='number' onchange="num(this,'<?php echo ($value["id"]); ?>','<?php echo ($value["color"]); ?>','<?php echo ($value["size"]); ?>','<?php echo ($value["sales_price"]); ?>')" id="num-<?php echo ($value["id"]); ?>-<?php echo ($value["color"]); ?>-<?php echo ($value["size"]); ?>" step='1' min='0' max='' name='' value='<?php echo ($value["count"]); ?>' title='数量' class='input-text qty text purchase_quantity' size='4' pattern='[0-9]*' inputmode='numeric'>-->
                        </td>
                        <td class='product-quantity' data-title='Quantity'>
                            <span class="text-muted text-center">无优惠</span>
                            <!--<input type='number' onchange="num(this,'<?php echo ($value["id"]); ?>','<?php echo ($value["color"]); ?>','<?php echo ($value["size"]); ?>','<?php echo ($value["sales_price"]); ?>')" id="num-<?php echo ($value["id"]); ?>-<?php echo ($value["color"]); ?>-<?php echo ($value["size"]); ?>" step='1' min='0' max='' name='' value='<?php echo ($value["count"]); ?>' title='数量' class='input-text qty text purchase_quantity' size='4' pattern='[0-9]*' inputmode='numeric'>-->
                        </td>
                        <td class='product-subtotal' data-title='Total'>
                                                   <span class='woocommerce-Price-amount amount'>
                                                       <span class='woocommerce-Price-currencySymbol'>￥</span>
                                                       <span id="price-<?php echo ($value["id"]); ?>-<?php echo ($value["color"]); ?>-<?php echo ($value["size"]); ?>" class="sales-price">
                                                           <?php $num=$value["sales_price"]*$value["count"];echo sprintf("%.2f",$num); ?>
                                                       </span>
                                                   </span>
                        </td>
                    </tr><?php endforeach; endif; ?>
                <tr class="cart-subtotal" style="background: #CCCCCC">
                    <td><!--<td><input type="checkbox" name="checkAll" id="checkAll" onclick="check_All(this)"><label for="checkAll">全选</label></td>--></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>合计：</span><span class="text-danger">￥</span><span id="subtotal" class="text-danger">
                                                            <?php $price=''; foreach($arr as $key=>$val){ $price+=$val['sales_price']*$val['count']; } echo sprintf("%.2f",$price); ?>
                                            <input type="hidden" name="total_price" value="<?php $price='';foreach($arr as $key=>$val){$price+=$val['sales_price']*$val['count'];}echo sprintf('%.2f',$price); ?>">
                                                       </span>
                    </td>
                    <td>已选商品 <span style="color:red;"><?php $src=count($arr);echo $src; ?></span> 件</td>
                    <td><button type="submit" onclick="close_an_account()" class="btn ">前往结算</button></td>
                </tr>
                </tbody>
        </table>
    </form>
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
                                                    <img src="/dangdang/Public/Bootstrap/images/icons/logo-footer.png" alt="logo" />
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
                                                        <img src="/dangdang/Public/Bootstrap/images/1903/app-store.png" alt="store" title="store" />
                                                    </a>

                                                    <a href="#">
                                                        <img src="/dangdang/Public/Bootstrap/images/1903/google-store.png" alt="store" title="store" />
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

                                                <img src="/dangdang/Public/Bootstrap/images/1903/map.jpg" alt="map" title="map" />

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
                                    <img src="/dangdang/Public/Bootstrap/images/1903/paypal.png" alt="payment" title="payment" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/jquery/js.cookie.min.js"></script>
<!-- OPEN LIBS JS -->
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/slick-1.6.0/slick.min.js"></script>

<script type="text/javascript">
    /* <![CDATA[ */
    var woocommerce_price_slider_params = {"currency_symbol":"$","currency_pos":"left","min_price":"100","max_price":"500"};
    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
    /* ]]> */
</script>

<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/widget.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/mouse.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/slider.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/js_composer/js_composer_front.min.js"></script>

<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/yith-woocommerce-compare/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/sw_core/isotope.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/sw_core/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/sw_woocommerce/category-ajax.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/sw_woocommerce/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/woocommerce/price-slider.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/woocommerce/single-product.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/woocommerce/prettyPhoto/jquery.prettyPhoto.init.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/woocommerce/prettyPhoto/jquery.prettyPhoto.min.js"></script>

<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/plugins.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/megamenu.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/Bootstrap/js/main.min.js"></script>
<script type="text/javascript" src="/dangdang/Public/layer/layer.js"></script>
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
//    function close_an_account() {
//        $(function () {
//            alert($("input[type='hidden']").length);
//            alert($('#subtotal').text());
//        });
//    }
//默认支付方式，添加选中样式
$(function () {
$("#alipay").parent().css('border','1px red solid').addClass("glyphicon glyphicon-ok");
});
function gaibian(obj) {
$(function () {
if(obj.checked){
//删除选中样式
$(".hidden").parent().css("border",'none').removeClass("glyphicon glyphicon-ok");
//添加选中样式
$(obj).parent().css('border','1px red solid').addClass("glyphicon glyphicon-ok");

}
});
}
</script>
</body>
</html>