<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate{
	protected $rule=[
	    'adminname'=>'require|unique:admin',
	    'adminpassword'=>'require',
	    'role'=>'require',
	];
	protected $message=[
	    'adminname.require'=>'用户名必须填写',
	    'adminname.unique'=>'用户名已经存在',
	    'adminpassword.require'=>'密码必须填写',
	    'role.require'=>'用户角色必须选择',
	];
	protected $scene=[
	    'add'=>['adminname','adminpassword','role'],
	    'login'=>['adminname'=>'require','adminpassword'],
	    'changepwd'=>['adminpassword'],
	];
}
?>