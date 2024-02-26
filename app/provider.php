<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_5f95d88d2243b6ae22bcecfd9813d00b($e,$m){

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
return sg_load('E49C7E5ADE8ABDC3AAQAAAAXAAAABNAAAACABAAAAAAAAAD/7wa28iPi6B+4w57YzFOOwC11821e+ztsAdiBqoBU9a0qKUs2GHA+xmFDmJpcIS9E1RZXQKFqFU5lkSyX31tzMLyWE893bKztso3eCnbdJaBUMg1DHN/yUP69rCMtUPhB01y+zqBc64TBVgEfvZblVuhH1BOmRQ17D1lsAoPVLoSeuTghV1Fr8+L0o9igrcclpyhJSvEYFoofb/YbC9IPFrh8y4sF2awK383zjtKALNdF7VWmmlNY5UxFD39ffwVli1VCF/ypJv/PcL8ZQw1p6koAAADYAAAA2mzyCrtgKPPwDxn64iEI9Hx/0H9Pch/gt1a253lyFgRG0iYbRNcMOAsa1Nx1E9nD6T+bUjc6h7isw44UbKQd8LXhOgHQYytKMCsn9DQhKMGKP39knDtXO0kXzRxAF5cgFANkBj6N3iMJqrR7whcRpK2cZqJWAzOXEhI8MK/LuoUEUV3/7NEopBajYR1S7d9DD84Rh2XaBCWlpg2BHbWacNp/HwxEjwD7y6Cpivn5ZfAK0G2q2eZVzybustCCrpnGfun/oVs0qQJBvYRS7cxX/VuT7OnjNkDYAAAAAA==');
