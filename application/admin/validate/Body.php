<?php
namespace app\admin\validate;
use think\Validate;
class Body extends Validate{
	protected $rule=[
	    'content'=>'require',
	    'title'=>'require',
	];
	protected $message=[
	    'content.require'=>'结果内容必须填写',
	    'title.require'=>'结果标题必须填写',
	];
	protected $scene=[
	    'add'=>['content','title'],
	    'edit'=>['content'],
	];
}
?>