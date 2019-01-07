<?php
namespace app\admin\controller;
use app\admin\model\Feature as FeatureModel;
use app\admin\controller\Base;
class Feature extends Base{
	//特色描述内容列表
	public function lst(){
		//查询此用户的权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		//断是否关键字查询
		$keywords=input('keywords');
		$feature=new FeatureModel;   //实例化模型
		$data=$feature->search($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			'privilege'=>$privilege,
			'page'=>$page,
			));
		return $this->fetch('lst');
	}

	//添加特色描述内容
	public function add(){
		//添加特色描述内容
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Feature');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $feature=new FeatureModel();  
			    $num=$feature->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Feature/add_success');  //添加成功跳转页面
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

	//修改特色描述
	public function edit(){
		//获取原来数据		
		$id=input('id');
		$list=db('feature')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Feature');  //调用validate中的edit验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new FeatureModel();  //实例化模型
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Feature/edit_success');   //修改成功跳转页面
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

	//删除特色描述
	public function del(){
		$id=input('id');
		$model=new FeatureModel();  //实例化模型
		$num=$model->del($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Feature/del_success'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除特色描述
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new FeatureModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Feature/del_success');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}

	//删除成功
	public function del_success(){
		return $this->fetch('del_success');
	}


	//添加特色具体内容
	public function add_feature(){
		//添加特色描述内容
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			//上传特色描述图片
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
				$data['image']='/uploads/'.$info->getSaveName();
			}
			$validate= \think\Loader::validate('Feature');   //调用validate中的add验证方法
			if(!$validate->scene('add_feature')->check($data)){
				return $this->error($validate->getError());
			}else{
                $feature=new FeatureModel();  
			    $num=$feature->add_feature($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Feature/add_success1');  //添加成功跳转页面
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('add_feature');
	}
	//添加成功
	public function add_success1(){
		return $this->fetch('add_success1');
	}

	//特色内容列表
	public function featurelst(){
		//查询此用户的权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		//断是否关键字查询
		$keywords=input('keywords');
		$feature=new FeatureModel;   //实例化模型
		$data=$feature->search1($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			'privilege'=>$privilege,
			'page'=>$page,
			));
		return $this->fetch('featurelst');
	}
	//修改特色描述
	public function edit1(){
		//获取原来数据		
		$id=input('id');
		$list=db('featuretext')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Feature');  //调用validate中的edit验证方法
			if(!$validate->scene('edit1')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new FeatureModel();  //实例化模型
			    $num=$model->edit1($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Feature/edit_success1');   //修改成功跳转页面
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('feature_edit');
	}
	//修改特色图片
	public function image_edit(){
		$id=input('id');
		$this->assign('id',$id);
		if(request()->isPost()){
			$data['image']=input('image');
			$validate= \think\Loader::validate('Feature');
			if(!$validate->scene('feature_edit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(isset($_FILES['image']['tmp_name'])){
					$file=request()->file('image');
					$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
					$data['image']='/uploads/'.$info->getSaveName();
					$data['id']=input('id');
				}
			$save=db('featuretext')->update($data);
			if($save!==false){
				return $this->redirect('Feature/edit1',array('id'=>$data['id']));
			}else{
				return $this->error('上传图片失败');
			}
		    }
		}
		return $this->fetch('image_edit');
	}
	//特色图片删除
	public function image_del(){
		$id=input('id');
		$data['id']=$id;
		$data['image']='';
		$save=db('feature')->update($data);
		if($save!==false){
			return $this->redirect('Feature/edit1',array('id'=>$data['id']));
		}else{
			return $this->error('删除失败');
		}
	}
	//修改成功
	public function edit_success1(){
		return $this->fetch('edit_success1');
	}

	//删除特色内容
	public function del1(){
		$id=input('id');
		$model=new FeatureModel();  //实例化模型
		$num=$model->del1($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Feature/del_success1'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除特色内容
	public function p_del1(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new FeatureModel();
			$num=$model->p_del1($ids);
			if($num==1){
				return $this->redirect('Feature/del_success1');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}

	//删除成功
	public function del_success1(){
		return $this->fetch('del_success1');
	}
}
?>