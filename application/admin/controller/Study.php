<?php
namespace app\admin\controller;
use app\admin\model\Study as StudyModel;
use app\admin\controller\Base;
use think\Loader;
use think\Controller;
class Study extends Base{
	//上传学习文件
	public function add_file(){
        if(request()->isPost()){
        	//获取表单提交的数据
			$data=[
				'statue'=>input('statue'), 
				'user'=>input('user'),
                'time'=>date('Y-m-d H:i:s'),   //插入当前时间
			];
        // 将上传的文件移动到框架应用根目录/public/upfiles/ 目录下     //upfiles为新建目录
        	$file=request()->file('name');
			$info=$file->move(ROOT_PATH . 'public' . DS .'upfiles'); 
        //如果不清楚文件上传的具体键名，可以直接打印$info来查看    
        //获取文件（文件名），$info->getFilename()  
        //获取文件（日期/文件名），$info->getSaveName() 
			//获取带日期的乱码的文件
			$data['url']=$info->getSaveName(); 

			$infos = $info->getInfo();    //直接可获取文件原名
            // 源文件名
            $data['name'] = $infos['name'];  //文件名传入数据表

	        $study=new StudyModel();  
		    $num=$study->add_file($data);   //调用模型中方法
		    if($num==1){
			    return $this->redirect('Study/add_success');
		    }else{
			    return $this->error('文件上传失败！');
		    }  
    	}
        return $this->fetch('add_file');
	}
	//上传学习视频
	public function add_video(){
        if(request()->isPost()){
        	//获取表单提交的数据
			$data=[
				'statue'=>input('statue'), 
				'user'=>input('user'),
                'time'=>date('Y-m-d H:i:s'),   //插入当前时间
			];
        // 将上传的文件移动到框架应用根目录/public/upvideos/ 目录下     //upvideos为新建目录
        	$video=request()->file('name');
			$info=$video->move(ROOT_PATH . 'public' . DS .'upvideos'); 
        //如果不清楚文件上传的具体键名，可以直接打印$info来查看    
        //获取文件（文件名），$info->getFilename()  
        //获取文件（日期/文件名），$info->getSaveName() 
			//获取带日期的乱码的文件
			$data['url']=$info->getSaveName(); 

			$infos = $info->getInfo();    //直接可获取文件原名
            // 源文件名
            $data['name'] = $infos['name'];  //文件名传入数据表

	        $study=new StudyModel();  
		    $num=$study->add_video($data);   //调用模型中方法
		    if($num==1){
			    return $this->redirect('Study/add_success1');
		    }else{
			    return $this->error('视频上传失败！');
		    }  
    	}
        return $this->fetch('add_video');
	}

	//文件上传成功
	public function add_success(){
		return $this->fetch('add_success');
	}
	//视频上传成功
	public function add_success1(){
		return $this->fetch('add_success1');
	}

	//文件列表
	public function lst_file(){
		//判断是否关键字查询
		$keywords=input('keywords');
		$study=new StudyModel;   //实例化模型
		$data=$study->search($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			));
		return $this->fetch('lst_file');
	}
	//视频列表
	public function lst_video(){
		//判断是否关键字查询
		$keywords=input('keywords');
		$study=new StudyModel;   //实例化模型
		$data=$study->search1($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			));
		return $this->fetch('lst_video');
	}
	//小百科列表
	public function lst_article(){
		//查询此用户的权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		//判断是否关键字查询
		$keywords=input('keywords');
		$study=new StudyModel;   //实例化模型
		$data=$study->search2($keywords); //调用模型中search方法
		$page=$data['list']->render();
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			//'page'=>$page,
			'privilege'=>$privilege,
			'page'=>$page,
			));
		return $this->fetch('lst_article');
	}

	//添加小百科
	public function add_article(){
		//添加小百科
		if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('adminname');
			$data['time'] = date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Study');   //调用validate中的add验证方法
			if(!$validate->scene('add_article')->check($data)){
				return $this->error($validate->getError());
			}else{
                $study=new StudyModel();  
			    $num=$study->add_article($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Study/add_success2');  //添加成功跳转页面
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('add_article');
	}
	//小百科添加成功
	public function add_success2(){
		return $this->fetch('add_success2');
	}
	//修改小百科
	public function edit_article(){
		//获取原来数据		
		$id=input('id');
		$list=db('article')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$validate= \think\Loader::validate('Study');  //调用validate中的edit验证方法
			if(!$validate->scene('edit_article')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new StudyModel();  //实例化模型
			    $num=$model->edit_article($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Study/edit_success');   //修改成功跳转页面
			    }else{
				    return $this->error('修改失败！');
			    }
			}
			
		}
		return $this->fetch('edit_article');
	}
	//小百科修改成功
	public function edit_success(){
		return $this->fetch('edit_success');
	}
	//删除小百科
	public function del_article(){
		$id=input('id');
		$model=new StudyModel();  //实例化模型
		$num=$model->del_article($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Study/del_success2'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}
	//小百科删除成功
	public function del_success2(){
		return $this->fetch('del_success2');
	}
	//批量删除小百科
	public function p_del2(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new StudyModel();
			$num=$model->p_del2($ids);
			if($num==1){
				return $this->redirect('Study/del_success2');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}

	//删除文件
	public function del_file(){
		$id=input('id');
		$model=new StudyModel();  //实例化模型
		$num=$model->del_file($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Study/del_success'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除视频
	public function del_video(){
		$id=input('id');
		$model=new StudyModel();  //实例化模型
		$num=$model->del_video($id);  //调用模型中方法
		if($num==1){
			return $this->redirect('Study/del_success1'); //修改成功跳转页面
		}else{
			return $this->error('删除失败！');
		}
	}

	//文件删除成功
	public function del_success(){
		return $this->fetch('del_success');
	}
	//视频删除成功
	public function del_success1(){
		return $this->fetch('del_success1');
	}

	//批量删除文件
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new StudyModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Study/del_success');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}
	//批量删除视频
	public function p_del1(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new StudyModel();
			$num=$model->p_del1($ids);
			if($num==1){
				return $this->redirect('Study/del_success1');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要删除的数据！');
		}   
	}

	//文件下载功能
	public function download(){  
		$id = input('id');
		$file = db('file')->find($id);  
	    $file_name = $file['url'];     //下载文件的路径名      
	    $file_dir = ROOT_PATH . 'public' . DS .'upfiles' . "/";   //下载文件存放目录    
	    echo $file_dir . $file_name;  
	    //检查文件是否存在      
	    if (! file_exists ( $file_dir . $file_name )) {      
	        echo "文件找不到";      
	        exit ();      
	    } else {      
	        //打开文件      
	        $file1 = fopen ( $file_dir . $file_name, "r" );      
	        //输入文件标签       
	        Header ( "Content-type: application/octet-stream" );      
	        Header ( "Accept-Ranges: bytes" );      
	        Header ( "Accept-Length: " . filesize ( $file_dir . $file_name ) );      
	        Header ( "Content-Disposition: attachment; filename=" . $file_name );
	        ob_clean();    //重点！！！
	        flush();       //重点！！！！  可清除文件中多余的路径名以及解决乱码的问题；
	        //输出文件内容       
	        //读取文件内容并直接输出到浏览器      
	        echo fread ( $file1, filesize ( $file_dir . $file_name ) );      
	        fclose ( $file1 );      
	        exit ();      
	    }       
	}

	//视频详情
	public function detail(){
		$id=input('id');
		$model=new StudyModel;
		$data=$model->detail($id);
		$this->assign(array(
			'list'=>$data['list'],
			));
		return $this->fetch('detail');
	}
}
?>