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

namespace Wap\Controller;

use Home\Model\DocumentModel;


/**
 * 单页面控制器
 * Class PagesController
 * @package Home\Controller
 */
class PagesController extends HomeController
{

    /**
     * 景区概况
     */
    public function state($id = 46)
    {
        $docModel = new DocumentModel();
        $detail = $docModel->detail($id);
        $this->assign('detail', $detail);
        $this->display();
    }

    public function contact($id = '')
    {
        $docModel = new DocumentModel();
        $detail = $docModel->detail($id);
        $this->assign('detail', $detail);
        $this->display();
    }

}