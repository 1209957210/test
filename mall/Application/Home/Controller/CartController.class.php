<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 19:29
 */

namespace Home\Controller;


class CartController extends VerifyController {
    /**
     * 显示购物车
     */
    public function index(){
//        var_dump($_SERVER);
        $cart=$this->cart();
        $this->assign('arr',$cart);
        $this->display();
    }

    /**
     * 遍历购物车表中数据
     */
    public function cart($state='1'){
        $state=(int)$state;
        $user_id=(int)I('session.user_id');
        $goods=M();
        $field="A.id,A.goods_name,A.market_price,A.sales_price,A.classify,A.stock,A.state,B.id as bid,B.pid,B.images,B.time,B.first,C.id as cid,C.user_id,C.goods_id,C.count,C.state as c_state,C.color,C.size";
        $where="B.pid=A.id AND B.first=1 AND A.state=1 AND A.id=C.goods_id AND C.count>0 AND C.state=".$state." AND C.user_id=".$user_id;
        $sql="SELECT ".$field." FROM shop_goods as A,shop_goods_images as B,shop_cart as C WHERE ".$where;
        $arr=$goods->query($sql);
        foreach($arr as $key=>$value){
            $arr[$key]['time']=date('Y-m-d',$value['time']);
        }
        return $arr;
    }

    /**
     * 通过ajax修改单件商品购买数量
     */
    public function count(){
        $goods_id=(int)I('get.id');
        $user_id=(int)I('session.user_id');
        $color=addslashes(I('get.color'));
        $size=addslashes(I('get.size'));
        $symbol=(int)I('get.symbol');
        if(is_int($symbol) && $symbol<1){
            $symbol=1;
        }
        $cart=M('Cart');
        $where=array(
            'goods_id'=>$goods_id,
            'user_id'=>$user_id,
            'color'=>$color,
            'size'=>$size,
        );
        if($symbol=='-'){
            $cart->where($where)->setDec('count',1)?$return_code=200:$return_code=404;
        }else if($symbol=='+'){
            $cart->where($where)->setInc('count',1)?$return_code=200:$return_code=404;
        }else{
            $cart->where($where)->data('count='.$symbol)->save()?$return_code=200:$return_code=404;
        }
        $this->ajaxReturn($return_code);
    }

    /**
     * 添加商品到购物车
     */
    public function add_cart(){
        $color=addslashes(I('post.color'));
        $size=addslashes(I('post.size'));
        $count=(int)I('post.count');
        $id=(int)I('post.id');
        $cart=M('Cart');
        $user_id=I('session.user_id');
        $field='id,user_id,goods_id,count,state,color,size';
        $where=array(
            'user_id'=>$user_id,
            'goods_id'=>$id,
            'size'=>$size,
            'color'=>$color,
            'state'=>1,
        );
        //判断该商品是否存在购物车中，存在则更新购物车，否则新增
        if($arr=$cart->field($field)->where($where)->find()){
            $where=array(
                'user_id'=>$user_id,
                'goods_id'=>$id,
                'size'=>$size,
                'color'=>$color,
            );
            $data=array(
                'count'=>$count+$arr['count'],
            );
            if($cart->where($where)->data($data)->save()){
                $return_code=1;
            }else{
                $return_code=0;
            }
        }else{
            $data=array(
                'user_id'=>$user_id,
                'goods_id'=>$id,
                'size'=>$size,
                'count'=>$count,
                'color'=>$color,
            );
            if($cart->data($data)->add()){
                $return_code=1;
            }else{
                $return_code=0;
            }
        }
        $this->ajaxReturn($return_code);

    }

    /**
     * 通过ajax删除购物车内商品
     */
    public function del(){
        $id=$_GET['cart_id'];
        $return_code=array();
       foreach($id as $key=>$value){
           $cart=M("Cart");
           $where=array(
              'id'=>$value,
           );
           if($cart->where($where)->delete()){
               $return_code[]=$value;
           }else{
               $return_code=404;
           }
       }
       $return_code=json_encode($return_code);
        $this->ajaxReturn($return_code);
    }

    /**
     * 返回该用户有多少件商品
     */
    public function number_count(){
        $user_id=(int)I('session.user_id');
        $cart=M('Cart');
        if($count=$cart->where('user_id='.$user_id.' AND state=1')->count('id')){
            $this->ajaxReturn($count);
        }else{
            $this->ajaxReturn('error');
        }
    }

    /**
     * 获取商品价格
     */
    public function total_price(){
        $id=(int)I('get.id');
        $cart=M('Cart');
       if( $cart=$cart->where('id='.$id)->find()){
           $cart=$cart['count'];
       }else{
           $cart='error';
       }
       $cart=json_encode($cart);
       $this->ajaxReturn($cart);
    }
    /**
     * 将购物车表中的状态更新为 待付款状态
     * 用于在结算中心显示
     * 并且跳转到结算中心
     */
    public function save_cart_state(){
        $id=(int)$_POST['cart_id'];
        $goods=M();
        $arr=array();
        foreach($id as $key=>$value){
            $field="A.id,A.goods_name,A.market_price,A.sales_price,A.classify,A.stock,A.state,B.id as bid,B.pid,B.images,B.time,B.first,C.id as cid,C.user_id,C.goods_id,C.count,C.state as c_state,C.color,C.size";
            $where="B.pid=A.id AND B.first=1 AND A.state=1 AND A.id=C.goods_id AND C.count>0 AND C.state=1 AND C.id=".$value;
            $sql="SELECT ".$field." FROM shop_goods as A,shop_goods_images as B,shop_cart as C WHERE ".$where;
            $res=$goods->query($sql);
            $arr=array_merge($arr,$res);
        }
    }

    /**
     * 返回待付款商品数量
     */
    public function cart_count(){
        $user_id=(int)I('session.user_id');
        if(!empty($user_id)){
            $cart=M('Cart');
            $where=array(
                'user_id'=>$user_id,
                'state'=>2,
            );
            if($count=$cart->where($where)->count('id')){
                $return_code=$count;
            }else{
                $return_code='error';

            }
        }else{
            $return_code='error';
        }
        $this->ajaxReturn($return_code);
    }
}