<?php
namespace Admin\Controller;
use Think\Controller;
/**
*article文章
*/
class ArticleController extends CommonController
{
	public function lst(){
		$article=D('articleView');//视图
		$count=$article->count();
		$page=new \Think\Page($count,2);
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$show=$page->show();
		$list=$article->order("id desc")->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign(array(
            'show'=>$show,
            'list'=>$list,
            'count'=>$count,
			));
		$this->display();
	}
	public function add(){
		$article=D('article');
		if(IS_POST){
			if($_FILES['pic']['tmp_name']){//上传文章缩略图片
				$file=new \Think\Upload();
				$file->maxSize=3145728;
				$file->rootPath='./';
				$file->savePath='./Public/Upload/';
				$file->exts=array('jpg','gif','png','jpeg');
				$info=$file->uploadOne($_FILES['pic']);
				$in=$info['savepath'].$info['savename'];
			}
           if($article->create()){
           	    $article->keysword=str_replace('，', ',', I('keysword'));
           	    if($in){
           	    	$article->pic=$in;
           	    }
           	   if(I('state')=='on'){
           	   	  $article->state=1;
           	   }else{
                  $article->state=0;
           	   }
           	   $article->time=date('Y-m-d h:i:s',time());
               if($article->add()){
               	$this->success("添加文章成功！");
			   }else{
			   	$this->error("添加文章失败！");
			   }

		   }else{
			   $this->error($article->getError());
		   }
	    }
	    $cate=D('cate')->select();
	    $this->assign('cate',$cate);
		$this->display();
	}
	public function edit(){
		$article=D('article');
		$list=$article->find(I('id'));
		$cate=D('cate')->select();
		if(IS_POST){
            if($_FILES['pic']['tmp_name']){
               $pic=$article->field('pic')->find(I('id'));
               if(file_exists($pic['pic'])){
                 	@unlink($pic['pic']);
               }
               $file=new \Think\Upload();
               $file->maxSize=3145728;
               $file->exts=array('jpg','png','gif','jpeg');
               $file->rootPath="./";
               $file->savePath="./Public/Upload/";
               $info=$file->uploadOne($_FILES['pic']);
               $in=$info['savepath'].$info['savename'];
            }
			if($article->create()){
				if($in){
					$article->pic=$in;
				}
				if(I('state')=='on'){
					$article->state=1;
				}else{
					$article->state=0;
				}
				$article->time=date('Y-m-d h:i:s',time());
				$article->keysword=str_replace('，',',',I('keysword'));
                if($article->save()!==false){ //防止没修改出错
                	$this->success('文章修改成功！');
                }else{
                	$this->error("文章修改失败！");
                }
			}else{
				$this->error($article->getError());
			}
		}
		$this->assign(array(
            'cate'=>$cate,
            'list'=>$list,
			));
		$this->display();
	}
	public function del(){
		$article=D('article');
		if($article->delete(I('id'))){
			$this->success('文章删除成功！');
		}else{
			$this->error('文章删除失败！');
		}
	}
}


?>