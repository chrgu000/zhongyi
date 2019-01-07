<?php
namespace app\admin\validate;
use think\Validate;
class Role extends Validate{
	protected $rule=[
	    'rolename'=>'require|unique:role',
	];
	protected $message=[
	    'rolename.require'=>'角色名称必须填写',
	    'rolename.unique'=>'角色已经存在',
	];
	protected $scene=[
	     'add'=>['rolename'],
	     'edit'=>['rolename'=>'require'],
	];
	    
}
?>