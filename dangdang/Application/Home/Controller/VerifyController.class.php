<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/10
 * Time: 13:47
 */

namespace Home\Controller;


use Think\Controller;

class VerifyController extends Controller{
    public function __construct(){
        parent::__construct();
        session('url',$_SERVER["PATH_INFO"]);
        if(!isset($_SESSION['user_id']) || I('session.user_id')==''){
            $this->redirect('Login/index');
        }
    }

}