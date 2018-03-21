<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->newheader();
        $this->newmenu();
    }
    public function newheader(){
    	$cate=D('cate')->select();
    	$tags=D('tags')->select();
    	$this->assign(array(
             'cate'=>$cate,
             'tags'=>$tags,
    		));
    }
    public function newmenu(){
    	$article=D('article');
        $click=$article->order('click desc')->limit(4)->select();
        $rec=$article->where(array('state'=>1))->order('click desc')->limit(6)->select();
        $this->assign(array(
            'click'=>$click,
            'rec'=>$rec,
            ));
    }
}