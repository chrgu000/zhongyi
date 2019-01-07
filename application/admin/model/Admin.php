<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model{
	//管理员登录
	public function login($data){
		$user=Db::name('admin')->where('adminname','=',$data['adminname'])->find();
		if($user){
			if($user['adminpassword']==md5($data['adminpassword'])){
				session('id',$user['id']);
				session('adminname',$user['adminname']);
				session('role',$user['role']);
				$this->getpri($user['role']);
				return 1; //信息正确
			}else{
				return 3; //密码错误
			}
		}else{
			return 4; //用户不存在
		}
	}

	//修改密码
	public function changepwd($data){
		$admin=db('admin')->update($data);
		if($admin!==false){
			return 1; //修改成功
		}else{
			return 2; //修改失败
		}
	}

	//管理员列表
	public function search($keywords){
		if($keywords){
			$where['adminname']=['like','%'.$keywords.'%'];
			$where['id']=array('neq',4); //超级管理员不显示
		}else{
			$where['id']=array('neq',4);    //超级管理员不显示
		}  //关键字查询
		$list=db('admin')->where($where)->order('id desc')->paginate(12,false,['query'=>['keywords'=>$keywords]]);  //分页查询数据
		$role=db('role')->select();  //查询到角色列表
		$counts=db('admin')->where($where)->order('id desc')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
            'role'=>$role,
        );  
        return $data;
	}

	//添加管理员
	public function add($data){
		if(db('admin')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//管理员修改
	public function edit($data){
	    $save=db('admin')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}

	//管理员删除
	public function del($id){
		if($id!=4){
			if(db('admin')->delete($id)){
				return 1; //删除成功
			}else{
				return 3;  //删除失败
			}
		}else{
			return 2;   //超级管理员不能删除
		}
	}

	//管理员批量删除
	public function p_del($ids){
		$list=db('admin')->where(array('id'=>array('in',$ids)))->delete();
		if($list){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}

	//获取当前用户的权限
	public function getpri($roleid){
        $rolelist=db('role')->field('rolename,pri_id')->where(array('id'=>$roleid))->find();
        if($rolelist){
        session('rolename',$rolelist['rolename']);
        //if($role->pri_id_=='*'){
            //session('privilege','*');
            //$menu=$pri->where('parent_id=0')->select();
            //foreach($menu as $k=>$v){
                //$menu[$k]['sub']=$pri->where('parent_id='.$v['id'])->select();
            //}
            //session('menu',$menu);
        //}else{
            $pris=db('privilege')->field('id,pri_name,module_name,controller_name,action_name,parent_id,
                CONCAT(module_name,"/",controller_name,"/",action_name) url')->
                 where("id IN({$rolelist['pri_id']})")->order('id asc')->select();
            $_pris=array();
            $menu=array();
            foreach($pris as $k=>$v){
                $_pris[]=$v['url'];
                if($v['parent_id']==0){
                    $menu[]=$v;
                }
            }
            session('privilege',$_pris);
            foreach($menu as $k=>$v){
                foreach($pris as $k1=>$v1){
                    if($v1['parent_id']==$v['id']){
                        $menu[$k]['sub'][]=$v1;
                    }
                }
            }
            session('menu',$menu);           
        //}
        }
    }
}
?>