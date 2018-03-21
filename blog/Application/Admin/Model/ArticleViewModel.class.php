<?php
namespace Admin\Model;
use Think\Model\ViewModel;
/**
*  文章视图
*/
class ArticleViewModel extends ViewModel
{
	public $viewFields=array(
       'Article'=>array('id','title','author','pic','click','state','_type'=>'LEFT'),
       'Cate'=>array('catename','_on'=>'Article.cateid=Cate.id'),
		);
}

?>