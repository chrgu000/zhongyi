<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Feature extends Model{
	//特色描述列表
	public function search($keywords){
		$list=db('feature')->order('id asc')->paginate(5);  //分页查询数据
		$counts=db('feature')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//添加特色描述
	public function add($data){
		if(db('feature')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//修改特色描述
	public function edit($data){
	    $save=db('feature')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//删除特色描述
	public function del($id){
		if(db('feature')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//批量删除特色描述
	public function p_del($ids){
		//删除所选id的特色描述
		$list_id=db('feature')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}


	//添加特色具体内容
	public function add_feature($data){
		if(db('featuretext')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//特色内容列表
	public function search1($keywords){
		$list=db('featuretext')->order('id desc')->paginate(5);  //分页查询数据
		$counts=db('featuretext')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//修改特色内容
	public function edit1($data){
	    $save=db('featuretext')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//删除特色内容
	public function del1($id){
		if(db('featuretext')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//批量删除特色内容
	public function p_del1($ids){
		//删除所选id的特色描述
		$list_id=db('featuretext')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
}
?>