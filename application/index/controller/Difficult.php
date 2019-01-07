<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
use think\Controller;
use think\db;
class Difficult extends Controller{
	//疑难杂症页面
	public function lst(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $keywords=input('keywords');
        if($keywords){
            $where['typename']=['like','%'.$keywords.'%'];   //搜索条件
            //根据搜索条件查询二级分类
            $difficult1 = db('difficult')->where($where)->where('parent_id','neq',0)->order('id desc')->select();
            if($difficult1){
                $h=0;
                foreach($difficult1 as $a1){
                    $idss[$h]=$a1['parent_id'];     
                    $h++;
                }
                //查询一级分类
                $difficult = db('difficult')->where('id','in',$idss)->order('id desc')->select();
            }else{
                //根据搜索条件查询一级分类
               $difficult=db('difficult')->where($where)->where('parent_id','=',0)->order('id desc')->select();
               if($difficult){
                    // 循环输出一级分类id
                    $i=0;
                    foreach($difficult as $v){
                        $ids[$i]=$v['id'];     
                        $i++;
                    }
                    // 读取二级分类
                    $difficult1 = db('difficult')->where('parent_id','in',$ids)->order('id desc')->select();
                }
            }
        }else{
            //无搜索条件直接查询一级分类
            $difficult=db('difficult')->where('parent_id','=',0)->order('id desc')->select();
            if($difficult){
                // 循环输出一级分类id
                $i=0;
                foreach($difficult as $v){
                    $ids[$i]=$v['id'];     
                    $i++;
                }
                // 读取二级分类
                $difficult1 = db('difficult')->where('parent_id','in',$ids)->order('id desc')->select();
            }
        }
        $this->assign('difficult1',$difficult1);
        $this->assign('difficult',$difficult);

		return $this->fetch('list');
	}
	//杂症详情
	public function detail(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

		$id=input('id');   //获取传递的id
		$difficult = db('difficult')->find($id);   //读取数据
		$this->assign('difficult',$difficult);

		return $this->fetch('detail');
	}
}
?>