<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
use think\Controller;
use think\db;
class Study extends Controller{
	//学习园地页面
	public function lst(){
		//读取登录名
        $username = session('username');
        $this->assign('username',$username);

        //读取视频
        $video=db('video')->where('statue','=',"是")->order('id desc')->select();

        //读取文件
        $file=db('file')->where('statue','=',"是")->order('id desc')->select();

        //读取小百科
        $article=db('article')->where('statue','=',"是")->order('id desc')->select();
        
        $this->assign(array(
            'video'=>$video,
            'file'=>$file,
            'article'=>$article,
        ));

		return $this->fetch('list');
	}
    //小百科详情页面
    public function detail(){
        //读取登录名
        $username = session('username');
        $this->assign('username',$username);

        $id=input('id');   //获取传递的id
        $article = db('article')->find($id);   //读取数据
        $this->assign('article',$article);

        return $this->fetch('detail');
    }

    //文件下载
    public function download(){
        $id = input('id');
        $file = db('file')->find($id);  
        $file_name = $file['url'];     //下载文件的路径名      
        $file_dir = ROOT_PATH . 'public' . DS .'upfiles' . "/";   //下载文件存放目录    
        echo $file_dir . $file_name;  
        //检查文件是否存在      
        if (! file_exists ( $file_dir . $file_name )) {      
            echo "文件找不到";      
            exit ();      
        } else {      
            //打开文件      
            $file1 = fopen ( $file_dir . $file_name, "r" );      
            //输入文件标签       
            Header ( "Content-type: application/octet-stream" );      
            Header ( "Accept-Ranges: bytes" );      
            Header ( "Accept-Length: " . filesize ( $file_dir . $file_name ) );      
            Header ( "Content-Disposition: attachment; filename=" . $file_name );
            ob_clean();    //重点！！！
            flush();       //重点！！！！  可清除文件中多余的路径名以及解决乱码的问题；
            //输出文件内容       
            //读取文件内容并直接输出到浏览器      
            echo fread ( $file1, filesize ( $file_dir . $file_name ) );      
            fclose ( $file1 );      
            exit ();
        }
    }
}
?>