<?php
namespace app\index\validate;
use think\Validate;

class User extends Validate{
	protected $rule=[
	    'username'=>'require',
	    'password'=>'require',
	];

	protected $message=[
	    'username.require'=>'账号必须填写',
	    'password.require'=>'密码必须填写',
	];

	protected $scene=[              //验证场景，验证register和login场景的数据。
	    'register'=>['username'=>'require'],
	    'login'=>['username'=>'require','password'],
	    'editpwd'=>['password'],
	];
}
?>