<?php
/**
 * Created by PhpStorm.
 * User: QQ: 209900956
 * oschina:http://git.oschina.net/zhaojunlike
 * github: http://github.com/zhaojunlike
 * Author：软件开发，网站建设/
 * Date: 2016/7/30
 * Time: 10:01
 */

namespace Home\Controller;


/**
 * 单页面控制器
 * Class PagesController
 * @package Home\Controller
 */
class PagesController extends HomeController
{


    /**
     * 交通信息
     * @param int $type
     */
    public function transport($type = 1)
    {
        $this->assign("type", $type);
        $this->display("Pages/transport_" . $type);
    }
}