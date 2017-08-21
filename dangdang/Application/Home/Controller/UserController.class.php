<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 15:18
 */

namespace Home\Controller;


use Think\Controller;
class UserController extends VerifyController{
    private $user_id;
    public function __construct(){
        parent::__construct();
        $this->user_id=$_SESSION['user_id'];
    }

    /**
     * 显示用户首页
     */
    public function index(){
        $this->display();
    }


}