<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/25
 * Time: 16:07
 */

namespace Admin\Controller;


class SqlController extends VerifyController{
    public function index(){}
    /*
     * 删除管理员
     */
    public function delete(){
        $id=I('get.id');
        $d=M('Admin');
        $where['id']=$id;
        $d->where($where)->delete()?$this->ajaxReturn(1):$this->ajaxReturn(0);
    }
    /*
     * 商品下架
     */
    public function update(){
        $where['id']=I('get.id');
        $goods=M('Goods');
        $field='state';
        $data['state']=0;
        $query=new \Commonality\Controller\SqlController();
        $query->index('update',$goods,$field,$where,$data)?$this->ajaxReturn(1):$this->ajaxReturn(0);
    }

}