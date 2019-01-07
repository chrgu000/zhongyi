<?php
namespace app\index\controller;
// use think\Controller;
use think\Loader;
use app\index\controller\Base;
use app\index\model\Talk as TalkModel;
use think\db;
class Talk extends Base{
	
	//论坛列表页面
	public function lst(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $keywords=input('keywords');
		$model=new TalkModel;
		$data=$model->search($keywords); //调用模型中方法
		$page=$data['list']->render(); 

        // $list = db('talk')->paginate(10);   //10条一页
        $this->assign('list',$data['list']);
        $this->assign('page',$page);   //分页显示

        return $this->fetch('lst');
	}

	//论坛详情页面
	public function detail(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $id=input('id');
        $this->assign('id',$id);
        $list=db('talk')->find($id);   //查询论坛详情
        $this->assign('list',$list);
        $talk_id = $list['id'];
        $list1 = db('talkreply')->where('talkid','=',$talk_id)->select();
        $this->assign('list1',$list1);
        return $this->fetch('detail');

	}

	//发布论坛页面
	public function add(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);
        //发布消息
        if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('username');
			$data['time'] = date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Talk');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $talk=new TalkModel();  
			    $num=$talk->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->success('发布成功','Talk/lst');  //添加成功跳转页面
			    }else{
				    return $this->error('发布失败！');
			    }
			}
		}
        return $this->fetch('add');
	}

	//论坛回复
	public function add1(){
		$id1 = input('talkid');
		if(request()->isPost()){
			
			// var_dump($id1);die;
			$data['talkid'] = input('talkid');
			$data=input('post.');    //获取表单数据 
			$data['user'] = session('username');
			$data['time'] = date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Talk');   //调用validate中的add验证方法
			if(!$validate->scene('add1')->check($data)){
				return $this->error($validate->getError());
			}else{
                $talk=new TalkModel();  
			    $num=$talk->add1($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Talk/detail',array('id'=>$id1));  //添加成功跳转页面
			    }else{
				    return $this->error('回复失败！');
			    }
			}
		}
	}
}
?>