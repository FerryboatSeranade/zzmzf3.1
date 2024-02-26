<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_3888179cf7507498cdd69b6f60fedb06($e,$m){

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
return sg_load('E49C7E5A6227AAF7AAQAAAAXAAAABNAAAACABAAAAAAAAAD/RKPT/dZ8ThohxFkrM1Kwz84pa1BJNII6FUup+nQEdDoWqLHWT4bI3Re5J9ZDf2aXnF7C8fIsFmefT0+GCStZTRNYG+RPY2lFwB5sEV52IzWSwcK0lqz+NgDWc1gagARIELhmZHjI+nof1HLDhhUQlr6CORtNGLNPcx2fIiqUDLPpv+ThG97CpwWlOswFPZ8U88bUDMkFrl3AlyKUiFQsFcUgJVzpDrSPDuI9GuHOOzXsa0eI5U84a0zrj9iYKr9v/q7mBM+ji3gByWLEk7Wl+EoAAABYAwAAoE7OUe+fBe1kzX8tn6uk0z7grrLxdmlfTndqZYSDEvqgLMZDbPw9z4HGh/kCzDIvlraTxtglHKPDdaX+ef8ZuwpQl6sNTut8A4ERfN6sBxRofMWiZ38/P6tbFAhwDD9y4hJNEL831acE+UrpU1SWi3KqOQvJ2EioiDXvttCc0cu9TyyPT6ozdyYWMb3ysUcyGyFHRxoKHDm8ZByDJwJwZRPt2EaogTkluFjDh1andhRBy2wIHPC/aHUWFJ5iU91+LPDDU1X2qTflxBPAPXh0T6EAWlesfgRp4qB1kqft2paInGXIwfEspsjClI1ZPgkzrSRnU8rHv1EVqsBQV8pQVzorgvqXIFOvNRD0loFR3IXgFwl6OhROmGPa/6Xn4sDfdJLot44d5XsolHCaqfP2gvl+ywG6n9fyPf5opcCtOwX3dsxSyekFZ6EvaWhl/uESN7Z+o1v7fuEtf7IJQ+BqzDbt6BnbdAfZdAcZhv/DXV2gbMINgwFeqgfHQhliudoBott24TiwHCGioKSR/OerBqGJoF+/R/bTc4LNiA4IYkbO8D7F73R4obkRCWrKuH8ObP5O5X0xkn4cIxQPMp0IlPpFiN2JIe8ioZ0lUn0WSrxwD5hCgQAawhMrpkCeSEIygcpBmpHohAiz0hxgkof/EPO1FYOaBuPkjDpIbVAAuAd7dcAOLx4TElchX6iRgV93E2DILaaBTnpAHjunHzmmhpUZ4J8iE6r2erptf9U8PkT+WpwelRlYy5CD010DILr7oD0wetHULd8lx8ObZessfjIExirC5zxoywhb1lXj5pbR7WBcHMNoDSXDWR1ZDtDCecdSBjIh8vYYhxsIBuzQ7LO54uA5o4whDR/uqf+S+V441SgkzMhadh2xPAv0eVcGvWMgLXFI50J3co6R2jgcXmjSyAZonxsQbZ8e0YKYX0dg4Py1IvADtlrqLECvyYHfllN7zSyS/xlGpXZeanm0BtTpw6BTV3hgomfGjx5Kac5g3I8KSZPtdvzxp55Rc/SdRpHF5YhMca0amJwALe97JDGrWjzM3BmwNVnY/qfXsshvGsvLnLAQHz54zjplaF1xJsPXAB/2s3cdfj7/WfDoOKm0p5YmDbk0lpYAUnde2qeOL4XV2BWZ7gAAAAA=');
