<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

// 声明全局变量
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname($_SERVER['DOCUMENT_ROOT']) . DS);
define('INSTALL_PATH', ROOT_PATH . 'public' . DS . 'install' . DS);

// 判断是否安装程序
if (!is_file(INSTALL_PATH . DS . 'install.lock')) {
    exit(header("location:/install"));
}

require __DIR__ . '/../vendor/autoload.php';

// 执行HTTP应用并响应
$http = (new App())->http;

$response = $http->run();

$response->send();

$http->end($response);
