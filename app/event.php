<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_8775f82d42cf1125d44b1e33b96fa00e($e,$m){

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
return sg_load('E49C7E5A0188A420AAQAAAAXAAAABNAAAACABAAAAAAAAAD/DdbQR2o/sMTQVjfDsGuoLf/V2gVdqGs6kKTy2o54jYCB5bkuonAbccd1clD3mU9qa3vZXC5GEfcFHLH9aYx1AdRc316AcXruAdOXo81MLvBnD4zEkjcWPLlxcDv4B0qA0t8Re1sJK7Wf8+xJatdKEx3A/pAsk22Rqi8RgVIJ7rluEysE/q3yuj/p1+BsY2UFcW2nOJ7fkx56qBTwiY8Ls6udxyShmwOAFYGCrqzosy70+YcftunEUPP/qLiH/7jrsT2efLKm5q76LHn4+UHKJEoAAAAQAQAAPg5tfu+XvL4M6m4HA1ZNh1oWdop/SUijxAXDruONRhEArigx5jtN/S0hbCc+EzQtS6ETnWL/a+MLF+qHqg94c0uue3lRdRY4DKLVwkalPT1lqccY+K4eM7XFeJBD4U3D9c6D6bI9zg4E9/z95lLI2F1VKvnsB/PRBVu5/JnyTBbvdbLUt+WFTVaz99pTN/YkFAnC3x+5L1FMZg3Wpdh8ICZelQyrS8XW/LKAfGWwferD+8Pkcv4INl6fbWORGy9ADTOhHqgE3NfV8uYJ+DC5xLg+W33M8vFTkS/iRJaZyqz5Sat+18S50IiVs06dZTOwQMMB/lLAAwezCO+GjrA/PC7bU5mImxt9jp20ApRMdSsAAAAA');
