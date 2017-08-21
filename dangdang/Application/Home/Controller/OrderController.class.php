<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/27
 * Time: 21:23
 */

namespace Home\Controller;


class OrderController extends VerifyController{
    /**
     * 结算页面显示
     */
    public function index(){
        //从购物车过来
        $id=$_POST['cart_id'];
        //获取购物车内数据
        if(is_array($id) && !empty($id)) {
            $arr = $this->cart_content($id);
            if($arr!='error'){
                $this->assign('arr',$arr);
            }else{
                $this->error('您没有要购买的商品');
            }
        }else{
            $this->error('您没有要购买的商品');
        }

        //获取收货地址
        $site=new SiteController();
        $site=$site->show_site(I('session.user_id'));
        $this->assign('site',$site);
        $this->display();
    }

    /**
     * 结算中心
     */
    public function close_an_account(){
        $state=true;
        //购物车id
        $cart_id=I('post.cart_id');
        //总价格
        $total_price=I('post.total_price');
        $user_id=I('session.user_id');
        //支付方式
        $pay=I('post.pay');
        //收货地址id
        $site_id=I('post.site_id');
        $field="C.count,A.sales_price,A.id";
        $arr=$this->cart_content($cart_id,$field);
        $find_total_price='';
        foreach($arr as $key=>$value){
            $find_total_price+=$value['count']*$value['sales_price'];
        }
        //对比两个价格是否一致
        $find_total_price=sprintf('%.2f',$find_total_price);
        if($find_total_price==$total_price){
            $order=M('Order');
            $data=array(
                'order_number'=>md5(uniqid(md5($user_id.rand(0,10000).microtime(true)),true)),
                'user_id'=>$user_id,
                'total_price'=>$find_total_price,
                'site_id'=>$site_id,
                'time'=>time(),
                'state'=>'0',
            );
            $field='order_number,user_id,total_price,site_id,time,state';
            //插入订单表
            if($order->field($field)->data($data)->add()){
                $order_id="SELECT LAST_INSERT_ID()";
                $m=M();
                $res=$m->query($order_id);
                $order_id=$res[0]['last_insert_id()'];
                foreach($arr as $key=>$value){
                    $data=array('order_id'=>$order_id,'goods_id'=>$value['id']);
                    $order_info=M("OrderInfo");
                    $field='order_id,goods_id';
                    //插入订单详情表
                    if($order_info->field($field)->data($data)->add()){

                    }else{
                        $state=false;
                    }
                }
            }else{
                $state=false;
            }
        }else{
            $state=false;
        }
        if($state){
            echo "ok";
        }else{
          echo 'no';
        }

    }

    /**
     * 获取购物车数据
     * @param $cart_id 购物车id
     * @param string $field 选填要查询的字段
     * @return array|string 返回array成功返回string失败
     */
    public function cart_content($cart_id,$field=''){
        $goods=M();
        $arr=array();
        if(is_array($cart_id) && !empty($cart_id)){
            foreach($cart_id as $key=>$value){
                if(empty($field)){
                    $field="A.id,A.goods_name,A.market_price,A.sales_price,A.classify,A.stock,A.state,B.id as bid,B.pid,B.images,B.time,B.first,C.id as cid,C.user_id,C.goods_id,C.count,C.state as c_state,C.color,C.size";
                }else{
                    $field=$field;
                }
                $where="B.pid=A.id AND B.first=1 AND A.state=1 AND A.id=C.goods_id AND C.count>0 AND C.state=1 AND C.id=".$value;
                $sql="SELECT ".$field." FROM shop_goods as A,shop_goods_images as B,shop_cart as C WHERE ".$where;
                if($res=$goods->query($sql)){
                    if($res[0]['time']){
                        $res[0]['time']=date("Y-m-d",$res[0]['time']);
                    }
                    $arr=array_merge($arr,$res);
                }else{
                    $arr='error';
                }
            }
        }else{
            $arr='error';
        }
        return $arr;
    }

}