<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品</title>
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
<body class="product-template-default single single-product woocommerce woocommerce-page">

<!--导航栏-->
<div class="body-wrapper theme-clearfix text-muted">
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
    <!--导航栏下方内容块-->
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
    <div class="container">
        <div class="row">
            <div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12" role="main">
                <div id="container">
                    <div id="content" role="main">
                        <div class="single-product clearfix">
                            <div id="product-01" class="product type-product status-publish has-post-thumbnail product_cat-accessories product_brand-global-voices first outofstock featured shipping-taxable purchasable product-type-simple">
                                <div class="product_detail row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                        <div class="slider_img_productd">
                                            <!-- woocommerce_show_product_images -->
                                            <!--展示产品图片-->
                                            <div id="product_img_01" class="product-images loading" data-rtl="false">
                                                <div class="product-images-container clearfix thumbnail-bottom">
                                                    <!-- Image Slider -->
                                                        <!--滑块图片-->
                                                        <div class="slider product-responsive">
                                                            <?php if(is_array($item)): foreach($item as $key=>$value): ?><div class="item-img-slider">
                                                                <div class="images">
                                                                    <a href="/Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> " data-rel="prettyPhoto[product-gallery]" class="zoom">
                                                                        <img width="600" height="600" src="/Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?>" class="attachment-shop_single size-shop_single" alt="" srcset="/Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 600w, /Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 150w, /Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 300w, /Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 180w" sizes="(max-width: 600px) 100vw, 600px">
                                                                    </a>
                                                                </div>
                                                            </div><?php endforeach; endif; ?>
                                                        </div>
                                                        <!-- Thumbnail Slider -->
                                                        <!--缩略图滑块-->
                                                        <div class="slider product-responsive-thumbnail" id="product_thumbnail_247">
                                                            <?php if(is_array($item)): foreach($item as $key=>$value): ?><div class="item-thumbnail-product">
                                                                <div class="thumbnail-wrapper">
                                                                    <img width="180" height="180" src="/Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt="<?php echo ($value["goods_name"]); ?>" srcset="/Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 180w, /Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 150w, /Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 300w, /Public/Uploads/<?php echo date('Y-m-d',$value['time']); ?>/<?php echo ($value["images"]); ?> 600w" sizes="(max-width: 180px) 100vw, 180px">
                                                                </div>
                                                            </div><?php endforeach; endif; ?>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--产品信息-->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                            <?php if(is_array($item)): foreach($item as $key=>$value): if(($value["first"]) == "1"): ?><div class="content_product_detail">
                                                        <h1 class="text-muted product_title entry-title"><?php echo ($value["goods_name"]); ?></h1>

                                                        <div class="reviews-content text-muted">
                                                            <div class="star"></div>
                                                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow"><span class="count">评分</span></a>
                                                        </div>
                                                        <div>
                                                            <p class="text-muted">市场价：<del>￥<span><?php echo ($value["market_price"]); ?></span></del></p>
                                                            <p class="price">售价：<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">￥</span><?php echo ($value["sales_price"]); ?></span></p>
                                                        </div>

                                                        <?php $color=explode(',',$value['color']);$size=explode(',',$value['size']); ?>
                                                        <div class="product-info clearfix">
                                                            <span class="pull-left">尺码</span>
                                                            <div class="">
                                                              <?php if(is_array($size)): foreach($size as $key=>$vo): if($key == 0): ?><label  class="radio-inline">
                                                                          <input type="radio" name="size"  checked="checked"><button type="button" class="btn btn-info" ><?php echo ($vo); ?></button>
                                                                      </label>
                                                                      <?php else: ?>
                                                                      <label  class="radio-inline">
                                                                          <input type="radio" name="size" ><button type="button" class="btn btn-info" ><?php echo ($vo); ?></button>
                                                                      </label><?php endif; endforeach; endif; ?>
                                                            </div>


                                                        </div>
                                                        <div class="product-info clearfix">
                                                            <span class="pull-left">颜色</span>
                                                            <div>
                                                               <?php if(is_array($color)): foreach($color as $key=>$vo): if($key == 0): ?><label  class="radio-inline">
                                                                          <input type="radio" name="color" checked="checked"><button type="button" class="btn btn-info" ><?php echo ($vo); ?></button>
                                                                      </label>
                                                                       <?php else: ?>
                                                                       <label  class="radio-inline">
                                                                           <input type="radio" name="color" ><button type="button" class="btn btn-info" ><?php echo ($vo); ?></button>
                                                                       </label><?php endif; endforeach; endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="product-info clearfix row">
                                                            <div class="col-md-1 col-xs-2"><span class="pull-left ">数量</span></div>
                                                            <div class="form-group col-md-3 col-xs-7">
                                                                <div class="input-group">
                                                                    <div class="btn input-group-addon" onclick="number(this)">-</div>
                                                                    <input type="text"value="1" class="form-control number_count"/>
                                                                    <div class="btn input-group-addon" onclick="number(this)">+</div>
                                                                    <div class=""><span>件</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-3"><span>(库存<?php echo ($value["stock"]); ?>件)</span></div>
                                                        </div>
                                                        <button onclick="login(this)" id="add_cart" type="button" class="btn btn-info btn-primary btn-lg" data-toggle="modal" >
                                                            加入购物车
                                                        </button>
                                                        <div class="row"  id="cart_border">
                                                            <div class="col-md-3 clo-xs-4">
                                                                <!-- Button trigger modal -->
                                                                <!-- Modal -->
                                                                <form action="/Cart/add_cart.html" method="post" id="size">
                                                                    <input type="hidden" name="id" value="<?php echo ($value["id"]); ?>"/>
                                                                    <div class="modal fade" id="purchase" tabindex="-1" role="dialog" aria-labelledby="buy">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                    <h4 class="modal-title" id="buy">请选择您要的商品信息</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="product-info clearfix">
                                                                                        <span class="pull-left">尺码</span>
                                                                                        <div class="">
                                                                                            <?php if(is_array($size)): foreach($size as $key=>$vi): if($key == 0): ?><label  class="radio-inline">
                                                                                                    <input type="radio" name="size" class="size" value="<?php echo ($vi); ?>" checked="checked"><button type="button" class="btn btn-info" ><?php echo ($vi); ?></button>
                                                                                                </label>
                                                                                                    <?php else: ?>
                                                                                                    <label  class="radio-inline">
                                                                                                        <input type="radio" name="size" class="size" value="<?php echo ($vi); ?>"><button type="button" class="btn btn-info" ><?php echo ($vi); ?></button>
                                                                                                    </label><?php endif; endforeach; endif; ?>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="product-info clearfix">
                                                                                        <span class="pull-left">颜色</span>
                                                                                        <div class="size_radio">
                                                                                            <?php if(is_array($color)): foreach($color as $key=>$vo): if($key == 0): ?><label  class="radio-inline">
                                                                                                    <input type="radio" name="color"  value="<?php echo ($vo); ?>" checked="checked"><button type="button" class="btn btn-info" ><?php echo ($vo); ?></button>
                                                                                                </label>
                                                                                                    <?php else: ?>
                                                                                                    <label  class="radio-inline">
                                                                                                        <input type="radio" name="color"  value="<?php echo ($vo); ?>"><button type="button" class="btn btn-info" ><?php echo ($vo); ?></button>
                                                                                                    </label><?php endif; endforeach; endif; ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product-info clearfix row">
                                                                                        <div class="col-md-1 col-xs-2"><span class="pull-left ">数量</span></div>
                                                                                        <div class="form-group col-md-4 col-xs-7">
                                                                                            <div class="input-group">
                                                                                                <div class="btn input-group-addon" onclick="number(this)">-</div>
                                                                                                <input type="text"value="1" name="count" class="form-control number_count"/>
                                                                                                <div class="btn input-group-addon" onclick="number(this)">+</div>
                                                                                                <div class=""><span>件</span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                                                        <button id="button" type="button" class="btn btn-primary">加入购物车</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div><?php endif; endforeach; endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs clearfix">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="description_tab active">
                                            <a href="#tab-description" data-toggle="tab">商品详情</a>
                                        </li>
                                        <li class="reviews_tab ">
                                            <a href="#tab-reviews" data-toggle="tab">评论</a>
                                        </li>
                                    </ul>

                                    <div class="clear"></div>

                                        <div class=" tab-content">
                                            <div class="tab-pane active" id="tab-description">
                                                <pre><?php echo ($item["0"]["description"]); ?></pre>
                                                <pre style="margin: auto;"><img src="/Public/Uploads/<?php echo date('Y-m-d',$item['1']['time']); ?>/<?php echo ($item["0"]["image"]); ?>"/></pre>
                                            </div>

                                            <div class="tab-pane " id="tab-reviews">
                                                <div id="reviews">
                                                    <div id="comments">
                                                        <h2>Reviews</h2>
                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <h3 id="reply-title" class="comment-reply-title">
                                                                    Be the first to review "turkey qui"
                                                                    <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small>
                                                                </h3>

                                                                <form action="" method="post" id="commentform" class="comment-form">
                                                                    <p class="comment-form-rating">
                                                                        <label for="rating">Your Rating</label>
                                                                        <select name="rating" id="rating">
                                                                            <option value="">Rate ...</option>
                                                                            <option value="5">Perfect</option>
                                                                            <option value="4">Good</option>
                                                                            <option value="3">Average</option>
                                                                            <option value="2">Not that bad</option>
                                                                            <option value="1">Very Poor</option>
                                                                        </select>
                                                                    </p>

                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Review</label>
                                                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                    </p>

                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                    </p>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="bottom-single-product theme-clearfix">
                                <div class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
                                    <div class="widget-inner">
                                        <div id="slider_sw_related_upsell_widget-2" class="sw-woo-container-slider related-products responsive-slider clearfix loading" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                            <div class="resp-slider-container">
                                                <div class="box-slider-title">
                                                    <h2><span>相似商品</span></h2>
                                                </div>

                                                <div class="slider responsive">
                                                    <div class="item ">
                                                        <div class="item-wrap">
                                                            <div class="item-detail">
                                                                <div class="item-img products-thumb">
                                                                    <a href="simple_product.html">
                                                                        <div class="product-thumb-hover">
                                                                            <img width="300" height="300" src="/Public/Bootstrap/images/1903/49-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="/Public/Bootstrap/images/1903/49-300x300.jpg 300w, /Public/Bootstrap/images/1903/49-150x150.jpg 150w, /Public/Bootstrap/images/1903/49-180x180.jpg 180w, /Public/Bootstrap/images/1903/49.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <!-- add to cart, wishlist, compare -->
                                                                    <div class="item-bottom clearfix">
                                                                        <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                        <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                            <div class="yith-wcwl-add-button show" style="display:block">
                                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                                <img src="/Public/Bootstrap/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">
                                                                            0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4><a href="simple_product.html" title="turkey qui">Turkey Qui</a></h4>

                                                                    <!-- price -->
                                                                    <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">$</span>300.00
																				</span>
																			</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item ">
                                                        <div class="item-wrap">
                                                            <div class="item-detail">
                                                                <div class="item-img products-thumb">
                                                                    <span class="onsale">Sale!</span>
                                                                    <a href="simple_product.html">
                                                                        <div class="product-thumb-hover">
                                                                            <img width="300" height="300" src="/Public/Bootstrap/images/1903/39-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="/Public/Bootstrap/images/1903/39-300x300.jpg 300w, /Public/Bootstrap/images/1903/39-150x150.jpg 150w, /Public/Bootstrap/images/1903/39-180x180.jpg 180w, /Public/Bootstrap/images/1903/39.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <!-- add to cart, wishlist, compare -->
                                                                    <div class="item-bottom clearfix">
                                                                        <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                        <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                            <div class="yith-wcwl-add-button show" style="display:block">
                                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                                <img src="/Public/Bootstrap/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">
                                                                            0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4><a href="simple_product.html" title="iPad Mini 2 Retina">iPad Mini 2 Retina</a></h4>

                                                                    <!-- price -->
                                                                    <div class="item-price">
																			<span>
																				<del>
																					<span class="woocommerce-Price-amount amount">
																						<span class="woocommerce-Price-currencySymbol">$</span>300.00
																					</span>
																				</del>

																				<ins>
																					<span class="woocommerce-Price-amount amount">
																						<span class="woocommerce-Price-currencySymbol">$</span>290.00
																					</span>
																				</ins>
																			</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item ">
                                                        <div class="item-wrap">
                                                            <div class="item-detail">
                                                                <div class="item-img products-thumb">
                                                                    <a href="simple_product.html">
                                                                        <div class="product-thumb-hover">
                                                                            <img width="300" height="300" src="/Public/Bootstrap/images/1903/22-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="/Public/Bootstrap/images/1903/22-300x300.jpg 300w, /Public/Bootstrap/images/1903/22-150x150.jpg 150w, /Public/Bootstrap/images/1903/22-180x180.jpg 180w, /Public/Bootstrap/images/1903/22.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <!-- add to cart, wishlist, compare -->
                                                                    <div class="item-bottom clearfix">
                                                                        <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                        <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                            <div class="yith-wcwl-add-button show" style="display:block">
                                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                                <img src="/Public/Bootstrap/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">
                                                                            0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4><a href="simple_product.html" title="Philips HR2195">Philips HR2195</a></h4>

                                                                    <!-- price -->
                                                                    <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">$</span>200.00
																				</span>
																			</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item ">
                                                        <div class="item-wrap">
                                                            <div class="item-detail">
                                                                <div class="item-img products-thumb">
                                                                    <a href="simple_product.html">
                                                                        <div class="product-thumb-hover">
                                                                            <img width="300" height="300" src="/Public/Bootstrap/images/1903/14-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="/Public/Bootstrap/images/1903/14-300x300.jpg 300w, /Public/Bootstrap/images/1903/14-150x150.jpg 150w, /Public/Bootstrap/images/1903/14-180x180.jpg 180w, /Public/Bootstrap/images/1903/14.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <!-- add to cart, wishlist, compare -->
                                                                    <div class="item-bottom clearfix">
                                                                        <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                        <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                            <div class="yith-wcwl-add-button show" style="display:block">
                                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                                <img src="/Public/Bootstrap/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">
                                                                            0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4><a href="simple_product.html" title="sony xperia s">sony xperia s</a></h4>

                                                                    <!-- price -->
                                                                    <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">$</span>300.00
																				</span>
																			</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item ">
                                                        <div class="item-wrap">
                                                            <div class="item-detail">
                                                                <div class="item-img products-thumb">
                                                                    <a href="simple_product.html">
                                                                        <div class="product-thumb-hover">
                                                                            <img width="300" height="300" src="/Public/Bootstrap/images/1903/58-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="/Public/Bootstrap/images/1903/58-300x300.jpg 300w, /Public/Bootstrap/images/1903/58-150x150.jpg 150w, /Public/Bootstrap/images/1903/58-180x180.jpg 180w, /Public/Bootstrap/images/1903/58.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                        </div>
                                                                    </a>

                                                                    <!-- add to cart, wishlist, compare -->
                                                                    <div class="item-bottom clearfix">
                                                                        <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                        <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                            <div class="yith-wcwl-add-button show" style="display:block">
                                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                                <img src="/Public/Bootstrap/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                                <span class="feedback">Product added!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                                <span class="feedback">The product is already in the wishlist!</span>
                                                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                            </div>

                                                                            <div style="clear:both"></div>
                                                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                                    </div>
                                                                </div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">
                                                                            0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4><a href="simple_product.html" title="nikon d7000">nikon d7000</a></h4>

                                                                    <!-- price -->
                                                                    <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">$</span>300.00
																				</span>
																			</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-2 widget-last widget sw_related_upsell_widget-3 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
                                    <div class="widget-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--login-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-centre" id="myModalLabel">登陆</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="upload_login">
                    <div class="input-group">
                        <span class="input-group-addon" id="phone">手机号</span>
                        <input type="text" name="phone" class="form-control" placeholder="手机号" aria-describedby="phone">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" id="password">密　码</span>
                        <input type="text" name="password" class="form-control" placeholder="密码" aria-describedby="password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" onclick="upload_login()" class="btn btn-primary">登陆</button>
            </div>
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
    $(function(){
        $("#button").click(function () {
//                                                                        alert($("#size").serialize().split("&").length);
            $.ajax({
                'url':'/Cart/add_cart',
                'type':'post',
                'data':$("#size").serialize(),
                success:function (i) {
                    if(i=='1'){
                        layer.msg('加入购物车中');
//                        alert('加入购物车中');
                    }
                }
            });
        });
    });

    function number(obj) {
        $(function () {
            if($(obj).text()=='-'){
                $(".number_count").val(parseInt($(".number_count").val())-parseInt(1));
            }else {
                $(".number_count").val(parseInt($(".number_count").val())+parseInt(1));
            }
            if(parseInt($(".number_count").val())<parseInt(1)){
                $(".number_count").val(parseInt(1));
            }else if(parseInt($(".number_count").val())>parseInt(99)){
                $(".number_count").val(parseInt(99));
            }
        });

    }

    function login(obj) {
        $(function () {
            var url='/Login/getLogin';
            $.ajax({
                'url':url,
                'type':'get',
                'dataType':'json',
                'success':function (res) {
                   if(res=='error'){
                       layer.msg('您尚未登陆，请登录');
                       $(obj).attr('data-target','#login');
                   }else{
                       $(obj).attr('data-target',"#purchase");
                   }
                }
            });
        });
    }

    //ajax登陆
    function upload_login() {
        $(function () {
            var url='/Login/login.html';
            var data=$("#upload_login").serialize();
            $.ajax({
                'url':url,
                'type':'post',
                'data':data,
                'dataType':'json',
                'success':function (res) {
                    if(res=='error'){
                        layer.msg('密码错误');
                    }else{
                        $("#login").remove();
                        $("#add_cart").removeAttr('data-target','');
                        $("#add_cart").attr('data-target',"#purchase");
                    }

                }
            })
        });
    }
</script>
</body>
</html>