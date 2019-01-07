<?php
namespace app\index\validate;
use think\Validate;
class Talk extends Validate{
	protected $rule=[
	    'title'=>'require',
	    'content'=>'require',
	];
	protected $message=[
	    'title.require'=>'标题不能为空',
	    'content.require'=>'内容不能为空',
	];
	protected $scene=[
	    'add'=>['title','content'],
	    'add1'=>['content'],
	];
}
?>