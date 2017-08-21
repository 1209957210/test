<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/24
 * Time: 7:26
 */

namespace Admin\Controller;


use Think\Controller;
class LoginController extends Controller{
    /*
     * 登陆页面
     */
    public function index(){
        if(isset($_SESSION['Admin_id']) && session('Admin_id')){
            $this->redirect('Index/index');
        }else{
            $this->display();
        }
    }
    /*
     * 管理员登陆
     */
    public function login(){
        $d=M('Admin');
        $d->field('phone,password')->create();
        $where['phone']=$d->phone;
        $password=md5($d->password);
        $field='id,name,phone,password,sex';
        $sql=new \Commonality\Controller\SqlController();
        $res=$sql->index('find',$d,$field,$where);
        if($res['password']==$password){
            session('Admin_id',$res['id']);
            session('admin_name',$res['name']);
            $this->redirect('Index/index');
        }else{
            $this->error('密码错误');
        }
    }

    /*
     * 退出登陆
     */
    public function log_out(){
        session(null);
        cookie(null);
        $this->redirect('index');
    }

    /*
     * 添加管理员
     */
    public function add(){
        $d=D("Admin");
        if($d->create($_POST,true)){
            $set=$d->add();
            if($set){
            $id=$d->query('SELECT LAST_INSERT_ID()');
            $admin_id=$id[0]['last_insert_id()'];
            $role_id=(int)$_POST['role_id'];
           $role=M('AdminRole');
           $data=array('admin_id'=>$admin_id,'role_id'=>$role_id);
          if($role->data($data)->add()){
              $this->success('添加用户成功');
          }else{
              $this->error('添加用户失败');
          }
            }else{
                $this->error('添加用户失败');
            }
        }else{
            exit($d->getError());
        }

    }
}