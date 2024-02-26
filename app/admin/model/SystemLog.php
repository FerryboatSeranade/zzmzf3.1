<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_4ae584d271ae2923d2d4897a3166e162($e,$m){

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
