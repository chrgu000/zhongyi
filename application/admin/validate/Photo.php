<?php
namespace app\admin\validate;
use think\Validate;
class Photo extends Validate{
	protected $rule=[
	    'image'=>'require',
	    'name'=>'require',
	    'content'=>'require',
	    'statue'=>'require',
	];
	protected $message=[
	    'image.require'=>'图片不能为空',
	    'name.require'=>'名称必须填写',
	    'content.require'=>'内容必须填写',
	    'statue.require'=>'状态必须选择',
	];
	protected $scene=[
	    'add_doctor'=>['image','name','content','statue'],
	    'add_book'=>['image','name','content','statue'],
	    'add_medicine'=>['name','content','statue'],
	    'edit_doctor'=>['name','content','statue'],
	    'edit_book'=>['name','content','statue'],
	    'edit_medicine'=>['name','content','statue'],
	    'doctor_edit'=>['image'],
	    'book_edit'=>['image'],
	    'add_xuewei'=>['image','name','content','statue'],
	    'edit_xuewei'=>['name','content','statue'],
	    'xuewei_edit'=>['image'],
	];
}
?>