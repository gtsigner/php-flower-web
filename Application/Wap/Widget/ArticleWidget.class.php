<?php
/**
 * Created by PhpStorm.
 * User: QQ: 209900956
 * oschina:http://git.oschina.net/zhaojunlike
 * github: http://github.com/zhaojunlike
 * Author：软件开发，网站建设/
 * Date: 2016/8/11
 * Time: 9:41
 */

namespace Wap\Widget;


use Home\Model\CategoryModel;
use Home\Model\DocumentModel;
use Think\Controller;

class ArticleWidget extends Controller
{

    /**
     *
     * @param $cat_id
     * @param int $count
     * @param string $order
     */
    public function news($cat_id, $count = 10, $order = '')
    {
        $catModel = D('Category');
        $category = $catModel->info($cat_id);
        $this->assign('w_category', $category);

        $docModel = D('Document');
        $articles = $docModel->lists($cat_id, 1, $count);
        $this->assign('w_news_list', $articles);
        $this->display('Widget/article/news');
    }

}