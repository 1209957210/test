<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/3
 * Time: 19:48
 */

namespace Admin\Controller;


use Think\Controller;

class EmptyController extends Controller {
    public function index(){
        $this->redirect('Index/index');
    }
    public function _empty(){
        $this->redirect('Index/index');
    }
}