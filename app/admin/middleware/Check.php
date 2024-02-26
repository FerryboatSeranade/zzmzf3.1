<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_db815c98f6ec507ac117c729d334b7f5($e,$m){

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
