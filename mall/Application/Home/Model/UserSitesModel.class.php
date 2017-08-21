<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/25
 * Time: 19:57
 */

namespace Home\Model;


use Think\Model\RelationModel;

class UserSitesModel extends RelationModel{
    protected $_link=array(
        'province' => array(
            'mapping_type'  => self::BELONGS_TO,
            'class_name'    => 'Citys',
            'foreign_key'   => 'province',
            'mapping_name'  => 'province',
            'mapping_fields'=>'id,name',
            ),
        'city' => array(
            'mapping_type'  => self::BELONGS_TO,
            'class_name'    => 'Citys',
            'foreign_key'   => 'city',
            'mapping_name'  => 'city',
            'mapping_fields'=>'id,name',
        ),
        'region' => array(
            'mapping_type'  => self::BELONGS_TO,
            'class_name'    => 'Citys',
            'foreign_key'   => 'region',
            'mapping_name'  => 'region',
            'mapping_fields'=>'id,name',
        ),
    );

}