<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_da1e5b1a3bb2e8c2d83bd2dba3ae4ad3($e,$m){

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
