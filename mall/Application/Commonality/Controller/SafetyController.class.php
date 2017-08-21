<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/31
 * Time: 23:41
 */

namespace Commonality\Controller;


class SafetyController{
    //编译
    public function htmlencode($str) {
        if(isset($str)<1 && empty($str)){
            return "";
        }
            $str=trim($str);
            $str=str_replace("&amp;","&amp;amp;",$str);
            $str=str_replace("&gt;","&amp;gt;",$str);
            $str=str_replace("&lt;","&amp;lt;",$str);
            $str=str_replace(chr(32),"&amp;nbsp;",$str);
            $str=str_replace(chr(9),"&amp;nbsp;",$str);
            $str=str_replace(chr(34),"&amp;",$str);
            $str=str_replace(chr(39),"&amp;#39;",$str);
            $str=str_replace(chr(13),"&lt;br /&gt;",$str);
            $str=str_replace("'","''",$str);
            $str=str_replace("select","sel&amp;#101;ct",$str);
            $str=str_replace("join","jo&amp;#105;n",$str);
            $str=str_replace("union","un&amp;#105;on",$str);
            $str=str_replace("where","wh&amp;#101;re",$str);
            $str=str_replace("insert","ins&amp;#101;rt",$str);
            $str=str_replace("delete","del&amp;#101;te",$str);
            $str=str_replace("update","up&amp;#100;ate",$str);
            $str=str_replace("like","lik&amp;#101;",$str);
            $str=str_replace("drop","dro&amp;#112;",$str);
            $str=str_replace("create","cr&amp;#101;ate",$str);
            $str=str_replace("modify","mod&amp;#105;fy",$str);
            $str=str_replace("rename","ren&amp;#097;me",$str);
            $str=str_replace("alter","alt&amp;#101;r",$str);
            $str=str_replace("cast","ca&amp;#115;",$str);
            return $str;
    }

    public function htmldecode($str) {
        if(isset($str)<1 && empty($str)){
            return "";
        }
        $str=str_replace("sel&amp;#101;ct","select",$str);
        $str=str_replace("jo&amp;#105;n","join",$str);
        $str=str_replace("un&amp;#105;on","union",$str);
        $str=str_replace("wh&amp;#101;re","where",$str);
        $str=str_replace("ins&amp;#101;rt","insert",$str);
        $str=str_replace("del&amp;#101;te","delete",$str);
        $str=str_replace("up&amp;#100;ate","update",$str);
        $str=str_replace("lik&amp;#101;","like",$str);
        $str=str_replace("dro&amp;#112;","drop",$str);
        $str=str_replace("cr&amp;#101;ate","create",$str);
        $str=str_replace("mod&amp;#105;fy","modify",$str);
        $str=str_replace("ren&amp;#097;me","rename",$str);
        $str=str_replace("alt&amp;#101;r","alter",$str);
        $str=str_replace("ca&amp;#115;","cast",$str);
        $str=str_replace("&amp;amp;","&amp;",$str);
        $str=str_replace("&amp;gt;","&gt;",$str);
        $str=str_replace("&amp;lt;","&lt;",$str);
        $str=str_replace("&amp;nbsp;",chr(32),$str);
        $str=str_replace("&amp;nbsp;",chr(9),$str);
        $str=str_replace("&amp;",chr(34),$str);
        $str=str_replace("&amp;#39;",chr(39),$str);
        $str=str_replace("&lt;br /&gt;",chr(13),$str);
        $str=str_replace("''","'",$str);
        return $str;
    }
}