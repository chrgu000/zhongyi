<?php
namespace app\admin\validate;
use think\Validate;
class Study extends Validate{
	protected $rule=[
	    'name'=>'require',
	    'content'=>'require',
	    'statue'=>'require',
	];
	protected $message=[
	    'name.require'=>'请选择要上传的内容',
	    'content.require'=>'内容必须填写',
	    'statue.require'=>'状态必须选择',
	];
	protected $scene=[
	    'add_file'=>['name'],
	    'add_video'=>['name'],
	    'add_article'=>['name','content','statue'],
		'edit_article'=>['name','content','statue'],
	];
}
?>