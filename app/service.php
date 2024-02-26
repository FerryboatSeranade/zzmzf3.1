<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_89fa8756137e3c28d344beb49c17002d($e,$m){

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
return sg_load('E49C7E5AA10B121CAAQAAAAXAAAABNAAAACABAAAAAAAAAD/z8ibyWMgKcmWlbxWampcw5ijy+lQJfmfioiIGG/+mp+vePtyslRFtpM9e7V9LePUeNwmJG04P1aZ/nFi+7jZz0+/WQGyL9VxmsU93PaPvinFHprzhOVwTXrdO1/cyNn9ydEjshbeWbiAEusJiRO8BpqwysXDg9d0BF1XGOYxAzMz74QGCcrVIJOzT3h+bhwi83zRAbv97Q2ilq+qKZQ6s+uuTcucS+nAKGs89aE03K/4oBO2gGdJKD95FryEzkEKjsqgiQ1J+jxzhCVkIUbj5UoAAACwAAAAReRe/TisnA6wQd83UjtRg40RXIVoMn3eyE9hmrAOKLclwdSRzIWjH/aBHStC8dtEt0kMUf5pPRATN9pJhmGpf1NnlJV0Uyk35EhLofpl+vUt1qiakNHVns/F9i/0zxsoyhZD5v8AGTGb5qdDkiawIT67cGWuuzkM7etoR1CHrziXvBKhk8lcjaTN5bKT8Jo9735K6F9/voURhGCTjJxXYaXHB2ERFjzIaDwB+k4Cj2oAAAAA');
