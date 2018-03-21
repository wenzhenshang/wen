<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
   protected $_validate=array(
      array('title','require','文章标题不得为空！',1),
      array('title','','文章标题已存在！',1,'unique',1),
      array('content','require','文章内容不得为空！',1),
      );

}
?>