<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class User extends Model{
	//用户列表
	public function search($keywords){
		if($keywords){
			$where['username']=['like','%'.$keywords.'%'];
		}else{
			$where=1;    //超级管理员不显示
		}
		$list=db('user')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('user')->where($where)->order('id desc')->count();  //记录总数
		$role=db('role')->select();
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
            'role'=>$role,
        );  
        return $data;
	}

	//用户详情
	public function detail($id){
		$list=db('user')->find($id);
		$data=array(
			'list'=>$list,
			);
		return $data;
	}

	//添加用户
	public function add($data){
		if(db('user')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//用户修改
	public function edit($data){
	    $save=db('user')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//用户删除
	public function del($id){
		$save=db('user')->delete($id);
		if($save!==false){
			return 1; //删除成功
		}else{
			return 2;  //删除失败
		}
	}

	//用户批量删除
	public function p_del($ids){
		//查询到所选id的用户
		$user=db('user')->where(array('id'=>array('in',$ids)))->delete();
		if($user){
			return 1;//删除成功
		}else{
		    return 2;//删除失败
		}
	}
}
?>