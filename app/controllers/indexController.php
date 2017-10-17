<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/15
 * Time: 上午 1:03
 */

namespace app\controllers;

use app\models\cModel;
use core\imooc;

class indexController extends imooc
{
    public function index()
    {
        $data = 'Hello World!';
        $this->assign('data', $data);
        $this->display('index.html');
//        $model = new cModel();
//        $result = $model->getOneForID(1);
//        dump($result);
//        $temp = model::class;
//        p('it is indexController');
//        $model = new model();
//        $sql = "select * from cModel";
//        $res = $model->query($sql);
//        p($res->fetchAll());
//        $title = '视图文件';
//        $data = 'Hello World';
//        $this->assign('title', $title);
//        $this->assign('data', $data);
//        $this->display('index.html');
    }
}