<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 21:12
 */

namespace Admin\Controller;


use Think\Controller;

class DataController extends Controller {
    /*
    * data
    * 用于包含文件传送数据,必须调用该方法
    */
    public function limit($id=''){
        $d=M('Limit');
        $field='id,pid,name,controller,way,judge,module';
        if(isset($id) && !empty($id)){
            $arr=$d->field($field)->where('id='.$id)->order('id asc')->select();
        }else{
            $arr=$d->field($field)->order('id asc')->select();
        }
        return $arr;
    }
    //管理员权限
    public function admin_limit(){
        $admin_id=I('session.Admin_id');
        $shop_limit=M();
        //传入管理员id内连接查询出该管理员的职位,通过职位id左连接获取权限id，通过权限id左连接获取权限
        $sql="SELECT A.* FROM `shop_limit` AS A 
              LEFT JOIN `shop_role_limit` AS B ON A.id=B.limit_id 
              LEFT JOIN shop_role C ON B.role_id=C.id 
              INNER JOIN shop_admin_role AS D ON C.id=D.role_id AND D.admin_id=".$admin_id;
       if($shop_limit=$shop_limit->query($sql)){
           return $shop_limit;
       }else{
           return false;
       }

    }

    //获取职位信息
    public function role(){
        $role=M('Role');
        if($role=$role->field('id,role_name')->select()){
            return $role;
        }else{
            return 'error';
        }
    }

    /**
     * 查询已有职位和权限表的集合
     * @return mixed|string  返回array集合
     */
    public function getRoleLimit($role_id=1){
        $role_id=(int)$role_id;
        $getRoleLimit=M();
        if(!empty($role_id)){
            $sql="SELECT id,limit_id FROM shop_role_limit WHERE role_id='".$role_id."'";
            if($arr=$getRoleLimit->query($sql)){
                return $arr;
            }else{
                return 'error';
            }
        }else{
            return 'error';
        }

    }
}