<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/25
 * Time: 20:23
 */

namespace Admin\Controller;


class GoodsController extends VerifyController{

    /**
     * 添加商品
     */
    public function add_goods(){
        /*
         * 文件上传
         */
           $config=array(
               'exts'=>array('jpg','gif','png','jpeg'),
               'rootPath'=>'Public',
               'savePath'=>'/Uploads/',
           );
           $upload=new \Think\Upload($config);
           $info=$upload->upload();
           if(!$info){
               $this->error($upload->getError());
           }

           $d=M('Goods');
           if($d->field('goods_name,stock,market_price,sales_price,classify')->create($_POST,true)){
               $field='goods_name,stock,market_price,sales_price,classify';
               $getGoods=$d->field($field)->add();
               $m=M();
               $sql="SELECT LAST_INSERT_ID()";
               $res=$m->query($sql);
               $id=$res[0]['last_insert_id()'];
               $color=str_replace('，',',',I('post.color'));
               $size=str_replace('，',',',I('post.size'));
               $description=I('post.description');
               $image=array();
               $init=array();
               foreach($info as $key=>$value){
                   $image[$key]=$value['savename'];
                   $init[]=$key;
               }
               //获取最大下标，最大下标是商品详情
               $max=max($init);
               $time=time();
               for($i=0;$i<count($image)-1;$i++){
                   $goods_images=M('GoodsImages');
                   $data=array(
                       'pid'=>$id,
                       'images'=>$image[$i],
                       'time'=>$time,
                   );
                   if($i<1){
                       $data['first']=1;
                   }
                   $field='pid,images,time,first';
                   $getImage=$goods_images->field($field)->data($data)->add();
               }

               //商品详情图片名称
               $image=$info[$max]['savename'];
               $goods_size=M('GoodsSize');
               $data=array(
                   'pid'=>$id,
                   'color'=>$color,
                   'size'=>$size,
               );
               $field='pid,color,size';
               $getAttribute=$goods_size->field($field)->data($data)->add();
               $goods_details=M('GoodsDetails');
               $data=array(
                   'pid'=>$id,
                   'image'=>$image,
                   'time'=>$time,
               );
               $field='pid,image,time';
               $getDetails=$goods_details->field($field)->data($data)->add();
               $field='pid,description';
               $data=array(
                   'pid'=>$id,
                   'description'=>$description,
               );
               $goods_description=M('GoodsDescription');
               $getDescription=$goods_description->field($field)->data($data)->add();
//            $getDescription=$query->index('add_data',$goods_description,$field,$data);
               if($getImage && $getAttribute && $getDetails && $getGoods && $res && $getDescription){
                   echo 'ok';
//                       $this->success('添加商品成功');
               }else{
                   $this->ajaxReturn(0);
               }
           }else{
               $this->error($d->getError());
           }

    }

    /**
     * 修改商品
     */
    public function edit_goods(){
        $goods=M('Goods');
        $id['id']=I('post.id');
        $field='goods_name,stock,market_price,sales_price';
        if($goods->field($field)->create($_POST,true)){
            if($goods->where($id)->save()!==false){
               $this->success('修改成功');
            }else{
                $this->success('修改失败');
            }
        }
    }

    /**
     * 商品推荐
     */
    public function recommend(){

    }
    /**
     * ajax返回子分类
     */
    public function classify(){
        $id=I('get.id');
        $d=M('GoodsClassify');
        if(!empty($id)){
            $field='id,pid,name';
            $where=array(
                'pid'=>$id
            );
            if($set=$d->field($field)->where($where)->select()){
                $this->ajaxReturn($set);
            }else{
                $this->ajaxReturn(0);
            }
        }else{
            if($set=$d->select()){
                return $set;
            }else{
                return false;
            }
        }

    }

    /**
     * 显示添加商品分类
     */
    public function show_add_classify(){
       $classify=$this->classify();
        $tree=new \Commonality\Controller\ArrayController();
        $classify=$tree->tree($classify,0,0,'&nbsp;&nbsp;&nbsp;&nbsp;');
        $this->assign('classify',$classify);
//       var_dump($classify);
        $this->display();
    }
    /**
     * 删除商品分类
     */
    public function del_classify(){
        $id=(int)$_GET['id'];
        $classify=M('GoodsClassify');
        $where=array('id'=>$id);
        if($classify->where($where)->delete()){
            $return_code='success';
        }else{
            $return_code='error';
        }
        $this->ajaxReturn($return_code);
    }
    /**
     * 添加商品分类功能
     */
    public function add_classify(){
        $classify=M('GoodsClassify');
        if($classify->create()){
           if($classify->add()){
              $return_code='success';
           }else{
               $return_code='error';
           }
        }
        $this->ajaxReturn($return_code);
    }

    /**
     * 显示编辑商品
     */
    public function show_edit_classify(){
        $classify=$this->classify();
        $this->assign('classify',$classify);
        $this->display();
    }
}