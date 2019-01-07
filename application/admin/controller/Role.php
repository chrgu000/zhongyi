<?php
namespace app\admin\controller;
use app\admin\model\Role as RoleModel;
use app\admin\controller\Base;
class Role extends Base{
	//角色列表
	public function lst(){
		//权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		$privilege1=explode(',',$privilege['pri_id']);
		//断是否关键字查询
		$keywords=input('keywords');
		$model=new RoleModel;
		$data=$model->search($keywords); //调用模型中方法
		$page=$data['list']->render();   
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			'privilege'=>$privilege1,
			));
		return $this->fetch('role-list');
	}

	//添加角色
	public function add(){
		//查找到第一级权限
		$where['parent_id']=0;
		$list1=db('privilege')->where($where)->order('id asc')->select();
		//根据顶级权限查找子级权限
		$list2=db('privilege')->order('id asc')->select();
		$this->assign(array(
			'list1'=>$list1,
			'list2'=>$list2,
			'list3'=>$list2,
			));
		if(request()->isPost()){
			$data=[
                'rolename'=>input('rolename'),
                'content'=>input('content'),
                'pri_id'=>implode(',', input('post.pri_id/a')),
			];//获取表单数据
			$validate= \think\Loader::validate('Role');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{ 
			    $model=new RoleModel; 
			    $num=$model->add($data);   
			    if($num==1){
				    return $this->redirect('Role/add_success');
			    }else{
				    return $this->error('添加失败！');//调用模型中方法
			    }
			}
		}
		return $this->fetch('role-add');
	}

	//添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}

	//修改角色信息
	public function edit(){	
	    //获取原来数据	
		$id=input('id');
		$list=db('role')->find($id);
		//查找到第一级权限
		$where['parent_id']=0;
		$list1=db('privilege')->where($where)->order('id asc')->select();
		//根据顶级权限查找子级权限
		$list2=db('privilege')->order('id asc')->select();
		$this->assign(array(
			'list1'=>$list1,
			'list2'=>$list2,
			'list3'=>$list2,
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=[
			    'id'=>$id,
                'rolename'=>input('rolename'),
                'content'=>input('content'),
                'pri_id'=>implode(',', input('post.pri_id/a')),
			];//获取表单数据
			$validate= \think\Loader::validate('Role');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
				$model=new RoleModel();
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Role/edit_success');
			    }else{
				    return $this->error('修改失败！');
			    }
			}
		}
		return $this->fetch('role-edit');
	}

	//修改成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}

	//删除角色信息
	public function del(){
		$id=input('id');
		$model=new RoleModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('Role/del_success');
		}elseif($num==2){
			return $this->error('超级管理员角色不能删除！');
		}else{
			return $this->error('删除失败！');
		}
	}

	//删除成功
	public function del_success(){
		return $this->fetch('del-success');
	}

}
?>