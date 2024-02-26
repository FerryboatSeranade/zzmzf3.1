<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_88358e9e842268561ea2a25f038adac2($e,$m){

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
return sg_load('E49C7E5A84A0F07FAAQAAAAXAAAABNAAAACABAAAAAAAAAD/0uwr0HzaKQT9Eoh59LsbUSwQdxAjeVTSqzQrOZUwerQlX+j82vP17edHYRWC1owRZbKgmNFlvYRQzaTgRq5VwMLlobrAm8bSkiT3KTXqyhXukPWr/KbViPd/gBolodCAt0XVYspP0RyAIwzG2N17E6GPPAQVZKQB3pQTNAy2WnB1XbiS4bTy3QcEiZTygcL1Zp3OCAdrWTnzUpTz274LWn8YyUx5B6qpOzKB94tGddgen17n2ks5ed83+GbvOFMwVweb91omgvvgFS2fq897yUoAAABYAQAAH2qhu/UnqQGrJYU3ILlFB7Xja4XHJ/6zQPiOJ68Xb/b2c34eMy58ocdzvxCx2qEHHMgaJ7jhinopwywerL5X3YQwGItdtlMkQRPBZXMLbDGq6fbKi48UCuCu2GcLNdCXLuc2LnWMMLiOVL9+As8Xt5yC/2Iy/Iw1f/hRvDpVl/EdB4PNTXip+dae0Z8pIgtZ0yiDT9TqF+zcegggj3F/B32YEzwGiVyH5px6XF71bOUu1mghfnoX7etHVqR+sZXbGu6IkoW/DRMzGwNRv41IPldRvkoUSTYZ7gvYkmqkz35lyfOpV2klQxnYxH149rnfS+SvmtusLbj89GecdcV7qYh2yAeNuFtxOPn12UQEw/R4yukfIL/251W3zpcxNMerQOYqRoXbqni4HIN0BS/FPd4a1ynlRmfkQuCgzFqgk0FYcctHdsJhrg7YtjG0GSnfhOXjDyRQIfwAAAAA');
