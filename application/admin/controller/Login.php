<?php
namespace app\Admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends Controller{
	//登录
	public function login(){
		if(request()->isPost()){
			$data=[
			    'adminname'=>input('adminname'),
			    'adminpassword'=>input('adminpassword'),
			    'code'=>input('code'),
			];    //获取表单数据
	        $validate= \think\Loader::validate('Admin');
	        if(!$validate->scene('login')->check($data)){
	        	return $this->error($validate->getError()); //表单数据不合法
	        }else{
	        	$captcha=new \think\captcha\Captcha();
				if(!$captcha->check($data['code'])){
					return $this->error('验证码错误！');
				}else{
					$admin=new Admin();
		        	$num=$admin->login($data); //调用model中的方法
		        	if($num==1){
		        		//$adminid=session('adminid');
		        		return $this->redirect('Index/index');
		        	}else{
		        		return $this->error('用户名或密码错误！');
		        	}
				}
	        }
		}
		return $this->fetch('login');
	}

	//判断图片验证码是否正确
	public function checkimg(){
		$code=input('code');
		$captcha=new \think\captcha\Captcha();
		if($code==''){
			echo '验证码不能为空';
		}elseif(!$captcha->check($code)){
			echo '验证码错误，请重新输入';
		}
}

	//修改密码
	public function changepwd(){
		$adminname=session('adminname');
		$id=session('id');
		$this->assign('id',$id);
		$this->assign('adminname',$adminname);//输出工号、用户名
		if(request()->isPost()){
			$data=[
			'id'=>input('id'),
			'adminname'=>input('adminname'),
			'adminpassword'=>md5(input('adminpassword')), //获取表单数据
		];
		$validate = \think\Loader::validate('Admin');
    		if(!$validate->scene('changepwd')->check($data)){
			   $this->error($validate->getError());  //检验表单信息合法
			}else{
				$admin=new Admin();
				$num=$admin->changepwd($data);  //调用model中方法
				if($num==1){
					return $this->redirect('Login/changepwd_success');
				}else{
					return $this->error('修改失败！');
				}
			}
		}
		return $this->fetch('change-password');
	}

	//修改成功
	public function changepwd_success(){
		return $this->fetch('changepwd_success');
	}


	//退出
	public function logout(){
		session(null);
		$this->redirect('Login/login');
	}



}
?>