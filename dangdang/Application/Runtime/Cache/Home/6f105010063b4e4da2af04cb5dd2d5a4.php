<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
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
<body class="page woocommerce-cart woocommerce-page ">
<div class="body-wrapper theme-clearfix">
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

    <div class="container">
        <div class="row">
            <div id="contents" role="main" class="main-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">
                            <div class="woocommerce">
                                <form action="/Order/index.html" method="post" id="form">
                                    <table class="shop_table shop_table_responsive cart text-muted" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th class="product-remove">编辑</th>
                                            <th class="product-thumbnail">商品</th>
                                            <th class="product-name">名称</th>
                                            <th class="product-name">颜色</th>
                                            <th class="product-name">尺码</th>
                                            <th class="product-price">单价</th>
                                            <th class="product-quantity">数量</th>
                                            <th class="product-subtotal" >小计</th>
                                        </tr>
                                        </thead>
                                        <!--购物车商品信息-->
                                        <tbody id="cart_content text-center">
                                       <?php if(is_array($arr)): foreach($arr as $key=>$value): ?><!--<input type="hidden" name="cart_id[]" value="<?php echo ($value["cid"]); ?>"/>-->
                                           <tr class='cart_item' id="goods-<?php echo ($value["cid"]); ?>">
                                               <td class='product-remove'>
                                                   <input type="checkbox" id="check-<?php echo ($value["cid"]); ?>" value="<?php echo ($value["cid"]); ?>" onchange="check(this,'<?php echo ($value["sales_price"]); ?>','<?php echo ($value["count"]); ?>','<?php echo ($value["cid"]); ?>')" name="cart_id[]" class="check"/>
                                                   <!--<a href="JavaScript:del('<?php echo ($value["id"]); ?>','<?php echo ($value["color"]); ?>','<?php echo ($value["size"]); ?>')" class='remove' title='Remove this item'><i class='fa fa-times' aria-hidden='true'></i></a>-->
                                               </td>
                                               <td class='product-thumbnail'><a href="/Index/item/id/<?php echo ($value["id"]); ?>.html">
                                               <img width='180' height='180' src='/Public/Uploads/<?php echo ($value["time"]); ?>/<?php echo ($value["images"]); ?>' class='attachment-shop_thumbnail size-shop_thumbnail wp-post-image' alt="<?php echo ($value["goods_name"]); ?>">
                                           </a>
                                               </td>
                                               <td class='product-name' data-title='Product'>
                                               <a href="/Index/item/id/<?php echo ($value["id"]); ?>.html"><?php echo ($value["goods_name"]); ?></a>
                                               </td>
                                               <td class='product-price' data-title='Price'>
                                                   <span class='woocommerce-Price-amount amount'><?php echo ($value["color"]); ?></span>
                                               </td>
                                               <td class='product-price' data-title='Price'>
                                                   <span class='woocommerce-Price-amount amount'><?php echo ($value["size"]); ?></span>
                                               </td>
                                               <td class='product-price' data-title='Price'>
                                                   <span class='woocommerce-Price-amount amount'>
                                                       <span class='woocommerce-Price-currencySymbol'>￥</span><?php echo ($value["sales_price"]); ?></span>
                                               </td>
                                               <td class='product-quantity' data-title='Quantity'>
                                                   <button type='button' onclick="num(this,'<?php echo ($value["id"]); ?>','<?php echo ($value["color"]); ?>','<?php echo ($value["size"]); ?>','<?php echo ($value["sales_price"]); ?>','<?php echo ($value["cid"]); ?>')" class='btn btn-default pull-left onclick'>-</button>
                                                   <div class='quantity pull-left'>
                                                       <input type='number' oninput="num(this,'<?php echo ($value["id"]); ?>','<?php echo ($value["color"]); ?>','<?php echo ($value["size"]); ?>','<?php echo ($value["sales_price"]); ?>','<?php echo ($value["cid"]); ?>')" id="num-<?php echo ($value["id"]); ?>-<?php echo ($value["color"]); ?>-<?php echo ($value["size"]); ?>" step='1' min='0' max='' name='' value='<?php echo ($value["count"]); ?>' title='数量' class='input-text qty text purchase_quantity' size='4' pattern='[0-9]*' inputmode='numeric'>
                                                   </div>
                                                   <button type='button' class='btn btn-default pull-left onclick' onclick="num(this,'<?php echo ($value["id"]); ?>','<?php echo ($value["color"]); ?>','<?php echo ($value["size"]); ?>','<?php echo ($value["sales_price"]); ?>','<?php echo ($value["cid"]); ?>')">+</button>
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
                                           <td><input type="checkbox" value="1" name="checkAll" id="checkAll" onclick="check_All(this)"><label for="checkAll">全选</label></td>
                                           <td>
                                               <a href="JavaScript:del()" title='删除商品'><span>删除</span></a>
                                           </td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td>
                                               <span>合计：</span><span class="text-danger">￥</span><span id="subtotal" class="text-danger">
                                               0.00
                                                           <!--<?php $price='';foreach($arr as $key=>$val){$price+=$val['sales_price']*$val['count'];}echo sprintf('%.2f',$price); ?>-->
                                                       </span>
                                           </td>
                                           <td>已选商品 <span style="color:red;" id="check-count">0</span> 件</td>
                                           <td><button id="button" type="button" onclick="submit_form()" class="btn ">前往结算</button></td>
                                       </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <script type="text/javascript" language="JavaScript">
                                    function submit_form() {
                                       $(function () {
                                           if($("input[class='check']:checked").length<1){
                                               layer.msg('您还没有选择要结算的商品');
                                           }else{
                                               $("#form").submit();
                                           }
                                       });
                                    }
                                    //复选框
                                    function check(obj,price,count,id){
                                        $(function () {
                                            $("#check-count").html($("input[class='check']:checked").length);
                                        })
                                        var total_price=$("#subtotal").html();
                                        var url='/Cart/total_price';
                                        var data={'id':id,'price':price};
                                        //判断是否全部复选框已被选中，如果全被选中则给全选框添加checked属性
                                        if($("input[class='check']:checked").length==$("input[class='check']").length){
                                            $("#checkAll").prop('checked',true);
                                            $("#subtotal").html("<?php $price='';foreach($arr as $key=>$val){$price+=$val['sales_price']*$val['count'];}echo sprintf('%.2f',$price); ?>");
                                        }else{
                                            //否则取消全选框checked属性
                                            $("#checkAll").prop('checked',false);
                                        }
                                       if(obj.checked==true){
                                           $.ajax({
                                               'url':url,
                                               'type':'get',
                                               'data':data,
                                               'dataType':'json',
                                               'success':function (res) {
                                                   //判断是否复选框已被选中，如果被选中则添加checked属性
                                                   var price=parseFloat(eval("("+res+")"))*parseFloat(data.price);
                                                   //并且改变总金额
                                                   $("#subtotal").html((parseFloat(total_price)+parseFloat(price)).toFixed(2));
                                               }
                                           });

                                       }else{
                                           $.ajax({
                                               'url':url,
                                               'type':'get',
                                               'data':data,
                                               'dataType':'json',
                                               'success':function (res) {
                                                   //复选框取消选中状态，减去金额
                                                   var price=parseFloat(eval("("+res+")"))*parseFloat(data.price);
                                                   $("#subtotal").html((parseFloat(total_price)-parseFloat(price)).toFixed(2));
                                               }
                                           });
                                       }
                                    }
                                    //全选
                                    function check_All(obj) {

                                        $(function () {
                                       if(obj.checked==true ){
                                           //全选框被点击触发选中状态，给所有复选框添加checked属性
                                           $(".check").prop('checked',true);
                                           //改变已选中商品数量，要放在checked状态已改变后，js是顺序执行的
                                           $("#check-count").html($("input[class='check']:checked").length);
                                           //并且改变总金额
                                           $("#subtotal").html("<?php $price='';foreach($arr as $key=>$val){$price+=$val['sales_price']*$val['count'];}echo sprintf('%.2f',$price); ?>");
                                       }else{
                                           //全选框被点击触发取消选中状态，给所有复选框清除checked属性
                                           $(".check").prop("checked",false);
                                           //改变已选中商品数量，要放在checked状态已改变后，js是顺序执行的
                                           $("#check-count").html($("input[class='check']:checked").length);
                                           //并且改变总金额
                                           $("#subtotal").html('0.00');
                                       }
                                        });
                                    }
                                    //修改商品数量
                                    function num(obj,id,color,size,price,cid) {
                                        var url='/Cart/count';
                                        if($(obj).val()){
                                            var symbol=$(obj).val();
                                        }else{
                                            var symbol=$(obj).text();
                                        }
                                        var data={'symbol':symbol,'id':id,'color':color,'size':size,'cid':cid};
                                        if( $("#num-"+id+"-"+color+"-"+size).val()>1 || symbol=="+" || (!isNaN(symbol) && symbol>0)){
                                            $.ajax({
                                                url:url,
                                                type:'get',
                                                data:data,
                                                dataType:'json',
                                                success:function (str) {
                                                    var obj=$("#check-"+data.cid);
                                                    var obj=obj[0];
                                                    if(str){
                                                        if(symbol=="-"){
                                                            //改变商品数量
                                                            $("#num-"+id+"-"+color+"-"+size).val(parseInt($("#num-"+id+"-"+color+"-"+size).val())-parseInt(1))
                                                            if(obj.checked==true){
                                                                //改变商品总金额
                                                                $("#subtotal").text((parseFloat($("#subtotal").text())-parseFloat(price)).toFixed(2));
                                                            }
                                                        }else if(symbol=="+"){
                                                            //改变商品数量
                                                            $("#num-"+id+"-"+color+"-"+size).val(parseInt($("#num-"+id+"-"+color+"-"+size).val())+parseInt(1));
                                                            if(obj.checked==true){
                                                                //改变商品总金额
                                                                $("#subtotal").text((parseFloat($("#subtotal").text()) + parseFloat(price)).toFixed(2));
                                                            }
                                                        }else{
                                                            if(obj.checked==true){
                                                                //改变商品总金额,待解决
//                                                                $("#subtotal").text((parseFloat($("#subtotal").text()) + parseFloat(price)).toFixed(2));
                                                            }
                                                        }
                                                        //改变小计价格
                                                        $("#price-"+id+"-"+color+"-"+size).text((parseFloat($("#num-"+id+"-"+color+"-"+size).val())*parseFloat(price)).toFixed(2));
                                                    }else{
                                                        layer.msg("修改失败");
                                                    }
                                                }
                                            });
                                        }
                                        if($("#num-"+id+"-"+color+"-"+size).val()<1){
                                            $("#num-"+id+"-"+color+"-"+size).val(1);
                                        }
                                    }
