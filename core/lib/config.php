<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/15
 * Time: 下午 1:55
 */

namespace core\lib;

use Exception;

class config
{
    static public $config = array();

    static public function get($name, $file)
    {
        /**
         * 1.判断配置文件是否存在
         * 2.判断你配置是否存在
         * 3.缓存配置
         */
        if (isset(self::$config[$file])) {
            return self::$config[$file][$name];
        } else {
            $path = IMOOC.'/core/config/'.$file.'.php';
            if (is_file($path)) {
                $config = include $path;
                if (isset($config[$name])) {
                    self::$config[$file] = $config;
                    return $config[$name];
                } else {
                    throw new Exception('没有这个配置项'.$name);
                }
            } else {
                throw new Exception('找不到配置文件'.$file);
            }
        }
    }

    // 加载整个配置文件
    static public function all($file)
    {
        if (isset(self::$config[$file])) {
            return self::$config[$file];
        } else {
            $path = IMOOC.'/core/config/'.$file.'.php';
            if (is_file($path)) {
                $config = include $path;
                self::$config[$file] = $config;
                return $config;
            } else {
                throw new Exception('找不到配置文件'.$file);
            }
        }
    }
}