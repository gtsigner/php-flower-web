<?php
/**
 * Created by PhpStorm.
 * User: QQ: 209900956
 * oschina:http://git.oschina.net/zhaojunlike
 * github: http://github.com/zhaojunlike
 * Author：软件开发，网站建设/
 * Date: 2016/7/30
 * Time: 17:14
 */

namespace Home\Controller;

use Home\Model\DocumentModel;
use Think\Page;

class TravelController extends HomeController
{

    //游玩
    public function view($p = 1)
    {
        //42
        $map['category_id'] = 42;
        $map['status'] = 1;

        $pLimit = C("HOME_PAGE_LIMIT");
        $docModel = new DocumentModel();
        $totalCount = $docModel->listCount($map['category_id']);
        $pModel = new Page($totalCount, $pLimit);
        $docList = $docModel->lists($map['category_id'], $p, $pLimit);
        $this->assign('view_list', $docList);
        $this->assign('page', $pModel->show());
        $this->display();
    }

    public function detail()
    {
        $map['id'] = I('id');
        $docModel = new DocumentModel();
        $detail = $docModel->detail($map['id']);
        $this->assign('detail', $detail);
        $this->display();
    }


    public function eat()
    {
        $this->display();
    }

}