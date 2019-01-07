<?php
namespace app\admin\controller;
use app\admin\model\Photo as PhotoModel;
use app\admin\controller\Base;
class Photo extends Base{
	//历史名医列表
	public function lst_photo(){
		//查询此用户的权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		//断是否关键字查询
		$keywords=input('keywords');
		$photo=new PhotoModel;   //实例化模型
		$data=$photo->search($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			'privilege'=>$privilege,
			'page'=>$page,
			));
		return $this->fetch('lst_photo');
	}
	//中药古籍列表
	public function lst_book(){
		//查询此用户的权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		//断是否关键字查询
		$keywords=input('keywords');
		$photo=new PhotoModel;   //实例化模型
		$data=$photo->search1($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			'privilege'=>$privilege,
			'page'=>$page,
			));
		return $this->fetch('lst_book');
	}
	//药材图谱列表
	public function lst_medicine(){
		//查询此用户的权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		//判断是否关键字查询
		$keywords=input('keywords');
		$photo=new PhotoModel;   //实例化模型
		$data=$photo->search2($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			'privilege'=>$privilege,
			'page'=>$page,
			));
		return $this->fetch('lst_medicine');
	}
	//穴位图谱列表
	public function lst_xuewei(){
		//查询此用户的权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		//断是否关键字查询
		$keywords=input('keywords');
		$photo=new PhotoModel;   //实例化模型
		$data=$photo->search3($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			'privilege'=>$privilege,
			'page'=>$page,
			));
		return $this->fetch('lst_xuewei');
	}

	//添加历史名医内容
	public function add_photo(){
		//添加历史名医内容
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			//上传名医图片
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
				$data['image']='/uploads/'.$info->getSaveName();
			}
			$validate= \think\Loader::validate('Photo');   //调用validate中的add验证方法
			if(!$validate->scene('add_doctor')->check($data)){
				return $this->error($validate->getError());
			}else{
                $photo=new PhotoModel();  
			    $num=$photo->add_doctor($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Photo/add_success');  //添加成功跳转页面
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('add_photo');
	}
	//添加中医古籍内容
	public function add_book(){
		//添加中医古籍内容
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			//上传中医古籍图片
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
				$data['image']='/uploads/'.$info->getSaveName();
			}
			$validate= \think\Loader::validate('Photo');   //调用validate中的add验证方法
			if(!$validate->scene('add_book')->check($data)){
				return $this->error($validate->getError());
			}else{
                $photo=new PhotoModel();  
			    $num=$photo->add_book($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Photo/add_success1');  //添加成功跳转页面
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('add_book');
	}
	//添加药材图谱内容
	public function add_medicine(){
		//添加药材图谱内容
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Photo');   //调用validate中的add验证方法
			if(!$validate->scene('add_medicine')->check($data)){
				return $this->error($validate->getError());
			}else{
                $photo=new PhotoModel();  
			    $num=$photo->add_medicine($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Photo/add_success2');  //添加成功跳转页面
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('add_medicine');
	}
	//添加穴位图谱内容
	public function add_xuewei(){
		//添加穴位图谱内容
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			//上传穴位图谱图片
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
				$data['image']='/uploads/'.$info->getSaveName();
			}
			$validate= \think\Loader::validate('Photo');   //调用validate中的add验证方法
			if(!$validate->scene('add_xuewei')->check($data)){
				return $this->error($validate->getError());
			}else{
                $photo=new PhotoModel();  
			    $num=$photo->add_xuewei($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Photo/add_success3');  //添加成功跳转页面
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('add_xuewei');
	}

	//历史名医添加成功
	public function add_success(){
		return $this->fetch('add_success');
	}
	//中医古籍添加成功
	public function add_success1(){
		return $this->fetch('add_success1');
	}
	//药材图谱添加成功
	public function add_success2(){
		return $this->fetch('add_success2');
	}
	//穴位图谱添加成功
	public function add_success3(){
		return $this->fetch('add_success3');
	}

	//修改历史名医
	public function edit_doctor(){
		//获取原来数据		
		$id=input('id');
		$list=db('doctor')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Photo');  //调用validate中的edit验证方法
			if(!$validate->scene('edit_doctor')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new PhotoModel();  //实例化模型
			    $num=$model->edit_doctor($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Photo/edit_success');   //修改成功跳转页面
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('edit_doctor');
	}
	//修改中药古籍
	public function edit_book(){
		//获取原来数据		
		$id=input('id');
		$list=db('book')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Photo');  //调用validate中的edit验证方法
			if(!$validate->scene('edit_book')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new PhotoModel();  //实例化模型
			    $num=$model->edit_book($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Photo/edit_success1');   //修改成功跳转页面
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('edit_book');
	}
	//修改药材图谱
	public function edit_medicine(){
		//获取原来数据		
		$id=input('id');
		$list=db('medicine')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Photo');  //调用validate中的edit验证方法
			if(!$validate->scene('edit_medicine')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new PhotoModel();  //实例化模型
			    $num=$model->edit_medicine($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Photo/edit_success2');   //修改成功跳转页面
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('edit_medicine');
	}
	//修改穴位图谱
	public function edit_xuewei(){
		//获取原来数据		
		$id=input('id');
		$list=db('xuewei')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Photo');  //调用validate中的edit验证方法
			if(!$validate->scene('edit_xuewei')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new PhotoModel();  //实例化模型
			    $num=$model->edit_xuewei($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Photo/edit_success3');   //修改成功跳转页面
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('edit_xuewei');
	}

	//历史名医修改成功
	public function edit_success(){
		return $this->fetch('edit_success');
	}
	//中国古籍修改成功
	public function edit_success1(){
		return $this->fetch('edit_success1');
	}
	//药材图谱修改成功
	public function edit_success2(){
		return $this->fetch('edit_success2');
	}
	//穴位图谱修改成功
	public function edit_success3(){
		return $this->fetch('edit_success3');
	}

	//删除历史名医
	public function del_doctor(){
		$id=input('id');
		$model=new PhotoModel();  //实例化模型
		$num=$model->del_doctor($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Photo/del_success'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除中国古籍
	public function del_book(){
		$id=input('id');
		$model=new PhotoModel();  //实例化模型
		$num=$model->del_book($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Photo/del_success1'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除药材图谱
	public function del_medicine(){
		$id=input('id');
		$model=new PhotoModel();  //实例化模型
		$num=$model->del_medicine($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Photo/del_success2'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除穴位图谱
	public function del_xuewei(){
		$id=input('id');
		$model=new PhotoModel();  //实例化模型
		$num=$model->del_xuewei($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Photo/del_success3'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除历史名医
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new PhotoModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Photo/del_success');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}
	//批量删除中国古籍
	public function p_del1(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new PhotoModel();
			$num=$model->p_del1($ids);
			if($num==1){
				return $this->redirect('Photo/del_success1');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}
	//批量删除药材图谱
	public function p_del2(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new PhotoModel();
			$num=$model->p_del2($ids);
			if($num==1){
				return $this->redirect('Photo/del_success2');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}
	//批量删除穴位图谱
	public function p_del3(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new PhotoModel();
			$num=$model->p_del3($ids);
			if($num==1){
				return $this->redirect('Photo/del_success3');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}

	//历史名医删除成功
	public function del_success(){
		return $this->fetch('del_success');
	}
	//中药古籍删除成功
	public function del_success1(){
		return $this->fetch('del_success1');
	}
	//药材图谱删除成功
	public function del_success2(){
		return $this->fetch('del_success2');
	}
	//穴位图谱删除成功
	public function del_success3(){
		return $this->fetch('del_success3');
	}

	//修改历史名医图片
	public function doctor_edit(){
		$id=input('id');
		$this->assign('id',$id);
		if(request()->isPost()){
			$data1['image']=input('image');
			$validate= \think\Loader::validate('Photo');
			if(!$validate->scene('doctor_edit')->check($data1)){
				return $this->error($validate->getError());
			}else{
				if(isset($_FILES['image']['tmp_name'])){
					$file=request()->file('image');
					$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
					$data['image']='/uploads/'.$info->getSaveName();
					$data['id']=input('id');
				}
				$save=db('doctor')->update($data);
				if($save!==false){
					return $this->redirect('Photo/edit_doctor',array('id'=>$data['id']));
				}else{
					return $this->error('上传图片失败');
				}
		    }
		}
		return $this->fetch('doctor_edit');
	}
	//修改中医古籍图片
	public function book_edit(){
		$id=input('id');
		$this->assign('id',$id);
		if(request()->isPost()){
			$data1['image']=input('image');
			$validate= \think\Loader::validate('Photo');
			if(!$validate->scene('book_edit')->check($data1)){
				return $this->error($validate->getError());
			}else{
			if(isset($_FILES['image']['tmp_name'])){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
				$data['image']='/uploads/'.$info->getSaveName();
				$data['id']=input('id');
			}
			$save=db('book')->update($data);
			if($save!==false){
				return $this->redirect('Photo/edit_book',array('id'=>$data['id']));
			}else{
				return $this->error('上传图片失败');
			}
		    }
		}
		return $this->fetch('book_edit');
	}
	//修改穴位图片
	public function xuewei_edit(){
		$id=input('id');
		$this->assign('id',$id);
		if(request()->isPost()){
			$data1['image']=input('image');
			$validate= \think\Loader::validate('Photo');
			if(!$validate->scene('xuewei_edit')->check($data1)){
				return $this->error($validate->getError());
			}else{
			if(isset($_FILES['image']['tmp_name'])){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/uploads');
				$data['image']='/uploads/'.$info->getSaveName();
				$data['id']=input('id');
			}
			$save=db('xuewei')->update($data);
			if($save!==false){
				return $this->redirect('Photo/edit_xuewei',array('id'=>$data['id']));
			}else{
				return $this->error('上传图片失败');
			}
		    }
		}
		return $this->fetch('xuewei_edit');
	}
	
	//历史名医图片删除
	public function doctor_del(){
		$id=input('id');
		$data['id']=$id;
		$data['image']='';
		$save=db('doctor')->update($data);
		if($save!==false){
			return $this->redirect('Photo/edit_doctor',array('id'=>$data['id']));
		}else{
			return $this->error('删除失败');
		}
	}
	//中国古籍图片删除
	public function book_del(){
		$id=input('id');
		$data['id']=$id;
		$data['image']='';
		$save=db('book')->update($data);
		if($save!==false){
			return $this->redirect('Photo/edit_book',array('id'=>$data['id']));
		}else{
			return $this->error('删除失败');
		}
	}
	//穴位图片删除
	public function xuewei_del(){
		$id=input('id');
		$data['id']=$id;
		$data['image']='';
		$save=db('xuewei')->update($data);
		if($save!==false){
			return $this->redirect('Photo/edit_xuewei',array('id'=>$data['id']));
		}else{
			return $this->error('删除失败');
		}
	}
}
?>