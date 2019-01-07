<?php
namespace app\admin\controller;
use app\admin\controller\Base;
class System extends Base{
	//轮播图列表
	public function lst(){
		$list=db('system')->order('id desc')->paginate(5);  //分页查询数据
		$counts=db('system')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('list');
	}

	//添加轮播图
	public function add(){
		if(request()->isPost()){
			$data['image']=input('image'); 
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data=[
					'user'=>input('user'),
					'time'=>date('Y-m-d H:i:s'),
					'statue'=>input('statue'),
					'image'=>'upimages/'.$info->getSaveName(),
				];
				// $data['image']='/upimages/'.$info->getSaveName();
				if(db('system')->insert($data)){
					return $this->redirect('System/add_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('add');
	}

	//轮播图添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}

	//编辑轮播图
	public function imgedit(){
		$id=input('id');
		$list = db('system')->find($id);
		$this->assign('id',$id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['image']=input('image'); 
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data=[
					'id'=>$id,
					'user'=>input('user'),
					'time'=>date('Y-m-d H:i:s'),
					'statue'=>input('statue'),
					'image'=>'/upimages/'.$info->getSaveName(),
				];
				if(db('system')->update($data)){
					return $this->redirect('System/imgedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('img-edit');
	}

	//编辑成功
	public function imgedit_success(){
		return $this->fetch('imgedit-success');
	}

	//删除轮播图
	public function imgdel(){
		$id=input('id');
		if(db('system')->delete($id)){
			return $this->redirect('System/imgdel_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//删除轮播图成功
	public function imgdel_success(){
		return $this->fetch('imgdel-success');
	}
}
?>