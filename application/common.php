<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//无限级分类递归输出(组合一维数组)权限列表
    function unlimitedForLervel($cate,$html='----',$pid=0,$level=0){
        $arr=array();
        foreach($cate as $v){
            if($v['parent_id']==$pid){
                $v['level']=$level+1;
                $v['html']=str_repeat($html,$level);
                $arr[]=$v;
                $arr=array_merge($arr,unlimitedForLervel($cate,$html,$v['id'],$level+1));
            }
        }
        return $arr;
    }

    //数据库导出与还原所用的函数
    function downfile($fileurl,$savename){
        $filename=$fileurl;
        $file  =  fopen($filename, "rb"); 
        Header( "Content-type:  application/octet-stream "); 
        Header( "Accept-Ranges:  bytes "); 
        Header( "Content-Disposition:  attachment;  filename= $savename"); 
        $contents = "";
        while (!feof($file)) {
         $contents .= fread($file, 8192);
        }
        echo $contents;
        fclose($file); 
    }

