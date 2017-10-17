<?php
/**
 * Created by PhpStorm.
 * User: GeGe WU
 * Date: 2017/10/15
 * Time: 下午 2:39
 */

namespace core\lib\drive\log;

use core\lib\config;

class file
{
    public $path;   // 日志存储位置

    public function __construct()
    {
        $config = config::get('OPTION', 'log');
        $this->path = $config['PATH'];
    }

    public function log($message, $file = 'log')
    {
        /**
         * 1.如果日志文件存储位置不存在，则新建目录
         * 2.如果日志文件存储位置存在，则写入日志
         */
        if (!is_dir($this->path.date('YmdH'))) {
            mkdir($this->path.date('YmdH'), '777', true);
        }
        return file_put_contents(
            $this->path.date('YmdH').'/'.$file.'.php',
            date('Y-m-d H:i:s') . ' --> '.json_encode($message).PHP_EOL,
            FILE_APPEND);
    }
}