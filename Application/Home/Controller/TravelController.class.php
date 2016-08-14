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

use Home\Model\CategoryModel;
use Home\Model\DocumentModel;
use Think\Page;
use Think\Verify;

class TravelController extends HomeController
{

    //旅游项目
    public function index()
    {
        //4个组件就行了



        $this->display();
    }


    /**
     * 列表页面
     * @param $cat_id
     * @param int $p
     */
    public function lists($cat_id, $p = 1)
    {
        $map['category_id'] = $cat_id;
        $map['status'] = 1;
        $pLimit = C("HOME_PAGE_LIMIT");
        $docModel = new DocumentModel();


        $totalCount = $docModel->listCount($map['category_id']);
        $pModel = new Page($totalCount, $pLimit);
        $docList = $docModel->lists($map['category_id'], $p, $pLimit);

        $cateModel = new CategoryModel();
        $cateInfo = $cateModel->info($map['category_id']);
        $this->assign('data_list', $docList);
        $this->assign('category', $cateInfo);
        $this->assign('page', $pModel->show());
        $this->display($cateInfo['template_lists']);
    }

    //吃
    public function detail()
    {
        $map['id'] = I('id');
        $docModel = new DocumentModel();
        $detail = $docModel->detail($map['id']);

        $catModel = new CategoryModel();
        $cateInfo = $catModel->info($detail['category_id']);

        //访客数—+1
        $docModel->where($map)->setInc('view');

        $this->assign('detail', $detail);
        $this->assign('category', $cateInfo);
        $this->display($cateInfo['template_detail']);
    }


    //吃
    public function eat($p = 1)
    {
        //42
        $map['category_id'] = 43;
        $map['status'] = 1;
        $pLimit = C("HOME_PAGE_LIMIT");
        $docModel = new DocumentModel();
        $totalCount = $docModel->listCount($map['category_id']);
        $pModel = new Page($totalCount, $pLimit);
        $docList = $docModel->lists($map['category_id'], $p, $pLimit);
        $this->assign('eat_list', $docList);
        $this->assign('page', $pModel->show());
        $this->display();
    }

}