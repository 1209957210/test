<?php
namespace Admin\Controller;
//use Think\Controller;
use Think\Model\RelationModel;

class IndexController extends VerifyController {
    /*
     * admin主页
     */
    public function index(){
        $this->display();
    }

    /*
     * 显示添加管理员
     */
    public function add_admin(){
        $role=M('Role');
        if($role=$role->select()){
            $this->assign('role',$role);
        }
        $this->display();
    }

    /*
     * 显示编辑管理员
     */
    public function edit_admin(){
        $admin_role=$this->admin_user();
        $this->assign('admin_role',$admin_role);
        $this->display();
    }
    /**
     *通过get id  显示被修改管理员
     */
    public function modified_admin(){
        if(IS_GET){
            $admin_id=$_GET['admin_role'];
            if($admin_role=$this->admin_user($admin_id)){
                $this->assign('admin_role',$admin_role);
               $this->assign('admin_id',$admin_id);
            }
            $role=new DataController();
            if($role=$role->role()){
                $this->assign('role',$role);
            }
        }
        $this->display();
    }
    /**
     * 修改管理员和管理员职位
     * save_admin
     */
    public function save_admin(){
        $admin=M('Admin');//管理员表
        $admin_role=M('AdminRole');//管理员和职位关联表
        $admin_id=(int)$_POST['id'];//管理员id
        $phone=(int)$_POST['phone'];//管理员手机号
        $role_id=(int)$_POST['role_id'];//职位id
        $name=$_POST['name'];//管理员姓名
        $sex=(int)$_POST['sex'];//管理员性别
        $data=array('phone'=>$phone,'name'=>$name,'sex'=>$sex);
        //更新管理员表和职位关联表
        //更新管理员表
       if( $admin->where("id='".$admin_id."'")->data($data)->save()!==false){
           $data=array('role_id'=>$role_id);
           $where['admin_id']=$admin_id;
           //更新职位关联表
           //判断该管理员是否存在职位存在则更新，否则新增
           if(!$admin_role->where($where)->find()){
               $data=array('admin_id'=>$admin_id,'role_id'=>$role_id);
               if($admin_role->data($data)->add()){
                   $this->success('修改成功');
               }else{
                   $this->success('修改失败');
               }
           }else{
               if($save_code=$admin_role->where($where)->data($data)->save()!==false){
                   $this->success('修改成功');
               }else{
                   $this->success('修改失败');
               }
           }
       }else{
           $this->success('修改失败');
       }


    }
    /*
     * 显示添加商品
     */
    public function add_goods(){
       $classify=$this->classify();
       $tree=new \Commonality\Controller\ArrayController();
       $classify=$tree->tree($classify,0,0,'&nbsp;&nbsp;&nbsp;&nbsp;');
       $this->assign('classify',$classify);
        $this->display();
    }

    /*
     * 显示编辑商品
     */
    public function edit_goods(){
        $d=M();
        $sql="SELECT A.id,A.goods_name,A.market_price,A.sales_price,A.stock,A.state,B.id AS bid,B.first,B.pid,B.images,B.time FROM shop_goods AS A,shop_goods_images AS B WHERE A.state=1 AND B.pid=A.id AND B.first=1 ORDER BY A.id ASC ";
        $arr=$d->query($sql);
        $this->assign('goods',$arr);
        $this->display();
    }

    /*
     *修改商品
     */
    public function edit_goods2(){
        $id=I('get.id');
        $goods=M();
        $sql="SELECT A.id,A.goods_name,A.market_price,A.sales_price,A.classify,A.stock,A.state,B.id AS images_id,B.pid,B.images,B.time,B.first FROM shop_goods AS A,shop_goods_images AS B 
WHERE A.id='".$id."' AND B.pid='".$id."'";
        $arr=$goods->query($sql);
        $this->assign('goods',$arr);
        $this->display();
    }

    /*
     * 商品详情
     */
    public function details(){
        $this->display();
    }

    /**
     * 商品推荐
     */
    public function recommend(){
        $goods=M();
        $user="shop_goods AS A,shop_goods_recommend AS B,shop_goods_images AS C";
        $A="A.id,A.goods_name,A.market_price,A.sales_price,A.classify,A.stock,A.state,";
        $B="B.id AS bid,B.goods_id,B.state,";
        $C="C.id AS cid,C.pid,C.images,C.time,C.first";
        $field=$A.$B.$C;
        $where="C.first=1 AND C.pid=A.id AND A.state=1 AND A.id=B.goods_id";
        $sql="SELECT ".$field." FROM ".$user." WHERE ".$where;
        $arr=$goods->query($sql);
        $this->assign('recommend',$arr);
        $this->display();
    }
    /**
     *
     * 管理员用户表
     */
    private function admin_user($id=''){
        $admin_role=M();
        $id=(int)$id;
        if(!empty($id)){
                $where="LEFT JOIN shop_admin_role AS B ON B.admin_id=A.id AND A.id=".$id."
             LEFT JOIN shop_role AS C ON B.role_id=C.id
            ";
//            $where="INNER JOIN shop_admin_role AS B ON A.id=B.admin_id AND B.id=".$id."
//                    LEFT JOIN shop_role AS C ON (B.role_id=C.id)";
        }else{
            $where="LEFT JOIN shop_admin_role AS B ON A.id=B.admin_id
                    LEFT JOIN shop_role AS C ON B.role_id=C.id ORDER BY A.id ASC";
        }
        $field='A.id,A.name,A.phone,A.sex,B.id AS admin_role_id,C.id AS role_id,C.role_name';
        $sql="SELECT ".$field." FROM shop_admin AS A ".$where;
        if($arr=$admin_role->query($sql)){
            return $arr;
        }else{
            return 'error';
        }

    }

    /*
     * 分类
     */
    private function classify(){
        $d=M('GoodsClassify');
        $field='id,pid,name';
       if($arr=$d->field($field)->select()){

       }else{
           $arr='error';
       }
        return $arr;
    }

}