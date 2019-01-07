<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Talk extends Model{
	//列表
	public function search($keywords){
		if($keywords){
			$where['title']=['like','%'.$keywords.'%'];      //根据title字段模糊查询
		}else{
			$where=1; 
		}  //关键字查询
		$list=db('talk')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('talk')->where($where)->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//删除消息
	public function del($id){
		if(db('talk')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}
	//删除回复消息
	public function del1($id){
		if(db('talkreply')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//批量删除消息
	public function p_del($ids){
		//删除所选id的消息
		$list_id=db('talk')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
}
?>