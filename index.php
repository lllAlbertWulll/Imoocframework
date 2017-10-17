<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/14
 * Time: 下午 6:36
 */

/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
use core\imooc;

// 根目录
define('IMOOC',realpath('./'));
// 核心文件库目录
define('CORE',IMOOC.'/core');
// 项目文件目录
define('APP',IMOOC.'/app');

define('MODULE','app');

include "vendor/autoload.php";

// 调试模式
define('DEBUG',true);

// 如果DEBUG=true, 则显示错误信息
if (DEBUG) {
    $whoops = new \Whoops\Run();
    // START---小福利： 重写错误标题---START
    $errorTitle = 'Hi! I am BUG.';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    // END---小福利： 重写错误标题---END
    // $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
    $whoops->register();
    ini_set('display_errors','On');
}else {
    ini_set('display_errors','Off');
}

// 加载函数库
include CORE.'/common/function.php';

// 加载核心文件
include CORE.'/imooc.php';

// 如果所 NEW 的类不存在时，就会触发 imooc::load 这个方法
spl_autoload_register('core\imooc::load');

imooc::run();