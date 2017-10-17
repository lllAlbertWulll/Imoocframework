<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/14
 * Time: 下午 10:12
 */

namespace core;

use core\lib\log;
use core\lib\route;
use Exception;
use Twig_Environment;
use Twig_Loader_Filesystem;

class imooc
{
    // 临时变量，用来储存已加载的类
    public static $classMap = array();
    public $assign;

    // 框架启动需要调用的方法
    static public function run()
    {
        log::init();
        log::log($_SERVER, 'server');
        $route = new route();
        $controllerClass = $route->controller;
        $method = $route->method;
        $controllerFile = APP.'/controllers/'.$controllerClass.'Controller.php';
        $class = '\\'.MODULE.'\controllers\\'.$controllerClass.'Controller';
        if (is_file($controllerFile)) {
            include $controllerFile;
            $controller = new $class;
            $controller->$method();
            log::log('Controller:'.$controllerClass.'       '.'Method:'.$method);
        } else {
            throw new Exception('找不到控制器'.$controllerClass);
        }
    }

    // 自动加载类库方法
    static public function load($class)
    {
        // new \core\route();
        // $class = '\core\route';
        // IMOOC.'/core/route.php';

        if (isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\','/',$class);
            $file = IMOOC.'/'.$class.'.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

    // 视图层数据注册方法
    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    // 显示视图层方法
    public function display($file)
    {
        $file = APP.'/views/'.$file;
        if (is_file($file)) {
            $loader = new Twig_Loader_Filesystem(APP.'/views');
            $twig = new Twig_Environment($loader, array(
                'cache' => IMOOC.'/cache/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate('index.html');
            $template->display($this->assign ? $this->assign : '');
        }
    }
}