<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/25
 * Time: 0:57
 */

namespace Admin\Controller;

use Think\Controller;
class VerifyController extends EmptyController {
    /*
     * 构造方法防止未登陆用户进入后台
     * 防止越权限行为
     */
    public function __construct(){
        parent::__construct();
        $admin_id=$_SESSION['Admin_id'];
        if(!isset($admin_id) || empty($admin_id)){
            $this->redirect('Login/index');
        }
        //分配通用数据
        $name=session('admin_name');
        $this->assign('name',$name);
        $limit=new DataController();
        $arr=$limit->admin_limit();
        $this->assign('arr',$arr);
        //RBAC
        $controller='';
        foreach($arr as $key=>$value){
            $controller.=$value['controller']."/".$value['way'].' ';
        }
        $path_info=$_SERVER['PATH_INFO'];
        $path_info=explode('/',$path_info);
        $url='';
        for($i=0;$i<=1;$i++){
            if($i==0){
                $url.=$path_info[$i]."/";
            }else{
                $url.=$path_info[$i];
            }
        }
        if(strpos($controller,$url)===false && $admin_id!=1){
          $this->redirect('Index/index');
        }
    }


}