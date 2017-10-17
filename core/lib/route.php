<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/14
 * Time: 下午 10:17
 */

/**
 * 路由
 */

namespace core\lib;
use core\lib\config;

class route
{
    public $controller;     // 控制器
    public $method;         // 方法
    public function __construct()
    {
        // imooc.dev/index/index  =>  域名/控制器/方法
        /**
         * 1.隐藏index.php
         * 2.获取URL参数部分
         * 3.返回对应的控制器和方法
         */
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            // index/index
            $path = $_SERVER['REQUEST_URI'];
            $patharray = explode('/',trim($path,'/'));
            if (isset($patharray[0])) {
                $this->controller = $patharray[0];
            }
            unset($patharray[0]);
            if (isset($patharray[1])) {
                $this->method = $patharray[1];
                unset($patharray[1]);
            } else {
                $this->method = config::get('METHOD','route');
            }

            // url的多余部分转换成 _GET 参数  =>  id/1/name/james
            $count = count($patharray) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($patharray[$i + 1])) {
                    $_GET[$patharray[$i]] = $patharray[$i + 1];
                }
                $i = $i + 2;
            }
            p($_GET);

        } else {
            // 当URL没有参数时，默认的控制器和默认的方法
            $this->controller = config::get('CONTROLLER','route');
            $this->method = config::get('METHOD','route');
        }
    }
}