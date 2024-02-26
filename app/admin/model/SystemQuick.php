<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_23c7668ab705a8557a67f21a7084a417($e,$m){

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
