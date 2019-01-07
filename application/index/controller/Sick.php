<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
use think\Controller;
use think\db;
class Sick extends Controller{
	//疾病大全页面
	public function lst(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        //接收前台传的搜索条件
        $keywords=input('keywords');
        if($keywords){
            $where['typename']=['like','%'.$keywords.'%'];   //搜索条件
            //根据搜索条件查询二级分类
            $sick1 = db('sick')->where($where)->where('parent_id','neq',0)->order('id desc')->select();
            if($sick1){
                $h=0;
                foreach($sick1 as $a1){
                    $idss[$h]=$a1['parent_id'];     
                    $h++;
                }
                //查询一级分类
                $sick = db('sick')->where('id','in',$idss)->order('id desc')->select();
            }else{
                //根据搜索条件查询一级分类
                $sick=db('sick')->where($where)->where('parent_id','=',0)->order('id desc')->select();
                if($sick){
                    // 循环输出一级分类id
                    $i=0;
                    foreach($sick as $v){
                        $ids[$i]=$v['id'];     
                        $i++;
                    }
                    // 读取二级分类
                    $sick1 = db('sick')->where('parent_id','in',$ids)->order('id desc')->select();
                }
            }
        }else{
            //无搜索条件直接查询一级分类
            $sick=db('sick')->where('parent_id','=',0)->order('id desc')->select();
            if($sick){
                // 循环输出一级分类id
                $i=0;
                foreach($sick as $v){
                    $ids[$i]=$v['id'];     
                    $i++;
                }
                // 读取二级分类
                $sick1 = db('sick')->where('parent_id','in',$ids)->order('id desc')->select();
            }
        }
        $this->assign('sick1',$sick1);
        $this->assign('sick',$sick);

		return $this->fetch('list');
	}
	//疾病详情
	public function detail(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

		$id=input('id');   //获取传递的id
		$sick = db('sick')->find($id);   //读取数据
		$this->assign('sick',$sick);

		return $this->fetch('detail');
	}
}
?>