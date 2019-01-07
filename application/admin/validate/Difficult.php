<?php
namespace app\admin\validate;
use think\Validate;
class Difficult extends Validate{
	protected $rule=[
	    'typename'=>'require',
	    'statue'=>'require',
	];
	protected $message=[
	    'typename.require'=>'分类名称必须填写',
	    'statue.require'=>'请选择是否显示',
	];
	protected $scene=[
	    'add'=>['typename','statue'],
	    'edit'=>['typename'],
	];
}
?>