<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_3ab0acca16f201a89cad54ee17e238c4($e,$m){

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
