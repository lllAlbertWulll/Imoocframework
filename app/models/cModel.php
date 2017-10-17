<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/17
 * Time: 上午 1:25
 */

namespace app\models;

use core\lib\model;

class cModel extends model
{
    public $table = 'c';
    public function lists()
    {
        $result = $this->select($this->table,'*');
        return $result;
    }

    public function getOneForID($id)
    {
        $result = $this->get($this->table,'*',array(
            'id' => $id
        ));
        return $result;
    }
}