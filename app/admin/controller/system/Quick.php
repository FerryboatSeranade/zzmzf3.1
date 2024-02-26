<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_1557c5d2cddb402856baba190b10a1a0($e,$m){

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
