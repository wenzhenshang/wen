<?php
namespace Admin\Controller;
use Think\Controller;
/**
*tags标签
*/
class TagsController extends CommonController
{
	public function lst(){
		$tags=D('tags');
		$count=$tags->count();
		$page=new \Think\Page($count,2);
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$show=$page->show();
		$list=$tags->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign(array(
            'show'=>$show,
            'list'=>$list,
            'count'=>$count,
			));
		$this->display();
	}
	public function add(){
		$tags=D('tags');
		if(IS_POST){
           if($tags->create()){
               if($tags->add()){
               	$this->success("添加标签成功！");
			   }else{
			   	$this->error("添加标签失败！");
			   }

		   }else{
			   $this->error($tags->getError());
		   }
	    }
		$this->display();
	}
	public function edit(){
		$tags=D('tags');
		$list=$tags->find(I('id'));
		if(IS_POST){
			if($tags->create()){
                if($tags->save()){
                	$this->success('标签修改成功！');
                }else{
                	$this->error("标签修改失败！");
                }
			}else{
				$this->error($tags->getError());
			}
		}
		$this->assign('list',$list);
		$this->display();
	}
	public function del(){
		$tags=D('tags');
		if($tags->delete(I('id'))){
			$this->success('标签删除成功！');
		}else{
			$this->error('标签删除失败！');
		}
	}
}


?>