<?php
/**
 * Created by PhpStorm.
 * User: QQ: 209900956
 * oschina:http://git.oschina.net/zhaojunlike
 * github: http://github.com/zhaojunlike
 * Author：软件开发，网站建设/
 * Date: 2016/7/31
 * Time: 15:06
 */

namespace Home\Widget;


use Home\Model\DocumentModel;
use Think\Controller;

/**
 *
 *
 * Class TravelWidget
 * @package Home\Widget
 */
class TravelWidget extends Controller
{

    private function getData($cat_id, $count)
    {
        $map['category_id'] = $cat_id;
        $map['status'] = 1;
        $docModel = new DocumentModel();
        //第一页的8条数据
        $docList = $docModel->lists($map['category_id'], 1, $count, '`level` desc');
        return $docList;
    }

    public function eat($cat_id = 43, $count = 8)
    {
        $docList = $this->getData($cat_id, $count);
        $this->assign('eat_list', $docList);
        $this->display("Widget/travel_eat");
    }

    //游玩
    public function play($cat_id = 42, $count = 3)
    {
        $docList = $this->getData($cat_id, $count);
        $this->assign('play_list', $docList);
        $this->display("Widget/travel_play");
    }

    //住
    public function live($cat_id = 47, $count = 4)
    {
        $docList = $this->getData($cat_id, $count);
        $this->assign('live_list', $docList);
        $this->display("Widget/travel_live");
    }

    //行
    public function walk($cat_id = 44, $count = 2)
    {
        $docList = $this->getData($cat_id, $count);
        $this->assign('walk_list', $docList);
        $this->display("Widget/travel_walk");
    }

    //购买
    public function buy($cat_id = 45, $count = 4)
    {
        $docList = $this->getData($cat_id, $count);
        $this->assign('buy_list', $docList);
        $this->display("Widget/travel_buy");
    }

    //娱
    public function yu($cat_id = 46, $count = 6)
    {
        $docList = $this->getData($cat_id, $count);
        $this->assign('yu_list', $docList);
        $this->display("Widget/travel_yu");
    }
}