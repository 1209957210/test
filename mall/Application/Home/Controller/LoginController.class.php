<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 15:28
 */

namespace Home\Controller;


use Think\Controller;
class LoginController extends Controller {
    /**
     * 显示登陆页面
     */
    public function index(){
        $this->display();
    }

    /**
     * 登陆
     */
    public function login($phone,$password){
        $user=M('Users');
        if(IS_POST){
            $phone=$_POST['phone'];
            if(is_numeric($phone) && strlen($phone)==11){
                $password=$_POST['password'];
                if(strlen($password)<16 && strlen($password)>6){
                    $password=md5($password);
                }
            }
        }else{
            $phone=$phone;
            $password=$password;
        }
        $field='id,phone,nickname';
        $where=array(
            'phone'=>$phone,
            'password'=>$password,
        );
        if($arr=$user->field($field)->where($where)->find()){
           session('user_id',$arr['id']);
           session('nickname',$arr['nickname']);
//           echo "<script>window.history.go(-2);</script>";
            //判断通过ajax提交的登陆验证
            if(IS_AJAX){
               $this->ajaxReturn('success');
            }
            $url=I('session.url');
            unset($_SESSION['url']);
            if(isset($url) && !empty($url)){
                $this->redirect($url);
//                echo "<script>window.location.href='".$url."'</script>";
            }else{
                $this->redirect('Index/index');
            }
        }else{
            if(IS_AJAX){
                $this->ajaxReturn('error');
            }else{
                $this->error('密码错误');
            }
        }
    }

    /**
     * 显示注册页面
     */
    public function register(){
        $this->display();
    }

    /**
     * 注册
     */
    public function to_register(){
        $verify=$_SESSION['verify'];
        unset($_SESSION['verify']);
        $verify_time=$_SESSION['verify_time'];
        unset($_SESSION['verify_time']);
        $verify_post=$_POST['verify'];
        unset($_POST['verify']);
//        if((time()-$verify_time)<=60 && !empty($verify) &&$verify==$verify_post && is_numeric($verify_post)){
            $users=D('Users');
            if($users->create($_POST,true)){
                $users->nickname='用户'.rand(10,9999);
                if($users->add()){
                    $phone=$_POST['phone'];
                    $password=md5($_POST['password']);
                    $this->login($phone,$password);
                }
            }else{
                $this->error($users->getError());
            }
//        }else{
//            $this->error('验证码不正确');
//        }

    }

    /**
     * 验证码
     */
    public function verify(){
    require_once 'Api/sms/api_demo/SmsDemo.php';
        $mobile=I('post.phone');
        if(empty($mobile) || isset($mobile)!=11 || !is_numeric($mobile)){
            $this->ajaxReturn('error');
        }
        $signName="diy商城verif";
        $templateCode="SMS_85570021";
        $phoneNumbers=$mobile;
        $num=str_pad(mt_rand(0,999999),6,0);
        $templateParam=array('phone'=>$num);
        $sms=new \SmsDemo('LTAIk8o2uhiUyg77','Q4mboUVBvvOD4cMf3tVb2ni1SwjnJq');
        $sms=$sms->sendSms($signName, $templateCode, $phoneNumbers, $templateParam);
       if($sms->Code=='OK'){
           $_SESSION['verify']=$num;
           $_SESSION['verify_time']=time();
           $this->ajaxReturn('success');
       }else{
           $this->ajaxReturn('error');
       }

    }
    /**
     * 给ajax返回登陆状态和用户名
     */
    public function getLogin(){
        $nickname=I('session.nickname');
        if(isset($nickname) && $nickname!=''){
            $return_code=array(
                'code'=>200,
                'nickname'=>urlencode($nickname),
            );
            $return_code=urldecode(json_encode($return_code));
        }else{
            $return_code='error';
        }
        $this->ajaxReturn($return_code);
    }

    /**
     * 退出登陆
     */
    public function login_out(){
       session(null);
       cookie(null);
       $this->ajaxReturn('success');
    }
}