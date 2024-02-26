<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_74e1d17f1cd4b60a9d4fa77cb8184dd4($e,$m){

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
return sg_load('E49C7E5ACBE79318AAQAAAAXAAAABNAAAACABAAAAAAAAAD/HazoZg11yw8A6xUfKcmepzFwZmcrWoMU6SOB9qsgWim2BTQZr6I+I/bokw7o5foEsu89aciP+Pzoy/540xZdIBReCxQHLjcSERbTt3501PuDu3NXWCxnRP57S4z5pdSxMBi3IVNUcNNmVKrIHmM+L2j1qOgEGI5ND8oC+dzF5iHr3RIzBpWdfGtkolQ/3eqeP+VytoN5yhVAWPiYsFl8qBK0hPmvixOykIYI3QexQORp+1Bq/zSOTluxqqBuWHloNQVYtHN1poIUKFfKpXQOJ0oAAABAAQAAqBywHhctJF7wuKzTczETgZNetzqUH/Mj004wUYUEmg1TTUEKKKbgTd7X6k3H9CvlJljWjo2gT2AV/ihtQvP6/vZxwhxCF3Vz9GqGE30uy7pIoIzEt5N7ctVFwhGSfV2U2rN8/vXFoWcmCS3NoxG0nta5rCkb0gzykybTx8C8lAzcREYtMXlGt7r04HQ84tTwzUvnHr3mld8z5x6Vj7uBIL2E5u0Y1L52l/HjYvZ7umEQC2hrWHT1eJBaTEnzjFUnDfI2+hU3LldRiOXhTQrWniX0N8doCz78uMhMRMMCvTWaUshLLwRAfxQLLy2h7DJOgTL4meGFXdud4IBpq7h/R4ix8DRVpsPjgY4nJWk1szsiI2dxpEhC/gJ7lCZJxQzcMRUYXVhSUSLOvoYDQ1kDCAtM598mf6BSsqtVF60YuDoAAAAA');
