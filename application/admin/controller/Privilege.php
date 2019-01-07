<?php
namespace app\admin\controller;
use app\admin\model\Privilege as PrivilegeModel;
use app\admin\controller\Base;
class Privilege extends Base{
	//权限列表
	public function lst(){
		//判断是否关键字查询
		$keywords=input('keywords');
		$privilege=new PrivilegeModel;
		$data=$privilege->search($keywords); //调用模型中方法
		$showlist=unlimitedForLervel($data['list']);   //调用无限极分类函数
		//$page=$showlist->render();  
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$showlist,
			//'page'=>$page,
			));
		return $this->fetch('privilege-list');
	}

	//添加权限
	public function add(){
		$cate=db('privilege')->select();
		$showcate=unlimitedForLervel($cate);
        $this->assign('cate',$showcate);
		//添加权限
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$validate= \think\Loader::validate('Privilege');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $privilege=new PrivilegeModel();  
			    $num=$privilege->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Privilege/add_success');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('privilege-add');
	}

	//添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}

	//修改权限
	public function edit(){
	    //获取父级权限列表
		$cate=db('privilege')->select();
		$showcate=unlimitedForLervel($cate);
		//获取原来数据		
		$id=input('id');
		$list=db('privilege')->find($id);
		$this->assign(array(
			'cate'=>$showcate,
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Privilege');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new PrivilegeModel();
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Privilege/edit_success');
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('privilege-edit');
	}

	//修改成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}

	//删除权限
	public function del(){
		$id=input('id');
		$model=new PrivilegeModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('Privilege/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除权限
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new PrivilegeModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Privilege/del_success');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要批量删除的数据！');
		}
	}

	//删除成功
	public function del_success(){
		return $this->fetch('del-success');
	}

}
?>