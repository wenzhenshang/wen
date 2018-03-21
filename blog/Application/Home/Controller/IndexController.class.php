<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$article=D('article');
    	$count=$article->count();
    	$page=new \Think\Page($count,2);
    	$page->setConfig('next','下一页');
    	$page->setConfig('prev','上一页');
    	$show=$page->show();
    	$list=$article->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign(array(
    	   'show'=>$show,
           'list'=>$list,
    		));
        $this->display();
    }
}