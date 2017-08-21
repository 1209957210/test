<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/24
 * Time: 23:46
 */

namespace Commonality\Controller;

/*
 * SqlController sql操作
 */
class SqlController{
    /*
    * index 入口
    * $type string 类型
    * $d pointer 表指针
    * $field 指定字段
    * $where 条件
    * $data 更新的数据
    */
    public function index($type='',$d,$field='',$where,$data){
        switch ($type){
            case 'find':
                $set=$this->find($d,$field,$where);
                break;
            case 'select':
                $set=$this->select($d,$field,$where);
                break;
            case 'query':
                $set=$this->query($d,$field);
                break;
            case 'add_create':
                $set=$this->add_create($d,$field);
                break;
            case 'add_data':
                $set=$this->add_data($d,$field,$where);
                break;
            case 'update':
                $set=$this->update($d,$field,$where,$data);
                break;
            default:
                $set=$this->find($d,$field,$where);
                break;
        }
        return $set;
    }
/*
 * find 单列查询
 *
 */
    private function find($d,$field,$where){
        $set=$d->field($field)->where($where)->find();
        return $set;
    }

/*
 * select 多列查询
 *
 */
    private function select($d,$field,$where){
        $set=$d->field($field)->where($where)->select();
        return $set;
    }
    /*
     * query 多表查询
     * $d pointer 指针
     * $sql sql语句
     */
    private function query($d,$sql=''){
        $set=$d->query($sql);
        return $set;
    }

    /*
     * 写入 add 因为create和data冲突
     */
    private function add_create($d,$field=''){
        $set=$d->field($field)->add();
        return $set;
    }
    /*
     * 写入 add 因为create和data冲突
     */
    private function add_data($d,$field='',$data){
        $set=$d->field($field)->data($data)->add();
        return $set;
    }

    /*
     * 更新
     */
    private function update($d,$field,$where,$data){
        $set=$d->field($field)->where($where)->data($data)->save();
        return $set;
    }
}