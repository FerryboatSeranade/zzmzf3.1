<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_04fbdaf44558718ebea54095d80a08e9($e,$m){

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
return sg_load('E49C7E5AAEAEFC42AAQAAAAXAAAABNAAAACABAAAAAAAAAD/57ZkOiBzemYInSw6RuSxUuCazKD0PK0ChNWZ/c4V9Ulbx5qUWJJC1EEJKmiaOg9JxWNTx4KAMklIXa+zpozTZxnH00zCpVcreLm6wZi5Av0SM0ZU72F7SRk/rmHiByw3e2FcfOtTEzpm+IXFjwmQDJMCjQOsCuPki61GT4r24vYOhmfIGcQvOsnGdlxlxD9Zr0cnfrtqytnceScN30MXWpZWzwwpkud8aPJT3aHrITpZ+9AxiRT//L/dhmgP3UpBw5TSR4r2u7CpEqSh5Yff1EoAAABAAQAAC0otzFC27usbehWAYQm9XDNsIZx8E4ONrXZ7yLAX7U9nxpbJ49/RHt2Gz4dkEcPEOhjRgp2/JRRyveZfvBTXbc3btLsms4oJppFHbl0UGnJOwRdALD0mDht5cKuDVyGKEQ6mH7vqDqlKIQxt/ofU34u6sx+dT+ToliXgDzGPzqyRcaWi+CDxSLC770VgoIRjpf28cHGrD7e/vqdV6kdoEOoP5NoTZU7Vc0MDBS7kIZowWKUO5BKzfnGUa02SJSXfYdXxMeV7H+0nU32u2RIlbT76uIyyr69TFIPFJhXj2cXcg3x5EOCUtOh3WS5bfphQhhtht356dHjv7MKHgoguWT53TCrAHd3m00wFkVPE2hfy5I32WhP0ql4+yRbksYC/qk8cgmJXvOn4De2vD0zDihNrWpEVovgM+b5jcDGuOMIAAAAA');
