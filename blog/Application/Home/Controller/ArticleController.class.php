<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
    	$article=D('article');

    	$art=$article->where(array('id'=>I('id')))->find();
        $article->where(array('id'=>I('id')))->setInc('click');
        $relati=$this->rela($art['keysword'],$art['id']);
        $rela=array_unique($relati,SORT_REGULAR);
        $cates=D('cate')->where(array('id'=>$art['cateid']))->find();
         $rec=$article->where(array('cateid'=>$cates['id'],'state'=>1))->limit(7)->select();
    	$this->assign(array(
    	   'article'=>$art,
           'cates'=>$cates,
           'rec'=>$rec,
           'rela'=>$rela,
    		));
        $this->display();
    }
    public function rela($keysword,$id){
        $keys=explode(',', $keysword);
        $art=D('article');
        static $re=array();
        foreach ($keys as $k => $v) {
            $map['keysword']=array('like','%'.$v.'%');
            $map['id']=array('neq',$id);
            $rel=$art->where($map)->order('id desc')->limit(5)->select();
            $re=array_merge($re,$rel);
        }
        if($re){
            return $re;
        }
    }
    
}