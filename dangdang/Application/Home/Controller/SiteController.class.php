<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/25
 * Time: 22:27
 */

namespace Home\Controller;


class SiteController extends VerifyController{
    private $user_id;
    private $id;
    public function __construct(){
        parent::__construct();
        $this->user_id=I('session.user_id');
        $this->id=I('get.id');
    }

    /**
     * 修改收货地址
     */
    public function edit_site(){
        if(IS_GET){
            $id=$this->id;
            if($id && $id!=''){
//                $user=new UserController();
//                $site=$user->show_site($id);
                $site=$this->show_site($this->user_id,$id);
                $this->assign('site',$site);
                $city=$this->city();
                $this->assign('city',$city);
            }
        }
        $this->display();
    }

    /**
     * 修改地址数据
     * 返回码说明
     * success 成功
     * error   失败
     */
    public function save_site(){
        $site=M('UserSites');
        $user_id=$this->user_id;
        $id=I('post.id');
        $state=I('post.state');
        //判断该用户是否已存在默认收货地址，存在则更新
        if($state && $state!=''){
            $where=array(
                'user_id'=>$user_id,
                'state'=>1,
            );
            if($arr=$site->where($where)->find()){
                //判断当前消息是否等于检索出的数据，如果是，则不修改默认状态
                if($arr['id']!=$id){
                    $data=array(
                        'state'=>0,
                    );
                    //更新为非默认状态
                    $site->where($where)->data($data)->save()?$return_code='success':$return_code='error';
                }
            }
        }
        if($id && $id!=''){
            $where=array('id'=>$id,'user_id'=>$user_id,);
            if($site->create($_POST,true)){
                //判断是否修改成功，防止数据相同时返回0条记录，要用全等false
                if($site->where($where)->save()!==false){
                    $return_code='success';
                }else{
                    $return_code='error';
                }
            }else{
                $return_code='error';
            }
        }
        $this->ajaxReturn($return_code);
    }

    /**
     * 显示添加收货地址页面
     */
    public function site(){
        $city=$this->city();
        $site=$this->show_site($this->user_id);
        $this->assign('city',$city);
        $this->assign('site',$site);
        $this->display();
    }

    /**
     * 接受前台传输的post格式数据，添加收货地址
     */
    public function add_site(){
        $user_id=$this->user_id;
        if(IS_POST){
            $sites=M('UserSites');
            $state=I('post.state');
            //判断是否添加默认收货地址
            //判断是否已经存在默认收货地址
            //如果存在则把已经存在的默认状态更新为非默认状态
            // 继续添加收货地址
            if($state && $state!=''){
                $where=array(
                    'user_id'=>$user_id,
                    'state'=>1,
                );
                if($sites->where($where)->find()){
                    $data=array(
                        'state'=>0,
                    );
                    //更新为非默认状态
                    $sites->where($where)->data($data)->save()?$return_code='success':$return_code='error';
                }
            }
            //添加收货地址
            if($sites->where('user_id='.$user_id)->count('id')<20){
                $sites->create()?$return_code='success':$return_code='error';
                $sites->user_id=$user_id;
                $sites->add()?$return_code='success':$return_code='error';
            }else{
                $return_code='max';
            }

        }else{
            $return_code='error';
        }
        $this->ajaxReturn($return_code);
    }

    /**
     * @return array|mixed|string
     * 返回省的数组集合给前台显示(array)
     * 并且负责ajax接受并返回省市联动数据(json)
     */
    public function city($id=0){
        $city=M('Citys');
        $field='id,name,pid';
        $id=I('post.id');
//        $id=$this->id;
        if($id && $id!=''){
            $where='pid='.$id;//并且负责ajax接受并返回省市联动数据(json)
            if($arr=$city->field($field)->where($where)->select()){
                foreach($arr as $key=>$value){
                    $arr[$key]['name']=urlencode($value['name']);
                }
            }else{
                $arr=array('return_code'=>404, 'error_code'=>'error',);
            }
        }else{
            //返回省的数组集合给前台显示(array)
            $where='pid=0';
            $arr=$city->field($field)->where($where)->select();
            return $arr;
        }
        $arr=urldecode(json_encode($arr));
        $this->ajaxReturn($arr);
    }

    /**
     * 给前台传输已存在的收货地址
     */
    public function show_site($user_id,$id=''){
        $user_id=$user_id;
        $site=D('UserSites');
        $field='id,province,city,region,zip_code,address,name,phone,state';
        if(isset($id) && $id!=''){
            $where=array(
                'id'=>$id,
                'user_id'=>$user_id,
            );
        }else{
            $where=array(
                'user_id'=>$user_id,
            );
        }
        if($arr=$site->field($field)->relation(true)->where($where)->select()){
            return $arr;
        }

    }

    /**
     * 删除收货地址
     */
    public function del_site(){
        $id=I('get.id');
        if(IS_GET){
            if($id){
                $site=M('UserSites');
                $site->where('id='.$id)->delete()?$return_code='success':$return_code='error';
            }else{
                $return_code='error';
            }
        }else{
            $return_code='error';
        }
        $this->ajaxReturn($return_code);
    }
}