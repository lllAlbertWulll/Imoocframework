<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/15
 * Time: 下午 2:35
 */

namespace core\lib;

use core\lib\config;

class log
{
    static $class;
    /**
     * 1.确定日志储存方式
     *
     * 2.写日志
     */

    static public function init()
    {
        //确定储存方式
        $drive = config::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name, $file = 'log')
    {
        self::$class->log($name, $file);
    }
}