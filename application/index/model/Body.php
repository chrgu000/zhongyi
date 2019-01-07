<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Body extends Model{

	//添加体测
	public function add($data){
		if(db('bodytest')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
}
?>