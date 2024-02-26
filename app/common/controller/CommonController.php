<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_fe353c350eb8e8997949c5157ac43f29($e,$m){

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
