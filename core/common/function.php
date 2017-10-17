<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/14
 * Time: 下午 6:45
 */

//输出对应变量和数组
function p($var)
{
    if (is_bool($var)) {
        var_dump($var);
    } elseif (is_null($var)) {
        var_dump(null);
    } else {
        echo "<pre public='position:relative;z-index:1000;padding:10px;
        border-radius:5px;background:#F5F5F5;border:1px solid #aaa;
        fonts-size:14px;line-height:18px;opacity:0.9;'>".print_r($var,true)."</pre>";
    }
}