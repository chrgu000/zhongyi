<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Role extends Model{
	//角色列表
	public function search($keywords){
		if($keywords){
			if(session('id')!=4){				
				$where['rolename']=['like','%'.$keywords.'%'];
				$where['id']=array('neq',1);
			}else{
				$where['rolename']=['like','%'.$keywords.'%'];
			}			
		}else{
			if(session('id')!=4){
				$where['id']=array('neq',1);
			}else{
				$where=1;
			}
		}  //关键字查询
		$list=db('role')->where($where)->order('id asc')->paginate(12,false,['query'=>['keywords'=>$keywords]]);  //分页查询数据
		$counts=db('role')->where($where)->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//添加角色
	public function add($data){
		if(db('role')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//修改角色
	public function edit($data){
	    $save=db('role')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//删除角色
	public function del($id){
		if($id!=1){
			if(db('role')->delete($id)){
				return 1; //删除成功
			}else{
				return 3;  //删除失败
			}
		}else{
			return 2;   //超级管理员不能删除
		}
	}


}
?>