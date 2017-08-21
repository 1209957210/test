<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 首页
     */
    public function index(){
        $dir="Data/Home/";
        $file='index.html';
        $url=$dir.$file;
        //页面静态化
        //判断文件是否存在，并且缓存时间是否过期
        if(!is_file($url)&&(time()-filemtime($url))<60*60){
            require_once $url;
        }else{
            $classify=M('GoodsClassify');
            $field='id,pid,name';
            $where=array();
            $arr=$classify->field($field)->where($where)->select();
            $tree=new \Commonality\Controller\ArrayController();
            //商品分类无限分类
            $tree=$tree->tree($arr,0,0);
//        $tree=$this->tree($arr,0,0);
            $goods=M();
            //推荐商品轮播图
            $user="shop_goods as A,shop_goods_recommend as B,shop_goods_images as C";
            $A="A.id,A.goods_name,A.market_price,A.sales_price,A.classify,A.stock,A.state,";
            $B="B.id as bid,B.goods_id,B.state,";
            $C="C.id as cid,C.pid,C.images,C.time,C.first";
            $field=$A.$B.$C;
            $where="C.first=1 AND C.pid=A.id AND A.state=1 AND A.id=B.goods_id";
            $sql="SELECT ".$field." FROM ".$user." WHERE ".$where;
            $arr=$goods->query($sql);
            $this->assign('recommend',$arr);
            $this->assign('classify',$tree);
            $goods=array();
            foreach($tree as $key=>$value){
                if($value['pid']==0){
                    $goods[]=$this->goods($value['id']);
                }
            }
            var_dump($goods);
            $this->assign('goods',$goods);
            //打开缓冲区
            ob_start();
            $this->display();
            //获取缓冲区内容
            if(!is_dir($dir)){
                mkdir($dir,0777,true);
            }
            file_put_contents($url,ob_get_contents());
        }
    }

    /**
     * 根据商品分类查询该分类下的商品
     * @param $pid int 分类的父id
     * @return array
     */
    public function goods($pid){
        if(empty($pid)){
            $pid=1;
        }
        $goods=M();
        $sql="SELECT
      B.id,B.goods_name,B.market_price,B.sales_price,B.classify,B.stock,C.images,C.time,A.pid
      FROM shop_goods_images AS C 
      LEFT JOIN shop_goods as B ON C.pid=B.id AND C.first=1 AND B.state=1
      INNER JOIN  shop_goods_classify AS A ON A.id=B.classify AND B.state=1 AND A.pid=".$pid." ORDER BY B.id ASC LIMIT 0,8";
        $goods=$goods->query($sql);
        return $goods;
    }
    /**
     * 显示单个商品
     */
    public function item(){
        $id=(int)I('get.id');
        $dir="Data/Home/item/";//目录
        $file=$id.".html";//文件名
        $url=$dir.$file;
        if(is_file($url)&&(time()-filemtime($url))<60*60){
            require_once $url;
        }else{
            $goods=M();
            $chart='shop_goods as A,shop_goods_images as B,shop_goods_size as C,shop_goods_description as D,shop_goods_details as E';
            $field='A.id,A.goods_name,A.market_price,A.sales_price,A.stock,B.images,B.time,B.first,C.color,C.size,D.description,E.image';
            $where='E.pid=A.id AND D.pid=A.id AND C.pid=A.id AND B.pid=A.id AND A.state=1 AND A.id='.$id."  ORDER BY B.id ASC";
            $sql="SELECT ".$field." FROM ".$chart." WHERE ".$where;
            $arr=$goods->query($sql);
            $this->assign('item',$arr);
            ob_start();
            $this->display();
            if(!is_dir($dir)){
                mkdir($dir,0777,true);
            }
            file_put_contents($url,ob_get_contents());
        }
    }

    /**
     * 查找商品和商品分类
     */
    public function search(){
        if(IS_GET){
            $id=I('get.id');
            $page=I('get.page');
            $goods_name=I('get.goods_name');
            if(isset($id) && !empty($id)){
                $this->assign('id',$id);
            }else if(isset($goods_name) && !empty($goods_name)){
                $this->assign('goods_name',$goods_name);
            }
            $goods=$this->show_search($id,$page,$goods_name);
            //如果$page有值，则返回分页内容
            if(isset($page) && !empty($page)){
                foreach($goods as $key=>$value){
                    $goods[$key]['goods_name']=urlencode($value['goods_name']);
                    $goods[$key]['time']=date('Y-m-d',$value['time']);
                }
                $goods=urldecode(json_encode($goods));
                $this->ajaxReturn($goods);
            }else{
                $this->assign('goods',$goods);
            }
        }else{

        }
        $this->display();
    }

    /**
     * 根据商品id分页商品名称等条件返回商品的数组集合
     * @param string $id 商品id
     * @param int $page  分页
     * @param string $goods_name 商品名称
     * @return mixed|string      success->array   error->string
     */
    public function show_search($id='',$page=0,$goods_name=''){
        $id=(int)$id;
        $page=(int)$page;
        //过滤模糊搜索商品
        $goods_name=addcslashes(addcslashes(addslashes($goods_name),'%'),'_');
        $num=15;//每次显示多少条记录,默认20条
        //当page大于0就从$page*20条记录开始显示，否则默认显示从0条开始显示
        if($page>0){
            $page=$page*$num;
        }else{
            $page=0;
        }
        //如果传递了分类id则显示分类否则显示所有分类
        if(isset($id) && !empty($id)){
            $where='B.first=1 AND B.pid=A.id AND A.state=1 AND A.classify='.$id;
        }else if(!empty($goods_name) && isset($goods_name)){
            //模糊搜索商品
            $where="B.first=1 AND B.pid=A.id AND A.state=1 AND A.goods_name LIKE '%".$goods_name."%'";
        }else{
            //未传值显示所有商品
            $where='B.first=1 AND B.pid=A.id AND A.state=1';
        }
        $goods=M();
        $chart='shop_goods as A,shop_goods_images as B';
        $field='A.id,A.goods_name,A.market_price,A.sales_price,A.classify,A.stock,A.state,B.id as bid,B.pid,B.images,B.time,B.first';
        $sql="SELECT ".$field." FROM ".$chart." WHERE ".$where." ORDER BY A.id ASC LIMIT ".$page.",".$num."";
        if($arr=$goods->query($sql)){

        }else{
            $arr='';
        }

       return $arr;

    }
}