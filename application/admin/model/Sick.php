<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Sick extends Model{
	//疾病列表
	public function search($keywords){
		if($keywords){
			$where['typename']=['like','%'.$keywords.'%'];
		}else{
			$where=1; 
		}  //关键字查询
		$list=db('sick')->where($where)->order('id asc')->select();  //分页查询数据
		$counts=db('sick')->where($where)->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//添加疾病
	public function add($data){
		if(db('sick')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//修改疾病
	public function edit($data){
	    $save=db('sick')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//删除疾病
	public function del($id){
		if(db('sick')->where(array('id'=>$id))->whereor(array('parent_id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//批量删除疾病
	public function p_del($ids){
		//删除以该id为父级id的疾病
		$list_pid=db('sick')->where(array('parent_id'=>array('in',$ids)))->delete();
		//删除所选id的疾病
		$list_id=db('sick')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
}
?>