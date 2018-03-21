<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){
    	$article=D('article');
    	$count=$article->where(array('cateid'=>I('id')))->count();
    	$page=new \Think\Page($count,2);
    	$page->setConfig('next','下一页');
    	$page->setConfig('prev','上一页');
    	$show=$page->show();
    	$list=$article->where(array('cateid'=>I('id')))->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign(array(
    	   'show'=>$show,
           'list'=>$list,
           'currentid'=>I('id'),
    		));
        $this->display();
    }
}