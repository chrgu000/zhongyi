<?php
namespace app\index\controller;
// use think\Controller;
use think\Loader;
use app\index\controller\Base;
use app\index\model\Body as BodyModel;
use think\db;
class Body extends Base{
	//体质测试页面
	public function add(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        if(request()->isPost()){
			$data=input('post.');    //获取表单数据 
			$data['name'] = session('username');
			$data['time'] = date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Body');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				$data['score'] = $data['facecolor'] + $data['eye'] + $data['mouthcolor'] + $data['face'] + $data['duzi'] + $data['etou'] + $data['upeye'] + $data['noze'] + $data['skin'] + $data['skincolor'] + $data['energy'] + $data['tired'] + $data['nervous'] + $data['speak'] + $data['kouku'] + $data['drink'] + $data['xiongmen'] + $data['body'] + $data['hand'] + $data['guomin'];
				$a = $data['score'];
				if($a<=20){
					$data['result'] = 6;
				}elseif($a>20&&$a<=30){
					$data['result'] = 7;
				}elseif($a>30&&$a<=40){
					$data['result'] = 8;
				}elseif($a>40&&$a<=50){
					$data['result'] = 9;
				}elseif($a>50&&$a<=60){
					$data['result'] = 10;
				}elseif($a>60&&$a<=70){
					$data['result'] = 11;
				}elseif($a>70&&$a<=80){
					$data['result'] = 12;
				}elseif($a>80&&$a<=90){
					$data['result'] = 13;
				}else{
					$data['result'] = 1;
				}
                $body=new BodyModel();  
			    $num=$body->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->success('提交测试内容成功！','Body/testresult');  //添加成功跳转页面
			    }else{
				    return $this->error('提交测试内容失败！');
			    }
			}
		}

		return $this->fetch('add');
	}

	public function testresult(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $list = db('bodytest')->where('name','=',$username)->order('id desc')->find();
        $result=$list['result'];
        $result1 = db('testresult')->where('id','=',$result)->find();
        $this->assign('result1',$result1);
        $this->assign('list',$list);

		return $this->fetch('result');
	}
}
?>