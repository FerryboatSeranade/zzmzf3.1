<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_2fa319f48fbb418b0a1829addb113843($e,$m){

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
