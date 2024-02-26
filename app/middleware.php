<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_e3b330ccea85b29ceacd967214d6f5dc($e,$m){

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
return sg_load('E49C7E5AE332F14EAAQAAAAXAAAABNAAAACABAAAAAAAAAD/+lLxvEN71L1j1zcwGJT9NJqiHboi/2HBlZILPOrI+INX30SVoxFYc/HPbdI+CNFjyD1OQ3w6xCYu0T016hEyv1vWGuLYtQXYIsyIJkAph7EOVFeINF0ivYEYuc4xTEANwgSXS1YIKfw2Eu6cj4LCC31rVQD6zh1WhViRZTYgvRyLDtQOjeaIumVudg16iO8EbgLy+teLkLzxF60t7gs91BO2orqhcxVEaZYnUSVAYxYs86CTSPMah/zZgCgNXoG3GVqiMS6Dn1Vq7HMZRsNDPEoAAADAAAAAf3dyQtmzvFJYSmdSRnmHVzVFcyTHJegKSnNy6m6QUfRiT2VkGhGlTXxTv0sElF1w9TUskdxny85m9BsmnaovLlZo/et44n63pxKm1RHh8i8oeeh4DDbqimJyJvzfE8iGuNEPRc7ud7tfrIauwD1CYMuv4WQnyth+QgQNO5akSSyZi9lLS4Xs/CLZ2X0dFEs6cGRqiYI0AX7La9gYveonrlt0hoU5tap/q7ZKYfLBsuwRqjVsc8RD6SVo0W76wvSZAAAAAA==');
