<?php
namespace app\admin\controller;
use app\admin\model\Talk as TalkModel;
use app\admin\controller\Base;
class Talk extends Base{
	//列表
	public function lst(){
		//断是否关键字查询
		$keywords=input('keywords');   //获取输入的关键字
		$talk=new TalkModel;  //实例化模型
		$data=$talk->search($keywords); //调用模型中方法
		$page=$data['list']->render();  
		$this->assign(array(
			'counts'=>$data['counts'],    //往模板页面上输出内容
			'list'=>$data['list'],
			'page'=>$page,
			));
		return $this->fetch('lst');   //渲染页面
	}
	//论坛详情页面
	public function detail(){

        $id=input('id');
        $this->assign('id',$id);
        $list=db('talk')->find($id);   //查询论坛详情
        $this->assign('list',$list);
        $talk_id = $list['id'];
        $list1 = db('talkreply')->where('talkid','=',$talk_id)->select();
        $this->assign('list1',$list1);
        return $this->fetch('detail');

	}

	//删除消息
	public function del(){
		$id=input('id');
		$model=new TalkModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('Talk/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//删除回复消息
	public function del1(){
		$id=input('id');
		$model=new TalkModel();
		$num=$model->del1($id);
		if($num==1){
			return $this->success('删除成功！');
		}else{
			return $this->error('删除失败！');
		}
	}

	//批量删除消息
	public function p_del(){
		$id=input('post.id/a');
		if($id){
			$ids=join(',',$id);
			$model=new TalkModel();
			$num=$model->p_del($ids);
			if($num==1){
				return $this->redirect('Talk/del_success');
			}else{
				return $this->error('批量删除失败！');
			}
		}else{
			return $this->error('请选择要批量删除的数据！');
		}
		
	}

	//删除成功
	public function del_success(){
		return $this->fetch('del_success');
	}
}
?>