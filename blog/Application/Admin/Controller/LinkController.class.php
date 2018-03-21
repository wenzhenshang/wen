<?php
namespace Admin\Controller;
use Think\Controller;
/**
*link链接
*/
class linkController extends CommonController
{
	public function lst(){
		$link=D('link');
		$count=$link->count();
		$page=new \Think\Page($count,2);
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$show=$page->show();
		$list=$link->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign(array(
            'show'=>$show,
            'list'=>$list,
            'count'=>$count,
			));
		$this->display();
	}
	public function add(){
		$link=D('link');
		if(IS_POST){
           if($link->create()){
               if($link->add()){
               	$this->success("添加链接成功！");
			   }else{
			   	$this->error("添加链接失败！");
			   }

		   }else{
			   $this->error($link->getError());
		   }
	    }
		$this->display();
	}
	public function edit(){
		$link=D('link');
		$list=$link->find(I('id'));
		if(IS_POST){
			if($link->create()){
                if($link->save()){
                	$this->success('链接修改成功！');
                }else{
                	$this->error("链接修改失败！");
                }
			}else{
				$this->error($link->getError());
			}
		}
		$this->assign('list',$list);
		$this->display();
	}
	public function del(){
		$link=D('link');
		if($link->delete(I('id'))){
			$this->success('链接删除成功！');
		}else{
			$this->error('链接删除失败！');
		}
	}
}


?>