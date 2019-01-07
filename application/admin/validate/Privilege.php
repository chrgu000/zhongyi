<?php
namespace app\admin\validate;
use think\Validate;
class Privilege extends Validate{
	protected $rule=[
	    'pri_name'=>'require',
	];
	protected $message=[
	    'pri_name.require'=>'权限名称必须填写',
	];
	protected $scene=[
	    'add'=>['pri_name'],
	    'edit'=>['pri_name'],
	];
}
?>