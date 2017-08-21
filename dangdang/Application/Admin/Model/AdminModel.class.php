<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/25
 * Time: 13:47
 */

namespace Admin\Model;

use Think\Model;
class AdminModel extends Model{
    protected $_validate = array(
             array('phone','','帐号名称已经存在！',0,'unique'), // 在新增的时候验证name字段是否唯一
//             array('phone','Phone','手机号码格式不正确',0,'callback'),
             array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
             array('password','CheckPwd','密码格式不正确',0,'callback') // 自定义函数验证密码格式
       );
    protected $_auto = array (
////        array('status','1'),  // 新增的时候把status字段设置为1
        array('password','md5',3,'function') // 对password字段在新增和编辑的时候使md5函数处理
////        array('name','getName',3,'callback'), // 对name字段在新增和编辑的时候回调getName方法
    );
//    /*
//     * 验证手机号码是否为纯数字
//     */
    public function Phone($phone){

    }
    protected function CheckPwd($password){

    }

}