<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Photo extends Model{
	//历史名医列表
	public function search($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1;
		}  //关键字查询
		$list=db('doctor')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('doctor')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//中国古籍列表
	public function search1($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1;
		}  //关键字查询
		$list=db('book')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('book')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//药材图谱列表
	public function search2($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1;
		}  //关键字查询
		$list=db('medicine')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('medicine')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//穴位图谱列表
	public function search3($keywords){
		if($keywords){
			$where['name']=['like','%'.$keywords.'%'];
		}else{
			$where=1;
		}  //关键字查询
		$list=db('xuewei')->where($where)->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('xuewei')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//添加历史名医
	public function add_doctor($data){
		if(db('doctor')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//添加中国古籍
	public function add_book($data){
		if(db('book')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//添加药材图谱
	public function add_medicine($data){
		if(db('medicine')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//添加穴位图谱
	public function add_xuewei($data){
		if(db('xuewei')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//修改历史名医
	public function edit_doctor($data){
	    $save=db('doctor')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//修改中国古籍
	public function edit_book($data){
	    $save=db('book')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//修改药材图谱
	public function edit_medicine($data){
	    $save=db('medicine')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//修改穴位图谱
	public function edit_xuewei($data){
	    $save=db('xuewei')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//删除历史名医
	public function del_doctor($id){
		if(db('doctor')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}
	//删除中国古籍
	public function del_book($id){
		if(db('book')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}
	//删除药材图谱
	public function del_medicine($id){
		if(db('medicine')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}
	//删除穴位图谱
	public function del_xuewei($id){
		if(db('xuewei')->where(array('id'=>$id))->delete()){
			return 1; //删除成功
		}else{
			return 3;  //删除失败
		}
	}

	//批量删除历史名医
	public function p_del($ids){
		//删除所选id的历史名医
		$list_id=db('doctor')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
	//批量删除中国古籍
	public function p_del1($ids){
		//删除所选id的中国古籍
		$list_id=db('book')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
	//批量删除药材图谱
	public function p_del2($ids){
		//删除所选id的药材图谱
		$list_id=db('medicine')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
	//批量删除穴位图谱
	public function p_del3($ids){
		//删除所选id的穴位图谱
		$list_id=db('xuewei')->where(array('id'=>array('in',$ids)))->delete();
		if($list_id){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}
}
?>