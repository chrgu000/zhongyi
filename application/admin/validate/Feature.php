<?php
namespace app\admin\validate;
use think\Validate;
class Feature extends Validate{
	protected $rule=[
	    'text'=>'require',
	    'title'=>'require',
	    'image'=>'require',
	];
	protected $message=[
	    'text.require'=>'描述内容必须填写',
	    'title.require'=>'特色标题必须填写',
	    'image.require'=>'图片不能为空',
	];
	protected $scene=[
	    'add'=>['text'],
	    'edit'=>['text'],
	    'add_feature'=>['title'],
	    'edit1'=>['title'],
		'feature_edit'=>['image'],
	];
}
?>