<?php
namespace  app\index\model;
use think\Model;
use think\Db;

class User extends Model{
	//登录
	public function login($data){
		$user=Db::name('user')->where('username','=',$data['username'])->find();
        if($user){
            if($user['password']==md5($data['password'])){
                session('userid',$user['id']);
                session('username',$user['username']);
                return 1; //登录成功
            }else{
                return 2; // 密码错误
            }
        }else{
            return 3; //用户不存在
        }
	}
}
?>