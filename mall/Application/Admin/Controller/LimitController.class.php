<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 20:43
 */

namespace Admin\Controller;


use Think\Controller;

class LimitController extends VerifyController {
    //显示添加权限页面
    public function limit(){
        $this->display();
    }
    //添加权限
    public function add_limit(){
        $limit=M('Limit');
        $module=(int)$_POST['module'];
       if($limit->create($_POST)){
           //判断是否传有module，有就忽略，没有就添加
           if(empty($module)){
               $limit->module=2;
           }
           if($limit->add()){
               $return_code='success';
           }else{
               $return_code='error';
           }
       }else{
           $return_code='error';
       }
       $this->ajaxReturn($return_code);
    }

    //显示编辑权限
    public function edit_limit(){
        $limit=new DataController();
        $limit=$limit->limit();
        $this->assign('limit',$limit);
        $this->display();
    }

    //根据id显示修改页面
    public function chmod(){
        $id=(int)$_GET['id'];
        if(isset($id) && !empty($id)){
            $limit=new DataController();
            $limit=$limit->limit($id);
            $this->assign('limit',$limit);
        }
        $this->display();

    }
    //修改权限
    public function save_limit(){
        $limit=M('Limit');
        $data=array(
            'name'=>$_POST['name'],
            'controller'=>$_POST['controller'],
            'way'=>$_POST['way'],
            'judge'=>$_POST['judge'],
            'pid'=>$_POST['pid'],
        );

        $id=(int)$_POST['id'];

           if(isset($id) && !empty($id)){
               if($limit->where('id='.$id)->data($data)->save()!==false){
                   $return_code='success';
               }else{
                   $return_code='error';
               }
           }else{
               $return_code='error';
           }
        $this->ajaxReturn($return_code);
    }
    //删除权限
    public function del_limit(){
        $id=(int)$_GET['id'];
        if(isset($id) && !empty($id)){
            $limit=M('Limit');
           if( $limit->where('id='.$id)->delete()){
               $return_code='success';
           }else{
               $return_code='error';
           }
        }else{
            $return_code='error';
        }
        $this->ajaxReturn($return_code);
    }
}