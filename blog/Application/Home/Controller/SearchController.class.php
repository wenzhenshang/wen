<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends CommonController {
    public function index(){
         $keysword=I('search');
         if($keysword){
            $map['title']=array('like','%'.$keysword.'%');
            $search=D('article')->where($map)->count();
            $page=new \Think\Page($search,2);
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $show=$page->show();
            $list=D('article')->order('id desc')->where($map)->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign(array(
                'keysword'=>$keysword,
                'list'=>$list,
                'show'=>$show,   
                ));

         }else{
            $this->assign(array(
                 'keysword'=>$keysword,
                 'search'=>'暂无数据',
                 'se'=>0,
                ));
         }
        $this->display();
    }
}