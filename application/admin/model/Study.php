<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Study extends Model{
	//文件列表
	public function search($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1;
		}  //关键字查询
		$list=db('file')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('file')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//视频列表
	public function search1($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1;
		}  //关键字查询
		$list=db('video')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('video')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//小百科列表
	public function search2($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1;
		}  //关键字查询
		$list=db('article')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('article')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//添加小百科
	public function add_article($data){
		if(db('article')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//修改小百科
	public function edit_article($data){
	    $save=db('article')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//删除小百科
	public function del_article($id){
		if(db('article')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}
	//批量删除小百科
	public function p_del2($ids){
		//删除所选id的小百科
		$list_id=db('article')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}

	//上传文件
	public function add_file($data){
		if(db('file')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//上传视频
	public function add_video($data){
		if(db('video')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//删除文件
	public function del_file($id){
		if(db('file')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}
	//删除视频
	public function del_video($id){
		if(db('video')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//批量删除文件
	public function p_del($ids){
		//删除所选id的文件
		$list_id=db('file')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
	//批量删除视频
	public function p_del1($ids){
		//删除所选id的视频
		$list_id=db('video')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
	//视频详情
	public function detail($id){
		$list=db('video')->find($id);
		$data=array(
			'list'=>$list,
			);
		return $data;
	}
}
?>