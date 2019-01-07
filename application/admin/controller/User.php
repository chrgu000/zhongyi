<?php
namespace app\admin\controller;
use app\admin\model\User as UserModel;
use app\admin\controller\Base;
use think\Loader;
use think\Controller;
class User extends Base{
	//用户列表
	public function lst(){
		//权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		$privilege1=explode(',',$privilege['pri_id']);
		//断是否关键字查询
		$keywords=input('keywords');
		$model=new UserModel;
		$data=$model->search($keywords); //调用模型中方法
		$page=$data['list']->render();


		$a = 23;
		$b = 21;
		$c = 15;
		$ceshi['a'] = $a;
		$ceshi['b'] = $b;
		$ceshi['c'] = $c;
		$d = array("23","21","15");
		sort($d);
		$length = count($d);
		for($i=0;$i<$length;$i++){
			echo $d[$i];
			echo "<br/>";
		}
		if('01'=='1'){
			echo "是的";
			echo "<br/>";
		}
		var_dump(array_sum($d));die;
		$time = time();
		$time2 = $time-24*3600;
		$time1 = date('Y-m-d H:i:s',$time);
		// var_dump(date('Y-m-d H:i:s',$time2));die; 
		$ip =  $_SERVER["REMOTE_ADDR"]; 
		// var_dump(natsort($d));die;




		//var_dump($data['list']);die;
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			'role'=>$data['role'],
			'privilege1'=>$privilege1,
			'keywords'=>$keywords,
			));
		return $this->fetch('list');
	}

	// //用户详情
	// public function detail(){
	// 	$id=input('id');
	// 	$model=new UserModel;
	// 	$data=$model->detail($id);
	// 	$this->assign(array(
	// 		'list'=>$data['list'],
	// 		));
	// 	return $this->fetch('user-detail');
	// }

	//添加用户
	public function add(){
		if(request()->isPost()){
			$data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),
                'mobile'=>input('mobile'),
                'time'=>date('Y-m-d H:i:s'),
			];//获取表单数据
			$validate= \think\Loader::validate('User');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				//判断用户名是否存在
				$isuser=db('user')->where('username','=',$data['username'])->find();
				if($isuser){
					return $this->error('该用户已存在！');
				}else{
	                $model=new UserModel();  
				    $num=$model->add($data);   //调用模型中方法
				    if($num==1){
					    return $this->redirect('User/add_success');
				    }else{
					    return $this->error('添加失败！');
				    }
			    }
			}
		}
		return $this->fetch('add');
	}

	//添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}

	//验证用户名是否存在
	public function usernamecheck($username){
		$info=db('user')->where('username','=',$username)->find();
		if($info){
			echo "该用户名已存在";
		}
		exit;
	}

	//修改用户信息
	public function edit(){	
	    //查询用户信息
	    $id=input('id');
	    $list=db('user')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=[
			    'id'=>input('id'),
                'username'=>input('username'),
                'mobile'=>input('mobile'),
			];//获取表单数据
			$validate= \think\Loader::validate('User');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
                $model=new UserModel();  
			    $num=$model->edit($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('User/edit_success');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('edit');
	}

	//修改成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}

	//删除用户信息
	public function del(){
		$id=input('id');
		$model=new UserModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('User/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除用户
	public function p_del(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
		    $ids=join(',',$id);
		    $model=new UserModel();
		    $num=$model->p_del($ids);
		    if($num==1){
			    return $this->redirect('User/del_success');
		    }else{
			    return $this->error('批量删除失败！');
		    }
		}
	}

	//删除成功
	public function del_success(){
		return $this->fetch('del-success');
	}
}
?>