<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_b4e3daa1ffbdfbcef0622d107b5dfe4a($e,$m){

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