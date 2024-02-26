<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_8836694d4f6079f0649195d0dc096f18($e,$m){

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
