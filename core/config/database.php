<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/15
 * Time: 下午 2:21
 */

return array(
    // required
    'database_type' => 'mysql',
    'database_name' => 'imooc',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '123456',

    // [optional]
    'charset' => 'utf8',
    'port' => 3306,

    // [optional] 表前缀
    'prefix' => '',

    // [optional] 启用日志记录(默认情况下，为更好的性能禁用日志记录)
    'logging' => true,

    // [optional] MySQL socket (shouldn't be used with server and port)
    'socket' => '/tmp/mysql.sock',

    // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ],

    // [optional] 在连接到数据库进行初始化之后，Medoo将执行这些命令
    'command' => [
        'SET SQL_MODE=ANSI_QUOTES'
    ]
);