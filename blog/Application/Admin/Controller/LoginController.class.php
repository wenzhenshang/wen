<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
use Admin\Model;
class LoginController extends Controller {
    public function index(){
         $admin=D('admin');
         if(IS_POST){
         	 if($admin->create($_POST,4)){
         	 	if($admin->login()){
                  $this->success("登录成功!!! ",U('Index/index'));
         	 	}else{
                  $this->error("登录失败！");
         	 	}
         	 }else{
         	 	$this->error($admin->getError());
         	 }
         }
        $this->display();
    }
    public function verify(){
    	$config=array(
              'fontSize'=>30,
              'length'=>4,
              'useNoise'=>true,
    		);
    	$verify=new \Think\Verify($config);
        $verify->entry();
    }

}
?>