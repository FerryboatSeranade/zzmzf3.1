<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_14b62dae494d2a91ec09856757f7f935($e,$m){

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
return sg_load('E49C7E5AA86F4BACAAQAAAAXAAAABNAAAACABAAAAAAAAAD/Cl3k8L/AxCfXtwsfPL6vKC2IMx+OBZpeBnQAGYPvH55AJy+pEq62jhoMjrJ3UOupq6Uq9tcs4jFtMCbD2PUVUBQQoqnWsNWBbzxAB22OPDAEYAOItLDXNx5dxXiXlZVM38s8KXUC7Wr8PHFM6CkmGyOqdkb1dTVNZTAszeXj465nNCuMJGSQqb86FhMLYisLflmmptDF3tnOj03hqxxr+YiOxKff6/3vcoPKLVMTFNflKOSA9sMak1qIE5h4A9Ab4J2cKGRJ/liARviWZwzfCUoAAAD4BgAAtOwg95+7o+vIshCWogGzDjMiaVDgqt3ha9Z8WTL4kIBA0OzlHTmkMCNzfVN4m0b6C8dbC11PyLxk6xdua47cjECiS54PpRdIgyIobKC5+gV7TPVb9wSOvELA/QQPyfR6ENo8Nah9bNetrMM8bTvP6ZHoFZZT3+dPQoatrTipvAceS6azLnc6nYmqx8TTXKLxzaTpmd4JBUm0K9pDOM9xuRVHzJRaYKRDp5HisGBz7lPJ0FhUY6YBB/ujcQetTuKmbftFurpAG20/E+iHXgjw/+p6JPyHU7TMd8NOc40nEmcPGJDqupxxSYt/DKep/H20YkcRTrABcN7YEtlGR1LuHx81xOUmdkrWTf0QkZ1kjm+2MS0fJ/48awg/MXjzc9wZVknRwg37WeXjJoYeCVaUEhXAQsFMJdUiuhxAIhAOaT4bNlygC1oEgqeyk1QDZr35ZmK2czDtWnAMnqf+TFMD9JiK7jlHZd6M3b0Mscrsxs+rqH/064ykt8UCmzTSgWU8jmest4rr2qpHcv+ii1OC9ZNCPZmgFU3+CWtJNvyqD+2lGf8VyhVJ53vnLuedZ0RlyWMrgbjVhpuYZwv3U4NyN8Exo4TvfmWIE0t+UtOFNJCVmcpUshvBiFX9ZX6vcYSaZ6n8VGSJNngxLICEB2L+zP3ZMrRaKmWyCrl+/B9KOS13RsKuqntzARZjk4AM4xiiTTV4YGmRh+M3G6rGMCbBvc80bKn6rRMjmacoYyw4WCEMqR/IOXZ/+P4tnPm5/chEAmqvD8AJGxNwsJsazdH8eZHKMH9CkdnpkcE88pNKrKo0ZMeejDxyHQYBxogH8TCRXByUSBnAZuKJKnuif+tTB58b0Uu5bSWVOunDU8lvSPpobXZ273GewqxD+HXGxkXCA4YlNauHd05ZNKMkIPiuy/GyCEk1L4pABuw5+dKyze4uaaKp2gP7SEDcMM7WUpe6rcqBprn+8/IOhckVY2ILKIqNryPQdCuJChzZFJUmboiJ1barJ7NSOWTdufPbcwSBovg+02NoSaFXYbJa2EEZUyTl4jIvLKOUDTln4NhBxIG4+Mf/fjmcUatqNR1ft1nz05Nqf3Ijjv0dtKgZ9WDai8glZCejZd/gH4DS15OTMMUiHlIDI67/X/eSmCY00YITx5syHsfKC91fSF8NjhzKpkGRZtCmu9w25efroA2xErVKR8eXeRvGL+s2lBCYuBmu7YBFTu+4abqqFoJcXN9Bnx4xVbgU3vJo7cU3/crhiHPF9eJwk1386CyPDYU3HQjjPvA/NzGjFkXDX/RIyr46v+QRujaZhQGioymcdEUj6AzDaxRk6WNFVPSiTpgBpyZ6FV6Uep+vZ8HVvgYe79gAK2JGaNSDverR635z5In50mkJraB59vSqj9v0Jpl8n7dJcTgcZiMh3bzpdSW2ZvKDIker+3ixREPeoCa4x0M3CR5JI70nNNodFYQOn8wGYiugYm58RgZ34FBxNqURRD450+Qp24KR7UnT5Db/rNAOIrYiLBGnZLyoCf5P6i0AdxXBX7D9lw+/OMrzrZnbledsa6u1XmxKURgHYh7rRBZwJoyHZ6bb8OsSRdBikD53x3sLCy1xp9103JSLF8wg9LsolGZU54M2ut/vdy/ZI5o6R9rvEl0RQoy6f8lHlPYge2Qh6gM2o4iLJdv14VcoaUqTxrO9QU25z4a9+brfteED7eMSaD+w/RNsZCgZdo6+x74kGEAPmlVEcdP/OUELB1aFC2PPmxbm1GRjl/tMtubWSRo9jO3SlOPSansw3tJeXg5nL2UHIBREBQFMUsWwEulb9baog5sGfIzwPlvicDTjfIz+jzKlCWyAWBw/1y5STDatWzFsW9p6yaKyl641e0XH5szzBdOzXaxttUSKsHdmeMb6IkwGG5JNQofFY0Jn2XYIuTrkTJUa+58KvrNilxWiIjhW5i07tQ8dOEWWWMN2Et3NP3U4M2QTH12rXG830jiIQiHOVa8QArSDTJsF0Cw8Jn52lbmaHnI3xWL1KAPJluC77tiUPTHJu/W9gdh/GesuOCux7ht5qNMyXy6fbYJCrX4F+W1EkOTs6/B9ea4Rxq+S/C0MDs8DTeHRXu645eqG8/xSV5wLJhB6bMPJ3iAmGovfpk2qKB1suxzu1obavmES0Ex5rrNFtXrZJUiIcNuNDqxLhqszp3egFdAXhQo9UtRNbviRZFnKES8nwaX4QeUJOzKm1xJ6+GnTovpUXMv34SxEfXZvr0tzz5e9aGUrKwwo4AIkeT4StMVRsEvwKkI5KoWulCSQ1BjgnGctTYoVLQtyAdmQjpEB/fQGmmGtIcGRgPXWVyWz7Khwaa+K8cJgELGPikzRGEd5EUFFqYb79YoJy47UhXIAAAAA');
