<?php
namespace Admin\Controller;
use Think\Controller;
/**
*admin管理员
*/
class AdminController extends CommonController
{
	
	public function lst(){
		$admin=D('admin');
		$count=$admin->count();
		$page=new \Think\Page($count,2);
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$show=$page->show();
		$list=$admin->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign(array(
            'show'=>$show,
            'list'=>$list,
            'count'=>$count,
			));
		$this->display();
	}
	public function add(){
		$admin=D('admin');
	
		if(IS_POST){
           if($admin->create()){
               $admin->password=md5(I('password'));
               $admin->time=date("Y-m-d H:i:s",time());
               if($admin->add()){
               	$this->success("添加管理员成功！");
			   }else{
			   	$this->error("添加管理员失败！");
			   }

		   }else{
			   $this->error($admin->getError());
		   }
	    }
		$this->display();
	}
	public function edit(){
		$admin=D('admin');
		$list=$admin->find(I('id'));
		if(IS_POST){
			if($admin->create()){
                 if(I('password')){
                 	$admin->password=md5(I('password'));
                 }else{
                 	$admin->password=$list['password'];
                 }
                 $admin->time=date('Y-m-d h:i:s',time());
                if($admin->save()){
                	$this->success('管理员修改成功！');
                }else{
                	$this->error("管理员修改失败！");
                }
			}else{
				$this->error($admin->getError());
			}
		}
		$this->assign('list',$list);
		$this->display();
	}
	public function del(){
		$admin=D('admin');
		if($admin->delete(I('id'))){
			$this->success('管理员删除成功！');
		}else{
			$this->error('管理员删除失败！');
		}
	}
	public function logout(){
		session(null);
		$this->success('退出成功！',U('Login/index'));
	}
}


?>