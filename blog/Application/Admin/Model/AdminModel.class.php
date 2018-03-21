<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
   protected $_validate=array(
      array('username','require','管理员账号不得为空！',1),
      array('username','','管理员账号已存在！',1,'unique',1),
      array('username','','管理员账号已存在！',1,'unique',2),
      array('username','/^([\w\d_]){4,10}$/','管理员账号长度应为4-10位，并且只能为英文或数字',1),
      array('password','require','密码不得为空！',1,'regex',1),
      array('password','/^([\w\d_]){4,10}$/','密码长度应为4-10位，并且只能为英文或数字',1,'regex',1),
      array('password2','password','确认密码不正确！',1,'confirm',1),
      array('verify','check_verify','验证码不正确！',1,'callback',4),
   	);
   public function login(){
   	 $username=$this->username;
   	 $password=$this->password;
   	 $adm=$this->where(array('username'=>$username))->find();
   	 if($adm){
          if($adm['password']==md5($password)){
          	session('id',$adm['id']);
          	session('username',$adm['username']);
          	return 1;
          }else{
          	return 0;
          }
   	 }else{
   	 	return 0;
   	 }
   }
   public function check_verify($code,$id=''){
   	$verify=new \Think\Verify();
   	return $verify->check($code,$id);
   }
}

?>