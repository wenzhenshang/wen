<?php
namespace Admin\Controller;
use Think\Controller;
/**
*cate栏目
*/
class CateController extends CommonController
{
	public function lst(){
		$cate=D('cate');
		$count=$cate->count();
		$page=new \Think\Page($count,2);
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$show=$page->show();
		$list=$cate->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign(array(
            'show'=>$show,
            'list'=>$list,
            'count'=>$count,
			));
		$this->display();
	}
	public function add(){
		$cate=D('cate');
		if(IS_POST){
           if($cate->create()){
               if($cate->add()){
               	$this->success("添加栏目成功！");
			   }else{
			   	$this->error("添加栏目失败！");
			   }

		   }else{
			   $this->error($cate->getError());
		   }
	    }
		$this->display();
	}
	public function edit(){
		$cate=D('cate');
		$list=$cate->find(I('id'));
		if(IS_POST){
			if($cate->create()){
                if($cate->save()){
                	$this->success('栏目修改成功！');
                }else{
                	$this->error("栏目修改失败！");
                }
			}else{
				$this->error($cate->getError());
			}
		}
		$this->assign('list',$list);
		$this->display();
	}
	public function del(){
		$cate=D('cate');
		if($cate->delete(I('id'))){
			$this->success('栏目删除成功！');
		}else{
			$this->error('栏目删除失败！');
		}
	}
}


?>