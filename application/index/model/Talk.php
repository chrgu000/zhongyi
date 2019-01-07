<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Talk extends Model{

	//查询
	public function search($keywords){
		if($keywords){
			$where['title']=['like','%'.$keywords.'%'];
		}else{
			$where=1;    //超级管理员不显示
		}
		$list=db('talk')->where($where)->order('id desc')->paginate(10);  //分页查询数据
        $data=array(
            'list'=>$list,
        );  
        return $data;
	}

	//发布论坛
	public function add($data){
		if(db('talk')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//回复论坛
	public function add1($data){
		if(db('talkreply')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
}
?>