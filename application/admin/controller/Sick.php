<?php
namespace app\admin\controller;
use app\admin\model\Sick as SickModel;
use app\admin\controller\Base;
class Sick extends Base{
	//疾病列表
	public function lst(){
		//断是否关键字查询
		$keywords=input('keywords');   //获取输入的关键字
		$sick=new SickModel;  //实例化模型
		$data=$sick->search($keywords); //调用模型中方法
		$showlist=unlimitedForLervel($data['list']);  //无限极分类函数
		//$page=$showlist->render();  
		$this->assign(array(
			'counts'=>$data['counts'],    //往模板页面上输出内容
			'list'=>$showlist,
			//'page'=>$page,
			));
		return $this->fetch('lst');   //渲染页面
	}

	//添加疾病
	public function add(){
		$cate=db('sick')->select();
		$showcate=unlimitedForLervel($cate);
        $this->assign('cate',$showcate);
		//添加疾病
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$validate= \think\Loader::validate('Sick');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $sick=new SickModel();    //实例化模型
			    $num=$sick->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Sick/add_success');
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

	//修改疾病
	public function edit(){
	    //获取父上一级分类列表
		$cate=db('sick')->select();
		$showcate=unlimitedForLervel($cate);
		//获取原来数据		
		$id=input('id');
		$list=db('sick')->find($id);
		$this->assign(array(
			'cate'=>$showcate,
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Sick');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new SickModel();
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Sick/edit_success');
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

	//删除疾病
	public function del(){
		$id=input('id');
		$model=new SickModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('Sick/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除疾病
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new SickModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Sick/del_success');
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