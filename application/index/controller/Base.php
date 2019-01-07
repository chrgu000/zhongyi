<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller{
	//判断用户是否登录
	public function _initialize(){
		if(!session('username')){
			return $this->error('请先登录系统！','Login/login');
		}
	}
}
?>