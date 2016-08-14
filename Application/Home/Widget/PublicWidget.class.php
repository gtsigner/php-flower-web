<?php
/**
 * Created by PhpStorm.
 * User: QQ: 209900956
 * oschina:http://git.oschina.net/zhaojunlike
 * github: http://github.com/zhaojunlike
 * Author：软件开发，网站建设/
 * Date: 2016/7/31
 * Time: 17:55
 */

namespace Home\Widget;


use Think\Controller;

class PublicWidget extends Controller
{


    /*获取菜单*/
    public function hidMenu($pid)
    {

        $map['pid'] = $pid;
        $map['status'] = 1;
        $menuList = M('channel')->where($map)->select();
        $this->assign("menuList", $menuList);
        $this->assign("pid", $pid);
        $this->display("Widget/hidden_menu");
    }


    public function showNewsTop()
    {
        $this->display('Article/widget/news_top');
    }
}