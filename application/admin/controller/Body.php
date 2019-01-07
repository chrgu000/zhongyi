<?php
namespace app\admin\controller;
use app\admin\model\Body as BodyModel;
use app\admin\controller\Base;
class Body extends Base{
	//体测结果列表
	public function lst(){
		//断是否关键字查询
		$keywords=input('keywords');
		$body=new BodyModel;   //实例化模型
		$data=$body->search($keywords); //调用模型中search方法
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			));
		return $this->fetch('lst');
	}

	//用户体测列表
	public function userlst(){
		//断是否关键字查询
		$keywords=input('keywords');
		$body=new BodyModel;   //实例化模型
		$data=$body->search1($keywords); //调用模型中search方法

		$result = db('testresult')->select();

		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'result'=>$result,
			//'page'=>$page,
			));
		return $this->fetch('userlst');
	}

	//添加体测结果
	public function add(){
		//添加体测结果
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Body');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $body=new BodyModel();  
			    $num=$body->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Body/add_success');  //添加成功跳转页面
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('add');
	}

	//添加成功
	public function add_success(){
		return $this->fetch('add_success');
	}

	//修改体测结果
	public function edit(){
		//获取原来数据		
		$id=input('id');
		$list=db('testresult')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Body');  //调用validate中的edit验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new BodyModel();  //实例化模型
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Body/edit_success');   //修改成功跳转页面
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('edit');
	}

	//修改成功
	public function edit_success(){
		return $this->fetch('edit_success');
	}

	//删除体测结果
	public function del(){
		$id=input('id');
		$model=new BodyModel();  //实例化模型
		$num=$model->del($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Body/del_success'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除用户体测结果
	public function del1(){
		$id=input('id');
		$model=new BodyModel();  //实例化模型
		$num=$model->del1($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Body/del_success1'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除体测结果
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new BodyModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Body/del_success');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要批量删除的数据！');
		}   
	}
	//批量删除用户体测结果
	public function p_del1(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new BodyModel();
			$num=$model->p_del1($ids);
			if($num==1){
				return $this->redirect('Body/del_success1');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要批量删除的数据！');
		}   
	}

	//删除成功
	public function del_success(){
		return $this->fetch('del_success');
	}
	//删除成功
	public function del_success1(){
		return $this->fetch('del_success1');
	}
}
?>