//                                    删除商品
                                    function del(){
                                        $(function () {
                                            var url='/Cart/del';
                                            var data=$("#form").serialize();
                                            $.ajax({
                                                url:url,
                                                type:'get',
                                                data:data,
                                                dataType:'json',
                                                success:function (str) {
                                                    if(str=='404'){
                                                        layer.msg("删除失败");
                                                    }else{
                                                        var id=eval("("+str+")");
                                                        $.each(id,function (i,n) {
                                                            $("#goods-"+n).remove();
                                                        });
                                                        layer.msg("删除成功");
                                                    }
                                                }
                                            });
                                        });

                                    }
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
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
</div>

<!-- DIALOGS -->
<div class="modal fade" id="search_form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-search-form">
        <form role="search" method="get" class="form-search searchform" action="">
            <input type="text" value="" name="s" class="search-query" placeholder="Enter your keyword..." />

            <button type="submit" class="fa fa-search button-search-pro form-button"></button>

            <a href="javascript:void(0)" title="Close" class="close close-search" data-dismiss="modal">X</a>
        </form>
    </div>
</div>

<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-login">
        <a href="javascript:void(0)" title="Close" class="close close-login" data-dismiss="modal">Close</a>

        <div class="tt_popup_login">
            <strong>Sign in Or Register</strong>
        </div>

        <form action="" method="post" class="login">
            <div class="block-content">
                <div class="col-reg registered-account">
                    <div class="email-input">
                        <input type="text" class="form-control input-text username" name="username" id="username" placeholder="Username" />
                    </div>

                    <div class="pass-input">
                        <input class="form-control input-text password" type="password" placeholder="Password" name="password" id="password" />
                    </div>

                    <div class="ft-link-p">
                        <a href="#" title="Forgot your password">Forgot your password?</a>
                    </div>

                    <div class="actions">
                        <div class="submit-login">
                            <input type="submit" class="button btn-submit-login" name="login" value="Login" />
                        </div>
                    </div>
                </div>

                <div class="col-reg login-customer">
                    <h2>NEW HERE?</h2>

                    <p class="note-reg">Registration is free and easy!</p>

                    <ul class="list-log">
                        <li>Faster checkout</li>

                        <li>Save multiple shipping addresses</li>

                        <li>View and track orders and more</li>
                    </ul>

                    <a href="create_account.html" title="Register" class="btn-reg-popup">Create an account</a>
                </div>
            </div>
        </form>
        <div class="clear"></div>
    </div>
</div>

<a id="etrostore-totop" href="#"></a>
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

</body>
</html>