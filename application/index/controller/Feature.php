<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
use think\Controller;
use think\db;
class Feature extends Controller{
	//特色页面
	public function lst(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        //读取特色总描述   只读取一条
        $text=db('feature')->where('statue','=',"是")->order('id desc')->find();
        // 读取二级分类
        $feature = db('featuretext')->where('statue','=',"是")->order('id desc')->select();
        $this->assign('text',$text);
        $this->assign('feature',$feature);

		return $this->fetch('list');
	}

    //特色详情
    public function detail(){
        //读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $id=input('id');   //获取传递的id
        $list = db('featuretext')->find($id);   //读取数据
        $this->assign('list',$list);

        return $this->fetch('detail');
    }
}
?>