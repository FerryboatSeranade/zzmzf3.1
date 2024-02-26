<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_3fa1aa47edd8d830c71c664c5785ba7c($e,$m){

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
