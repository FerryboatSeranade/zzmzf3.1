<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_207c3948c246d65bd0c3622ded1f724c($e,$m){

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
