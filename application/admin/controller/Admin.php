<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use app\admin\controller\Base;
use think\Loader;
use think\Controller;
class Admin extends Base{
	//管理员列表
	public function lst(){
		//权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		$privilege1=explode(',',$privilege['pri_id']);
		//断是否关键字查询
		$keywords=input('keywords');
		$admin=new AdminModel;
		$data=$admin->search($keywords); //调用模型中方法
		$page=$data['list']->render();   
		//var_dump($data['list']);die;
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			'role'=>$data['role'],
			'privilege1'=>$privilege1,
			'keywords'=>$keywords,
			));
		return $this->fetch('admin-list');
	}

	//添加管理员
	public function add(){
		//查询到角色类别
		$where['id']=array('neq',1);
		$role=db('role')->where($where)->select();
		$this->assign('role',$role);
		if(request()->isPost()){
			//$data=input('post.');
			//$data['time']=time(); 
			$data=[
                'adminname'=>input('adminname'),
                'adminpassword'=>md5(input('adminpassword')),
                'role'=>input('role'),
                'adminphone'=>input('adminphone'),
                'time'=>time(),
                'upname'=>session('adminname'),
			];//获取表单数据
			$validate= \think\Loader::validate('Admin');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $admin=new AdminModel();  
			    $num=$admin->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Admin/add_success');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('admin-add');
	}

	//验证管理员工号是否存在
	public function check($adminname){
		$info=db('admin')->where('adminname','=',$adminname)->find();
		if($info){
			echo "该管理员已存在";
		}else{
			echo "该用户名合法";
		}
		exit;
	}

	//添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}

	//修改管理员信息
	public function edit(){	
	    //查询到角色类别
		$where['id']=array('neq',1);
		$role=db('role')->where($where)->select();
		//获取原来数据	
		$id=input('id');
		$admin=db('admin')->find($id);
		$this->assign(array(
			'role'=>$role,
			'admin'=>$admin,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$model=new AdminModel();
			$num=$model->edit($data);  //调用model中的方法
			if($num==1){
				return $this->redirect('Admin/edit_success');
			}else{
				return $this->error('修改失败！');
			}
		}
		return $this->fetch('admin-edit');
	}

	//修改成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}

	//删除管理员信息
	public function del(){
		$id=input('id');
		$admin=new AdminModel();
		$num=$admin->del($id);
		if($num==1){
			return $this->redirect('Admin/del_success');
		}elseif($num==2){
			return $this->error('超级管理员不能删除！');
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除管理员
	public function p_del(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
		    $ids=join(',',$id);
		    $admin=new AdminModel();
		    $num=$admin->p_del($ids);
		    if($num==1){
			    return $this->redirect('Admin/del_success');
		    }else{
			    return $this->error('批量删除失败！');
		    }
		}
	}

	//删除成功
	public function del_success(){
		return $this->fetch('del-success');
	}

	//导出用户数据表
	// public function export(){
	// 	$map['id']=array('neq',4);
	// 	$keywords=input('keywords');
	// 	if($keywords){
	// 	    $map['adminid']=['like','%'.$keywords.'%'];
	//     }                                       //判断查询条件
	// 	$data=db('admin')->order('id desc')->where($map)->select();//数据库中查询数据
	//     $path = dirname(__FILE__); //找到当前脚本所在路径
 //        Loader::import('PHPExcel.Classes.PHPExcel');
 //        Loader::import('PHPExcel.Classes.PHPExcel.IOFactory.PHPExcel_IOFactory'); //引入文件
 //        $PHPExcel = new \PHPExcel();
 //        $PHPSheet = $PHPExcel->getActiveSheet();
 //        $PHPSheet->setTitle("demo"); //给当前活动sheet设置名称
 //        $PHPSheet->setCellValue("A1","工号")
 //                 ->setCellValue("B1","姓名")
 //                 ->setCellValue("C1","角色")
 //                 ->setCellValue("D1","手机号码")
 //                 ->setCellValue("E1","邮箱");//表头
 //        $num=2; //循环起始行数
 //        foreach($data as $key=>$v){
 //        	$rolelst=db('role')->select();
 //        	foreach($rolelst as $key=>$v1){
 //        		if($v['role']==$v1['id']){ $role=$v1['rolename']; }
 //        	}
 //        	$PHPSheet->setCellValue("A".$num," ".$v['adminid'])
 //                     ->setCellValue("B".$num,$v['adminname'])
 //                     ->setCellValue("C".$num,$role)
 //                     ->setCellValue("D".$num," ".$v['adminphone'])
 //                     ->setCellValue("E".$num," ".$v['adminmail']);
 //            $num++;
 //        }//表格数据
 //        $PHPWriter = \PHPExcel_IOFactory::createWriter($PHPExcel,"Excel2007");
 //        header('Content-Disposition: attachment;filename="管理员数据.xlsx"');  //Excel表名
 //        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 //        $PHPWriter->save("php://output"); //表示在$path路径下面生成demo.xlsx文件	
 //    }
}
?>