<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 19:21
 */

namespace Commonality\Controller;


class ArrayController{
    /**
     * 无限分类
     * @param $arr 要遍历的数组
     * @param int $pid pid
     * @param int $level 层级
     * @param string $str 添加附加样式
     * @return array 返回遍历后的结果
     */
    public function tree($arr,$pid=0,$level=0,$str=''){
            static $tree=array();
            foreach ($arr as $value){
                if($value['pid']==$pid){
                    if(isset($str) && !empty($str)){
                        $value['name']=str_repeat($str,$level).$value['name'];
                    }
                    $value['level']=$level;
                    $tree[]=$value;
                    $this->tree($arr,$value['id'],$level+1,$str);
                }
    }
    return $tree;
}

}