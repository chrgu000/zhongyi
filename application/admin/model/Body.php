<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Body extends Model{
	//体测结果列表
	public function search($keywords){
		if($keywords){
			$where['title']=['like','%'.$keywords.'%'];
		}else{
			$where=1; 
		}  //关键字查询
		$list=db('testresult')->where($where)->order('id asc')->select();  //分页查询数据
		$counts=db('testresult')->where($where)->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//用户体测结果列表
	public function search1($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1; 
		}  //关键字查询
		$list=db('bodytest')->where($where)->order('id asc')->select();  //分页查询数据
		$counts=db('bodytest')->where($where)->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//添加体测结果
	public function add($data){
		if(db('testresult')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//修改体测结果
	public function edit($data){
	    $save=db('testresult')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//删除体测结果
	public function del($id){
		if(db('testresult')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//删除用户体测结果
	public function del1($id){
		if(db('bodytest')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//批量删除体测结果
	public function p_del($ids){
		//删除所选id的结果
		$list_id=db('testresult')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
	//批量删除用户体测结果
	public function p_del1($ids){
		//删除所选id的结果
		$list_id=db('bodytest')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
}
?>