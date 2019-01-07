<?php
namespace app\index\controller;
use think\Controller;
use think\db;

class Index extends Controller{

    //首页
    public function index(){
        //读取登录名
        $username = session('username');
        $this->assign('username',$username);

        // 读取轮播图
        $image=db('system')->order('id desc')->select();
        // $image = Db::table('tr_system')->order('id desc')->select();
        $this->assign('image',$image);

        //读取一级分类的数据
        $sick=db('sick')->where('statue','=',"是")->where('parent_id','=',0)->order('id desc')->select();
        // 循环输出一级分类id
        $i=0;
        foreach($sick as $v){
            $ids[$i]=$v['id'];     
            $i++;
        }
        // 读取二级分类
        $sick1 = db('sick')->where('parent_id','in',$ids)->where('statue','=',"是")->order('id desc')->select();
        
        $this->assign('sick1',$sick1);
        $this->assign('sick',$sick);

        return $this->fetch('index');
    }

    //查询
    public function search(){
        //读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $keywords=input('keywords');
        if($keywords){
            $where['typename']=['like','%'.$keywords.'%'];   //搜索条件
        }else{
            $where=1;  
        }
        //读取一级分类的数据
        $sick=db('sick')->where('statue','=',"是")->where($where)->where('parent_id','=',0)->order('id desc')->select();
        if($sick){
            // 循环输出一级分类id
            $i=0;
            foreach($sick as $v){
                $ids[$i]=$v['id'];     
                $i++;
            }
            // 读取二级分类
            $sick1 = db('sick')->where('parent_id','in',$ids)->where('statue','=',"是")->order('id desc')->select();
            
            $this->assign('sick1',$sick1);
        }
        $this->assign('sick',$sick);

        return $this->fetch('Sick/list');
    }
}
?>