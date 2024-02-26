<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_b19403f28c8ae652641482d699267c51($e,$m){

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
