<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_a60bed4ef35f2f2c03a0f893e4a57280($e,$m){

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
