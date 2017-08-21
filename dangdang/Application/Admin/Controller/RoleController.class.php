<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/3
 * Time: 20:13
 */

namespace Admin\Controller;


class RoleController extends VerifyController{
    //显示添加职位
    public function index(){
        $this->display();
    }
    //添加职位
    public function add_role(){
        $role=M('Role');
        if($role->create()){
            if($role->add()){
                $return_code='success';
            }else{
                $return_code='error';
            }
        }else{
            $return_code='error';
        }
        $this->ajaxReturn($return_code);
    }

    //显示分配权限页面
    public function show_grant(){
        $limit=new DataController();
        $role=$limit->role();
        $this->assign('role',$role);
        $limit=$limit->limit();
        $this->assign('limit',$limit);
        $this->display();
    }

    /**
     * 分配权限到职位
     */
    public function add_role_limit(){
        $role_limit=M('RoleLimit');
        $getRoleLimit=new DataController();
        if(IS_GET){
            //加载页面和改变职位时请求已分配的权限信息
            $getRoleLimit=$getRoleLimit->getRoleLimit($_GET['role_id']);
            if(empty($getRoleLimit) && $getRoleLimit=='error'){
                $getRoleLimit='error';
            }
            $this->ajaxReturn(json_encode($getRoleLimit));
        }
        if(IS_POST){
            $role_id=(int)$_POST['role_id'];//接受角色id int
            $limit_id=$_POST['limit_id'];//接受权限id array
            //查询已有的职位和权限表的集合
            $getRoleLimit=$getRoleLimit->getRoleLimit($_POST['role_id']);
            //从$getRoleLimit数组中取出一列数组
            $get_limit_id=array_column($getRoleLimit,'limit_id');
            $data=array();
            //比较两个数组的差值，返回要新增的差集
            $save_diff=array_diff($limit_id,$get_limit_id);
            //比较两个数组的差值，返回要删除的差集
            $del_diff=array_diff($get_limit_id,$limit_id);
            //比较两个数组的差值,判断已有的权限不处理，添加没有的权限
            if(!empty($save_diff)){
                foreach($save_diff as $key=>$value){
                    $value=(int)$value;
                    $data[]=array('role_id'=>$role_id,'limit_id'=>$value);
                }
                if($role_limit->addAll($data)){
                    $return_code='success';
                }else{
                    $return_code='error';
                }
                //比较两个数组的差值,判断如果没有要删除的权限，则全部添加
            }else if(empty($del_diff)){
                //添加所有上传权限
                if(is_array($limit_id) && isset($role_id) && !empty($role_id)){
                    foreach($limit_id as $key=>$value){
                        $value=(int)$value;
                        $data[]=array('role_id'=>$role_id,'limit_id'=>$value);
                    }
                    if($role_limit->addAll($data)){
                        $return_code='success';
                    }else{
                        $return_code='error';
                    }
                }else{
                    $return_code='error';
                }
            }
            //比较两个数组的差值,判断已选中的权限不处理，删除未选中的权限
            if(!empty($del_diff)){
                foreach ($del_diff as $key=>$value){
                    $where=array('role_id'=>$role_id,'limit_id'=>(int)$value);
                    if($role_limit->where($where)->delete()){
                        $return_code='success';
                    }else{
                        $return_code='error';
                    }
                }
            }
            $this->ajaxReturn($return_code);
        }
    }




}