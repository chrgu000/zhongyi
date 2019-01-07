<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: zhangyajun <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\paginator\driver;

use think\Paginator;

class Bootstrap1 extends Paginator
{

    /**
     * 上一页按钮
     * @param string $text
     * @return string
     */
    protected function getPreviousButton($text = "上一页")
    {

        if ($this->currentPage() <= 1) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->url(
            $this->currentPage() - 1
        );

        return $this->getPageLinkWrapper($url, $text);
    }



    //总数标签
    protected  function totalshow()
    {

        // $totalhtml="<li class=\"disabled\"><span>共".$this->total."条记录&nbsp&nbsp第".$this->currentPage()."页/共".$this->lastPage()."页</span></li>";
         $totalhtml="<li class=\"pageinput\"><p class='yeshudes'>"."第<i>".$this->currentPage()."</i>页/共<i>".$this->lastPage()."</i>页</p></li>";
        return $totalhtml;

    }

    //尾页标签

    protected  function showlastpage($text = '尾页')
    {

        if($this->currentPage()==$this->lastPage())
        {
            return $this->getDisabledTextWrapper($text);

        }

        $url = $this->url($this->lastPage());
        return $this->getPageLinkWrapper($url, $text);
    }

    //首页标签

    protected  function showfirstpage($text = '首页')
    {

        if($this->currentPage()==1)
        {
            return $this->getDisabledTextWrapper($text);

        }

        $url = $this->url(1);
        return $this->getPageLinkWrapper($url, $text);
    }
  //后五页
    protected  function afivepage($text = '后五页')
    {


        if($this->lastPage()<$this->currentPage()+5)
        {
            return $this->getDisabledTextWrapper($text);

        }
        $url = $this->url($this->currentPage()+5);


        return $this->getPageLinkWrapper($url, $text);
    }

    //前五页
    protected  function bfivepage($text = '前五页')
    {


        if($this->currentPage()<5)
        {
            return $this->getDisabledTextWrapper($text);

        }
        $url = $this->url($this->currentPage()-5);


        return $this->getPageLinkWrapper($url, $text);
    }


    /**
     * 下一页按钮
     * @param string $text
     * @return string
     */
    protected function getNextButton($text = '下一页')
    {
        if (!$this->hasMore) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->url($this->currentPage() + 1);

        return $this->getPageLinkWrapper($url, $text);
    }

  //跳转到哪页
    protected  function  gopage()
    {   $currentPage=ceil($this->currentPage)+1;
        if($this->currentPage>=$this->lastPage){
            $currentPage=$this->lastPage;
        }
        return $gotohtml="<li class='tijiaoli'><form action='' method='get' ><p class='tijiao'>转到&nbsp;<input type='text' class='yeshu' name='page' value=$currentPage>&nbsp;页&nbsp; <input class='queding' type='submit' value='确定'> </p></form></li>";
       // return $totalhtml;;

    }

    /**
     * 页码按钮
     * @return string
     */
     protected function getLinks()
    {
        if ($this->simple)
            return '';

        $block = [
            'first'  => null,
            'slider' => null,
            'last'   => null
        ];

        $side   = 2;
        $window = $side * 2;

        if ($this->lastPage < $window + 3) {
            $block['first'] = $this->getUrlRange(1, $this->lastPage);
        } elseif ($this->currentPage <= $window) {
            $block['first'] = $this->getUrlRange(1, $window + 1);
            $block['last']  = $this->getUrlRange($this->lastPage - 1, $this->lastPage);
        } elseif ($this->currentPage > ($this->lastPage - $window)) {
            $block['first'] = $this->getUrlRange(1, 2);
            $block['last']  = $this->getUrlRange($this->lastPage - ($window), $this->lastPage);
        }else {
            $block['first']  = $this->getUrlRange(1, 2);
            $block['slider'] = $this->getUrlRange($this->currentPage - $side, $this->currentPage + $side);
            $block['last']   = $this->getUrlRange($this->lastPage - 1, $this->lastPage);
        } 


        $html = '';

        if (is_array($block['first'])) {
            $html .= $this->getUrlLinks($block['first']);
        }

        if (is_array($block['slider'])) {
            $html .= $this->getDots();
            $html .= $this->getUrlLinks($block['slider']);
        }

        if (is_array($block['last'])) {
            if($this->currentPage > ($this->lastPage - $window)){
                $html .= $this->getDots();
                $html .= $this->getUrlLinks($block['last']);
            }else{
                $html .= $this->getDots();
            }
            
        }

        return $html;
    }

    /**
     * 渲染分页html
     * @return mixed
     */
    public function render()
    {
        // if ($this->hasPages()) {
            if ($this->simple) {
                return sprintf(
                    '<ul class="pager">%s %s %s</ul>',

                    $this->getPreviousButton(),
                    $this->getNextButton()
                );
            } else {
                return sprintf(
                    '<ul class="pagination"> %s %s %s %s %s %s %s </ul>',
                    
                   //第一页
                    $this->showfirstpage(),
                   //上一页
                    $this->getPreviousButton(),
                   //前五页
                    // $this->bfivepage(),
                   //页码
                    $this->getLinks(),
                   //后五页
                    // $this->afivepage(),
                    //下一页
                    $this->getNextButton(),
                   //最后一页
                    $this->showlastpage(),
                    //显示数量页码信息
                    $this->totalshow(),
                    //最后再加个参数 %s 可以显示跳转到哪页
                   $this->gopage()

                );
            }
        // }
    }

    /**
     * 生成一个可点击的按钮
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page)
    {
        return '<li><a href="' . htmlentities($url) . '">' . $page . '</a></li>';
    }

    /**
     * 生成一个禁用的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<li class="disabled"><span>' . $text . '</span></li>';
    }

    /**
     * 生成一个激活的按钮
     *
     * @param  string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<li class="active"><span>' . $text . '</span></li>';
    }

    /**
     * 生成省略号按钮
     *
     * @return string
     */
    protected function getDots($text = '...')
    {

        //$url = $this->url($this->currentPage() + 1);

      //  return $this->getPageLinkWrapper($url, $text);
       return $this->getDisabledTextWrapper('...');
    }

    /**
     * 批量生成页码按钮.
     *
     * @param  array $urls
     * @return string
     */
    protected function getUrlLinks(array $urls)
    {
        $html = '';

        foreach ($urls as $page => $url) {
            $html .= $this->getPageLinkWrapper($url, $page);
        }

        return $html;
    }

    /**
     * 生成普通页码按钮
     *
     * @param  string $url
     * @param  int    $page
     * @return string
     */
    protected function getPageLinkWrapper($url, $page)
    {
        if ($page == $this->currentPage()) {
            return $this->getActivePageWrapper($page);
        }

        return $this->getAvailablePageWrapper($url, $page);
    }
}