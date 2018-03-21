<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model;
class CommonController extends Controller {
    public function __construct(){
      parent::__construct();
      if(!session('id')){
        $this->error('请先登录！',U('Login/index'));
      }
     }
}