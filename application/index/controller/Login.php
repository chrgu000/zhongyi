<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;
class Login extends Controller{

	//注册
	public function register(){

		if(request()->isPost()){
			$repassword=input('repassword');
			$data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),
                'mobile'=>input('mobile'),
                'time'=>date('Y-m-d H:i:s'),   //获取当前时间，即注册时间
			];
			$validate= \think\Loader::validate('user');
			$user=db('user')->where('username','=',$data['username'])->find();
			if($user == ''){
				if($data['username']!=''){
					if($data['password']!=''){
						if($repassword!=''){
							if(!$validate->scene('register')->check($data)){
								$this->error($validate->getError()); //表单数据是否合法
							}else{
						    	if(md5($repassword)!=$data['password']){
			                    	return $this->error('两次密码不一致！请您重新注册！');
			                	}else{
								    if(db('user')->insert($data)){   //插入数据库
									    return $this->success('注册成功，请登录！','Login/login');
								    }else{
									    return $this->error('注册失败！');
								    }
								}
							}
						}else{
							return $this->error('再次输入的密码不能为空！'); 
						}
					}else{
						return $this->error('密码不能为空！'); 
					}	
				}else{
					return $this->error('用户名不能为空！'); 
				}
			}else{
				return $this->error('用户名已存在！');
			}
		}
		return $this->fetch('register');
	}

	//验证用户名是否存在(注册)
	public function checkname($username){
		$info=db('user')->where('username','=',$username)->find();
		if($info){
			echo '用户名已存在';
		}
	}

	//修改密码
	public function editpwd(){
		if(request()->isPost()){
			$repassword=input('repassword');
			$data=[
                'password'=>md5(input('password')),
                'username'=>input('username'),
                'id'=>session('userid'),
			];
			$oldpwd = input('oldpwd');
			$validate= \think\Loader::validate('User');
			$user=db('user')->where('username','=',$data['username'])->find();
			if($user){
				if($oldpwd!=''){
					if(md5($oldpwd)==$user['password']){
						if($data['password']!=''){
							if($repassword!=''){
								if(!$validate->scene('editpwd')->check($data)){
									$this->error($validate->getError()); //表单数据是否合法
								}else{
							    	if(md5($repassword)!=$data['password']){
				                    	return $this->error('两次密码不一致！请您重新填写！');
				                	}else{
									    if(db('user')->update($data)){   //更新数据库
										    return $this->success('修改成功，请登录！','Login/login');
									    }else{
										    return $this->error('修改失败！');
									    }
									}
								}
							}else{
								return $this->error('再次输入的密码不能为空！'); 
							}
						}else{
							return $this->error('密码不能为空！'); 
						}
					}else{
						return $this->error('原始密码不正确！');
					}
				}else{
					return $this->error('原始密码不能为空！');
				}
			}else{
				return $this->error('用户不存在！');
			}
		}
		return $this->fetch('editpwd');
	}

	//注册结果
	public function register_result(){
		return $this->fetch('register_result');
	}

	//登录
	public function login(){
		if(request()->isPost()){
			$data=[
			    'username'=>input('username'),
			    'password'=>input('password'),
			];
			$validate= \think\Loader::validate('User');
			if(!$validate->scene('login')->check($data)){
				$this->error($validate->getError());  //表单数据不合法
			}else{
				$user=new User();   //实例化模型
				$num=$user->login($data);    //调用模型中方法
				if($num==1){
					return $this->success('登录成功！','Index/index');
				}elseif($num==2){
					return $this->error('密码错误！');
				}else{
					return $this->error('用户不存在！');
				}
			}		
		}
		return $this->fetch('login');
	}

	//退出
	public function logout(){

        session(null);
        $this->success('退出成功！','Login/login');
    }
}
?>