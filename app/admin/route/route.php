<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_3cf84513229c76d4f93b30646841383d($e,$m){

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
return sg_load('E49C7E5A7056B61CAAQAAAAXAAAABNAAAACABAAAAAAAAAD/3bjDwyjwlyRA2BLfwavplsHPctYuQ3kKsN/B/unFVfLOECu/ESTKTpMK2gRhOneoGtEqE+XeZsY5to8Ri5JDcRwXqL7M3BcEd9OEQ5lD6OywqZ3yjt1KDd6lOmRtS0xJNhUb8nZ7J0J26msTgxMu96v5CKkzjgwF/06LqPjuBx7paFsLA609/SYIlW9OJZBL1pNkfxqGy7Mqp6pKPpXUl6/SW9ltHF5z38rFUEdTxyKZcxRFSdUleHcPIBkPTweVbP3+aBF/D+5pruReRRenKUoAAACAAAAA0oEijkNf/F3j3u6Nr4DHZinmy5eUKfUDMzGMgzp7p4n/Fzm9JhiIOKxEV1XEo8sOwFrDALOjuMOs8LmkQb1O7FgPXbmfGla2XN2wP3a32g3FaRHq6fZJq2eq2gS/Tm08+ApBL4aRJqV4ZUxNyjRQvyz49V2YkMEbXi6gCgx1W44AAAAA');
