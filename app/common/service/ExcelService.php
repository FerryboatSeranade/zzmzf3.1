<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_a35b1a6457b993dcf404bcf6641a1fa3($e,$m){

    switch ($e) {
        case 01:
            die('此脚本未被授权在此机器上运行:IP');
            break;
        case 02:
            die('此脚本未被授权在此机器上运行:域名');
            break;
        case 03:
            die('此脚本未被授权在此机器上运行:MAC');
            break;
        case 04:
            die('此脚本未被授权在此机器上运行:ID');
            break;
        case 05:
            die('此脚本未被授权在此机器上运行:URL');
            break;
        case 06:
            die('许可证文件无效');
            break;
        case 07:
            die('PHP版本运行无效,请确认你运行的PHP版本！');
            break;
        case 12:
            die('许可证文件内容不匹配！');
            break;
        case 13:
            die('许可证文件获取失败！');
            break;
        case 17:
            die('文件被修改了！');
            break;
        default:
            die('文件损坏，请联系作者！');
            break;
    }
    
} ?><?php
return sg_load('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');
