<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/15
 * Time: 下午 1:24
 */

namespace core\lib;

use Medoo\Medoo;

class model extends Medoo
{
    public function __construct()
    {
        $option = config::all('database');
        parent::__construct($option);
    }
}