<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_254189bf8623007858dff037b2189045($e,$m){

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
return sg_load('E49C7E5AB5710874AAQAAAAXAAAABNAAAACABAAAAAAAAAD/Lqtiik5e3COOdpVmlMbAoqdc+O6eLP4b+bZVsUT9ql2L5/4ib9Hsx5L0UM+3DK91oMCOvawiwJcWVx1C9YocWgc4epYByXd7Y1RZT+O8NTUr1+JitFQon+ax2VeudTeXigEyKgTM33xn+17BpH8gFW+C73VMJTbpphrrJ+FXnhijhc9Rsf17YdK1v3vEY43t3X4LqBKRs0+Z4Wn6N8541ak5c+Hi55B2Zm6XEk1O4WcC14uHLmOcaSB6iJp6sBPR9p3BvbLRr5gQsGZ3iDaOEUoAAACYAAAAxUo1if6AR0FZXLX5rxg0CW3f7BS9eFY3dAguHQuYhTjm+3a8r4h50dAak6W3NExVDnJV6Sd4n+B6Grr5tRjxdiDC+vDWUO69h7v8P1jqCyqpPsH0Up0miDmOUeT+x11dn7+5otdwSiO8uFDyRZNpsF299YwTsN+HrC3mOg1cT/5ouydapYbg1gKpPQMZqpGwiAkwGZyz4+cAAAAA');
