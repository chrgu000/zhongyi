<?php
namespace app\admin\controller;
use app\admin\model\Difficult as DifficultModel;
use app\admin\controller\Base;
class Difficult extends Base{
	//疑难杂症列表
	public function lst(){
		//断是否关键字查询
		$keywords=input('keywords');
		$difficult=new DifficultModel;   //实例化模型
		$data=$difficult->search($keywords); //调用模型中search方法
		$showlist=unlimitedForLervel($data['list']);  //无限极分类函数
		//$page=$showlist->render();  
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$showlist,
			//'page'=>$page,
			));
		return $this->fetch('lst');
	}

	//添加疑难杂症
	public function add(){
		$cate=db('difficult')->select();
		$showcate=unlimitedForLervel($cate);
        $this->assign('cate',$showcate);
		//添加疑难杂症
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$validate= \think\Loader::validate('Difficult');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $difficult=new DifficultModel();  
			    $num=$difficult->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Difficult/add_success');  //添加成功跳转页面
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

	//修改疑难杂症
	public function edit(){
	    //获取父级分类列表
		$cate=db('difficult')->select();
		$showcate=unlimitedForLervel($cate);
		//获取原来数据		
		$id=input('id');
		$list=db('difficult')->find($id);
		$this->assign(array(
			'cate'=>$showcate,
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Difficult');  //调用validate中的edit验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new DifficultModel();  //实例化模型
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Difficult/edit_success');   //修改成功跳转页面
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

	//删除疑难杂症
	public function del(){
		$id=input('id');
		$model=new DifficultModel();  //实例化模型
		$num=$model->del($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Difficult/del_success'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除疑难杂症
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new DifficultModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Difficult/del_success');
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
}
?>