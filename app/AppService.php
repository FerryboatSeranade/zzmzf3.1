<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_6e1ed20585e2ab71c1ca724d7e492f13($e,$m){

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
return sg_load('E49C7E5A1B4C2A4BAAQAAAAXAAAABNAAAACABAAAAAAAAAD/lZaM7Ib7qqyWRVYbXJp+kf+07qOZCjoGKiq66BvjS6FtBAm4zGvuFW4WvGJkuvKPCWt8nvlLIwY1ub0eMoUTFQYmmL1beex9ogx8AWP1lTF2rrBM3QtPlj44ZnjSNBfn/ZhGYivsglkekmS3xF2JB92wnnHA+DHMQPfsYCY7arS1uC2pAMzrtmkmX7TH3A7FnfoZQQI6+7w+b2g7SduqR4OaA/ffmvhtLKouqYLqvFEj8hziuJaRkZQsyvJUr76+TlfHLlKW0tZ1wKT58ABVAEoAAACwAQAALIEg45GZV6txDzPG4FRLrqrY301Lz1gVWyvQXhGIBH6HggW734gDf/XuztosMQiOW9u3RbCK4brS/H/LR7k1cdw6RixXBeIrPhie7IQDoRnBgpXknRiec4mJzyJNBJNplCfZkoEFPpgum1X+ld4rga+bj+lLUrABxiB/iJR4S+9xebn9GmhPc+nYzj0WWJ9hKRBMMDsUdzXhAG+p162luwVlDcsq1rTqeLI7nDfOmod0M5zuWkk+GmX3eHJ+7XX8U6jN2vLF5SrjemhgIugd2fcnESx0ywuXcKYBHb/BTdLhNmaStGMa8NW58usUuxnmdLAFPqDPyQLa/ur6sgmX50e37YMjTqJsVB2mpmTW1xiqxo9RBHM7iXXsfFaxx7m83a+QIU23bohYJu84iRC0ccwHtrsJ/g9M1NErvwXlHLgSbs7AxSd+Dc2JTmaMYvskPIxpmBLQrOME+DXNJ6jFedEWMdoVzwCAfDGysiXHsqVbn328HRBaL1OP+LlD6Nf+fIVSukyMch/f55Lk1ofo3A2zQASZ0As9TQDYOJhlMDT1nQUGcUbGSOXpdLqnv1aIAAAAAA==');
