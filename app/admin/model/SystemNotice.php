<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_c6040905affbb7c77d5a2d9966709fa3($e,$m){

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
