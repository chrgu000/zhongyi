<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
use think\Controller;
use think\db;
class Photo extends Controller{
	//中医图谱页面
	public function lst(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        //读取历史名医
        $doctor=db('doctor')->where('statue','=',"是")->order('id desc')->select();

        //读取中国古籍
        $book=db('book')->where('statue','=',"是")->order('id desc')->select();

        //读取药材
        $medicine = db('medicine')->where('statue','=',"是")->order('id desc')->select();

        //读取穴位图谱
        $xuewei=db('xuewei')->where('statue','=',"是")->order('id desc')->select();
        
        $this->assign(array(
            'doctor'=>$doctor,
            'book'=>$book,
            'medicine'=>$medicine,
            'xuewei'=>$xuewei,
        ));

		return $this->fetch('list');
	}
	//名医详情页面
	public function detail(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

		$id=input('id');   //获取传递的id
		$doctor = db('doctor')->find($id);   //读取数据
		$this->assign('doctor',$doctor);

		return $this->fetch('detail');
	}
    //古籍详情页面
    public function detail1(){
        //读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $id=input('id');   //获取传递的id
        $book = db('book')->find($id);   //读取数据
        $this->assign('book',$book);

        return $this->fetch('detail1');
    }
    //药材详情页面
    public function detail2(){
        //读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $id=input('id');   //获取传递的id
        $medicine = db('medicine')->find($id);   //读取数据
        $this->assign('medicine',$medicine);

        return $this->fetch('detail2');
    }
    //穴位详情页面
    public function detail3(){
        //读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $id=input('id');   //获取传递的id
        $xuewei = db('xuewei')->find($id);   //读取数据
        $this->assign('xuewei',$xuewei);

        return $this->fetch('detail3');
    }
}
?>