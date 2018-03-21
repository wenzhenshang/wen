<?php
namespace Admin\Model;
use Think\Model;
class TagsModel extends Model{
   protected $_validate=array(
      array('tagname','require','标签名称不得为空！',1),
      );
}
?>