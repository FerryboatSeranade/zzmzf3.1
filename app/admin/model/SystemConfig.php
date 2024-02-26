<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_bca909c669eb1134b4ce7b457fc6e14f($e,$m){

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
return sg_load('E49C7E5A443A304CAAQAAAAXAAAABNAAAACABAAAAAAAAAD/t8ktt80x/VfFpQxgZ6zfEZSO5W4ZUS+7EaXz+rPlC5+RNYFVDBwu8tj3gzw+C4T0eeFW7qOvv0XzrMrw+T2csk5ZSNb5l26K2IE+xtx4XS+NVqT5EdUIUeWl62darPIhggvLq54Vhu2/+m87XT2RVtM54qRPEIBfbE9roFh2kX3jNuiDTFI0Qd90dWmm0Uvy4j3TmwJ5j7Snckzrukp20d9f6YbygCezrMl9WStWmgN9gsEVGfKejHqqPMUM5RUuSm0sloLocYgGEgtszv/B3UoAAAAoBAAACXOGnQXjqsQl+KonX4MbmfumKrGK7Dj4C238tqbOf0BKXxAHsXlFPuGzQWCLSu55DXrY+JjvxAPpgdaLxYenmor4ZlN9dfoWeLm17wfjljFOk3H806+3J+s5EMqf+pcrcvIXYOznbxAqOjmDY2OkgiOEDixMZAhaQCAXN1gldyVhws1hOthDIfEqLqDq7SLR1HQ1K2Dx//3tk2jaRwnpFLqdHA8ZQcGSttpBB8TfClFR1v/zHjY0TKzLRew1keEJrkvfimymMRpb3eHphoXCB2mfHLej5MWdwltehbE2kmz5sEUqib2lk/VZN4GYYoYQu2tbsbVU+o86s6uZnYdtMAnDG83aJnutLja9yHNcnLVHqSPp1g4uA3f2e9yRotxAD5BKgEVUG7xfsHdTrIiKsgunKo+udVPf6NFt0nyt6oRwfgfgezxbqohSBdMHrw4SmQD/Z7E4LtqEfa9t3+5JWUmub+k8ZzpitqpsTzPB5ZFNSyW6iLETgcTuEceanj8pAZmyCkk3bhIC3/DgmwUtccaO4PMvNDUFq/GM6Zn/bJheUK/xHOyrLuJu7dqFs+G8KDmAel66bJuWp7l4p2xJQizHLTKZNM2tfbSTIKJAS/diWESRYHjKKtuVAV8DTmWQVBMMDkHqUFnAV4MWmXkr3BWn4d7Cz3pP+XQp19Zr3vAOB8Rl/qRX9A6+QbvMsMKyYbl+P0+mmvao/6LmdDjWnz8ljLgdDE31K7pW4LKKytWoLrC6uNMAl94+gLm1pKkHWfXC62MpuFRTMwd2ruIE/lireTHmeLAWA5i3lJGzPgizOP5FcQaDPJCapSyL2VpGDmsQmFlP8QxV+LTkrsSAnYL+8rVmBt3tCFyc8FN2xX9WzvkrZkE1zjJaIdWxujNy8quEspWk/I2ooFkNmmk1dtibpiSR4GFCOd1EPKuP0DWCMMLKZuYHxWMB+DEKT3iFgbYl+JSSr8KgT+AhYBtjIaO6Oew8LODGfTY7AWEX9Zg6o8wDeFrdvn8B/+127u7USDR/ExZvStfHi75DCOfEwDbUGdVa1lfctIk/TFVDeg8VXL+GNxSt7jaLuMXLXsTpV3cRPYvBvbiVQVQ9vad4DrtNU1okSVAruP4ThJ2GzuD/Z9+i/Ws+LCZy8SviQuo3ykAFVP5L2P4fXINuhfU5VXWcFe5DcsKUo26tgHREoxLMmg/TQF9zRs0f4IsyqGT5UKvb2A6bTHdmlNihbl9uT6yuTeY12KZsxDtGHb+Cn5GYDhEPg788yyWyAQ/h5bVdNn5TkQuRW2JcgwaUbvu0b1LpEN+puoDym4Oz/xBUQonAkASgRpQ/pTUOMAvH6aBSWXjuqEvj8lCwCZDeSCklOHI8mR2xHTkk3HgmrbKGZjtZKgqKy/1S1RszZ9rg3jZldKAw+YHjtT4AAAAA');
