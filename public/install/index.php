<?php ?><?php 
if (function_exists('opcache_invalidate')){
    opcache_invalidate(substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],'/')+1));
}
if (!function_exists('sg_load')) {$__msg = '未安装SG运行插件';die($__msg);exit;}
//错误处理函数示例,函数名勿修改，内容可自行修改
    function MLTools_ErrorHandler_28ba243c8885729a4832541aefc1ef53($e,$m){

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
return sg_load('E49C7E5AECA18198AAQAAAAXAAAABNAAAACABAAAAAAAAAD/0Kvmm7lEMvajX4s3VGlql2bTJG7QWLKFIKYd+qqDDww2NkNncI8955/NUFIJ+XgqDI1+mJj0Yj05kl3Oszd0AHEwCcbkDByqejolxBH5Dk1wAiwmKQppPIF8EsVkp/BUyxwMP+tH+vnrgT3LrO+VCjC+bNb8scLOinmGFYcTgjZVvbxejtWCzYfYGkEqoX4wjV+DYVbLrmU9RNiK/1nyS88lunaRD4IPHVhvA0ZZOtESwDwba84ZbePD1YQ3y8hblFSs+JdnKVnd4NlAEySuIEoAAAA4XAAAG0JT+EeanvQPLv2ujYchwCt6C3uZB6vRzSY77w94dD/sZFgQLmrv6nj5QBW96sH1R6A1n+IMKdT9/dSuStLp7pOg+QQww6hXmwrb9KpaEGJ9VgrO7XTIP/vifIEalgLxMK2M2J6ZQLmceHC2d/vlCLFROztLkyy5sVeJKGHXpvs5zjDFsKjN/7kcV3LeHje/AW+pEXQ+XH2DFcJxZguR7w+p/95nIP0wboQNiGb5rxbOYo6Vla4yuBD6GGXRlyMV76cxGNpSoNK35Jc01E3lsFACrrjJv21wR6rRW90izDrRkClRZV9ysKn1jdv8kvpfNtVy0XFUkqHLsy8y9OYJqhB5iMabjZd8TFlLSvXbfaFOj30hGvvFCrS7wPTWgpi16Wq+qAWuNmomi6fi+mzcKFefDgxvizreQC7dDP48XSrI/VGuYXVKX7GQeBQPcEtqrC1yS4oi4yqfetLaxVSnLeXU0aiEDfPvsD78hjn3LUf7BOrDwlLxqcro5egs12usVw5h3djfJ+cndkbJ/VB0VE8VvXKtS+LnYY+P7BBtg3bObfb91oULK7umAW3Cj9Lyw86Uv/gUDMR6pbricIhWz118PCDj/ck1McLFtW1UOL7DPgZAdO2cfGjo7VoFOGdsZfwJZ3F9mYZ/eE5C4wmSPc9VMlOeeEeCtOpMWqXQ42iiBpY366XzwZr669JXYc3pCV9FuwNpMtbnq6V0fAbwd9gCTYRe22bXU/AZo23+rQNmV4qM24NUML3+alJXL4sF02NCX7OpwIHjLjtnXOFPNH49me2jKARcpNBo8FHLAyxbooWtHzHx0AfBD7YSf0AnSQO7aoUtMvHEXmXbGBj1N0EBYUhlyRYN5qkCoKfUhiAEjUpN7IwjXORC3GGpASEWEINJUTkQXzotGYl+7w/z/cXkM7wc1n1xz9r06+gVO0qE5CQ54v0flDvmMzmSHJHVUy1CJJJsY94H2dXzBexFKVIyL0ulHq5ehvOizHHhfKLIwrkdVAtGqPmfjiepwyLUfsvFdnrOO9ja58O4nD+857Gm38gJI1Box33wbyf33KBWTPqW2a1KmPLsQjCdMfOEL1jupSK1buLhiwBi0zMWdFcFSV09O2DHirzAt4vGPfyj+334OJqmg1eK6+q9I5EMfq6CCREAKUoqgxCx3rlb+yPdrXj2eLP+LiOh+xaslYVPl1av2s0bLxLVM4u+1zs5YqgGfpxqZLgamgkEfpk0jGzQ+VrVtDIkpCvrbZSURJo5mh8lBP3UoINR/ILrdESKg6GLY8zyaQbLZfUz4WYZ5F5MrWCy+MiVud/7/+4UbCad7BgstjklUsVYxB27rfWwcP9AeH/I/nHYfeQFATvKNopkybvEiuCiOJT375/ubNnfIac5WH+o/QZEhaVfDfMUoSznQSeUEyMA3oSickbHxlwN786dW0rC5qIFRa0hjUXjZibvOdgULLzGh7KoKYjFxky9twfaJSWC68G0M66qd5GZfd+BnJVUWfXYWw8kgFOjsG8qztiMaK2pQNsP4wywerqGdH7o0LZpD9dI2wZ2wRosd7+G3oDIBJ/MKiZg52zbEk8FCKjJQj1bbFil395sM4UFbKph7AHtILYIlqDeiEZomWedPe3EnmTZfHCoTRn/m4yq67arHgP4ZpLkHMFQDAyCVFozZDNonPxcb1yX8bEWX/566yFw2BZqcaXvJTCS9oebG2iz63s2H6FeA6OoU5ITukoGZjCx4q7zbk+hEOSCVbcT+EhsZmBjYbazYPmUM88fwzJu78DAYIcDRyUCfDqT4eupt+so5zITuPt8AZ9C7HrQWSdYm6KAKU/8Dz9MveYyuMC2MiDK1aqdPBMszTfa7GFqNP9iLtAz0w2SEupGM8oyab7QdLX4hETQYGcj1YyjdsYjbG7xLxYYO7MsVudW+BjOr72kRF3tuVBsLtcUebB8xOYVIFXugLvMoD/9bXgc+htvvZn8gz4nGOA4Ti/GBv66AZcYrN9YKP6vpLjW/gS3YpqixA+XXuxamZa3sUzqLeF+8OHFhO/Zna6UO4IdCt3h/ZvV53igx5SStjLhK3TLhEytVZBlRAh+Q1qF9wSXON3qIbg1G0ZmSRcpb+kjwcepSw0mVQsusK35o3qE6YZpyNvDlW6cvTXUFpFElsmAmLYj/1uTl/NpuIcQUnCbGAoijh6POS5xrwRXyPhiichcJqwaXLACmOFobJAgjsA916VIrYYsMUvmGLZb0TjrFa8kSPqKzqO1j8kOTK5RYwTEzy6YtAyoE6l4mgutkcSOE2TZtTMWzAnLj1TRaSYd6bpqzfF+jchuv4YGWfCsEpwcZVTwbPqP1L9P5Y88ptJskWDYo/LWJ66AjSZpLPdQ+vtXhblGzZorGWi8zkTmVIab3WTBnVVD2KPojtYqaIl/dsQalaVRXH/LIpSeaWpjH7IZugrK50EwSD5jLeyxmc+hFLEhiG9qBYa6dQqZ6OHd7b/pNxr3nqhzt/zvJCKO9IvCUOa9JpBsRJs/IViaMBvFQGts1centU12sGyN4Ns0qeXS1TgkMvF51YNTZMJbtuybN3TrH3HEF4KIrBKrEoCLenPCFR95dMWV2dca0CxdjRPjT77SziVrWPtjfluyMv8mHKW4tewCxrSINvOBIxq6oMvyguOu2i0fz9iLVsOvKqUfxWqyOMI8RvsluI88p/KAzgIp1QzN+g5LTURu7zTsJN8tMtWXdIepLSkvD/Q0DIhH9qomnAfo7k9z+vtuQ4Ecsc77Iadz5OHjndxKFJV0OuM5AB8vV1lluF3OJqxBKQrIY91cnw4uGnmOc2rMlzTkZM9XO8PKOmlQ9STgc35Qz3UxR1IntBgAB+NykVlMbv+w89q+uFPd1hAoYL2UuySkaPFyhHCKprXihj4iATwH7qBWx1RcM5Ffb7/RuIicbv/8YF11MQL6dz5giZcRFCNpW/2+JgtjTreShwlgOmrLRt7eMEBV5PHIr/16mD57ME7qeSQePU5TfHK5/6Zkl6SoTfAUTiUe2r72qakLbTFuab8r2Mo9fdB2M1uSn+dVTA1eCWDdpsrT4UncM32pso8oRhZQ8uzmoPHSpkbNfkWVYel+TA6aGk2ovDrUO+V9dvfVOX9OI4VMD/0SKsUucImFpuE+X1xClSHEX7Dxcrn9lEJL/TKQ98CLX2vJ5m6W0ojpc3KYZuUY0zVEGnhVlhnffSh4jNr8ijCT1KaW9WLuaMY8lhx9Bej1GQwlutQBR68Qlt1q4xYba8FgnFcbyyWZEUVs6UU4b+MlUiNbh7fSgnu7vjVvXdd5eQX+vl+O93nR8uo//DWoUbkgogXfK/RSqHVqCRIlpV6FHVVu16eIa1MWSvSSvpavrPV7td2kQ+nfy9MOzK1ELVbq41wqk8AQ0YEvlTg0A/70KxJDcWZ7mYi8hFijQlFGJstFVP2xHSEepSxRd9rr8CP9YGYMFN4y5PaVNBHA2F7pgKHWFNzZPdEz6MOalqy0DDtiKJQcCg9vc+ui9x1mlJqeXpeVRZMLonBDkMpbjT1VV8mXqrOn7gG0jyBowlWi/zELjG4rvZqh21zyzDShhSRR8ZnKuJAdVQeo2/kwkLS5Jf6DWkT8mbEOIA0BTXOmhOsSUEMEwkT/EkF0s7W5G6e/fmO348pbqJvgGd2XpEHpVjMyhHhMlJq3AfO5evOkoHy50fflxzjpD6017CbiuohAskAXeoPrNP4bY/V2Fh/rG3hyG15pLvMxZKP1+FJ5mWGqgzuEdt6CNjgxrQEA0XnzFMaNPXIyMUYvDroQcS00MD48ZBX2HKChY9xPnB4NHWXKTa4xmHIiGILMf6gXPyxVDdinkxJlZ1EuwiKwX8aG+pdHpHk7xbJSd3QWKTSPIdXsp8SJwG14hrxJ+rwQwXXB41nKSMPedXU7wK2GUrCm1AGA8u7DHrVAcsSuZVQcw74zVi5pAYnh10+F/w5/T21U/GHrB+Q1yF6Y99QqTSltf7AG4TzQataR0c2AI/UXK6QTDgQNREm/1M1YhUQcLYzv4IrICLewR+twPQJNiLQwaywm1qIk5Ol8Y1HaRCSbsfn5OhTVzbbhwhtyuyYR6haU2UEh4N4IfNDykRogFdCi/B+PLkuGKTvM7q0PP2m0u6MKgGvy7p057Pkcz1I6ZJqb7/9vZcfo0bSJTct4rO4rAHSWo0o7qHCEVP0I1QnTrLdyIDXhWD375vSmUbdGLY97Y2ZLlnAluYBfRQgke022k6vxveP9jQzNC11YZlt0YFzwYZp4MlHjVUkEFKofriSdSmRkGwwt9p6RZ3Wq7e7FxBLWuU/Ja+YtvWv6pk7I/tVKJugv/4AAYksV/FzD62SdDXz7aedbgvrab5WrPXW/+NZsHwO/dRNcEXtQOnBp666oSV25DCne+FUFvASRFrmSBaCEGA8j2doLW9XewgbTrrtFohCe8XGxflniaHnknJZ/ihfPDOPQ1Zc6b/whfHVBAeouzYkslrMpil//00nE08CkstKLgEffg2mEafydzbSV/wJ1UGGuVhQmotT2xwCoqkvrJEUn9kkCpOVXpOKPssGMA0/5OdPiAhZyiScA4vkyfRCytWvPPU9t5UuwRa0N+vWUVv9Rinp0NfyG1tE7sB513ok0a7rH1J6oZXQDEK0ySlcnbQsYR6tvtVqkYLtxCzR+lQQ5XnfkEuqDyFhTicKL51QgYRtVV2ItY0EHUrJMH4YvZkyJQtvjMhVdPscEYrkKI3kIWYDVmDQZzxTzAHjzsEnzGnO1P41pcmNq0sEs8sxrX/0+eV72C8JvtUE5XOJdfaZ4akwv7S5wgyYOGJ2YKF3jd5BN/I6bJezZb5YHGQch/7U6ssKbNrLYZqANL6HZ7KxadIkH8ZrymYE1hn3ikb1IqMjWBw4WEIvFz3hvVMzR/NNNRMnYMH406OVk9nvZhkity3GtMmKEbOcwPssosHH0qLdSTvSa8xYNjT31u9Lyc8DEbjoADyNPA2YJiaRHN3UQfcV1Xw1wB4RP7Jmg+MbbIMlUOLc1k1m7yN8Aifq4lJwlgs8W10YKOgPUq3CXoIKKM7ZxAXVfuVusCFgSQ+haKdQL8fkPrZDTvux1SeCBBw6e+ixCg38QOGf3kX1UaIryj4RZJb+MlMOMfQaCgeHj0QP6CQKCJu7XxGOPlqZLpgmEFOzyK91Q0qxYXG1b3Nf3hVjxOESSf9sWGhjHY37Dvcqz9618tjPle+Xl1l3i+svyPlJz9/Eh97rniaHZaxcBTyG0kGXVwR395ucOpUDfj0hYtkcRFy+Z/deNCqWs+sWygWlJ8XNBpMxl1dLUGySPGkCnc3GrroZb/LbwQPDWe2ggb31vCbYoMQ17sU+Sdo4QPDh9YHrU7iQxr7nRPVBcjarmIM4tQt/O9icAytocnNtgHkZYWYjSPpGFtYjJG2E5UMA/zb6+PGkE6XuFTIpMq5nfWMhuxpLhCLALqoI/Q0n+Dl70CgJ4eFA6t1WaZ85bNZXmAl5SyX+d1YVQejRwDuP3dEZq8yuHwem3stmwuqX7TmMRdzDkk/Z7oergpSQ4ksvJLkxLm2RlUAarc4VHOQLHbAPWUxqCrK+EGoaQXOkexPQH25CbmiVjFeeSSZ/40rQf4tA8qaOhqP+72Ar4cwNh8Ef4TJc13bgUO5uGBLln3Hzc8hEkIDowq2SM/npwIY4/bZxyJYWfuXMANEs8dzMukSHHfPAhYg3rxSEJGKkHW5DZMoLNKXldtFhiMAtfdOzaQXMimdoWphoob/s1+6b9PsOwOqQGbD3wgpEgsm7eMlS55HvrgeQTcatmUk/gQENe7hD9roBVvWEKPtowSYrdMraMphrZObnsCKtp7O4V/zBkEB+HaH7ivkeQxQ2WlYjXjAJYQHHPuYUbErlMSGJuTHArLN47dsZ42eZE/rHa7Dl3FKXqao11zaA8xNW4/kCvfxMLi5x7+sZOkTP/idap81/WI8OmHv8rR+uiSRFlhTtclrSGKtfsahJ1UqfHHrs+MS8fqjF/MzDo68FtnY8gVklxdXuYfCTjS+2FWA8WeFYIo4UV7MN3wMjaQCvnHO5pWFjuOnOAg90GovwNrQZ07oQhxXPB9ud0XyUIBGyOs+KSiYwZXAMDtUpAbwcHv54NSSwOb4ei2/PkyUbyKdBewxv9ms3vOcIiY2Bw/QOx+2WwmHI8n0G/INuTNxDxDzD0woE6wT6crX99w9YMEKjgtWIxiMCrP+8Y3sJeeBXQBT1k+Dcvu6dYMDghRcKVfJnJXpct+7XMJ5Zy0QVYabcvkgUNlaQb6YBhVTISQ/e0EQcQQOFmYCTtyb5QR+TkB+BDziZiE6swLPki0DGgzErTxHCfJfpnibKe2gphuy7UAzI9ZDq6x2OUnYBy1bhvmjcQFV/uHwE5quFEQdUuZYpxC2J3cT5e5hi8Bzit1vulO1IIdc9PF1415ow3Zb9pcQ+GkgEx+ffbTBEwkMbmXEj0quLJ0s4sth96vf9y8D//S51sFrkEXN9MJhPLiahgHJPmfr8L1pMPMfxLHl2y3w0/Ks7bz99kgC1QGwlhTEDutz680bxySb+JwAJAD8u1fqSsBip4AXZ1fJzy3cXX7P0iPrACxad8YvREbGm3qBBje+gpqBQABUc58QSNPPuTMDYmpbYeK08bxCVsTLKYjXuioLAH2rguejyQpWybCc/DOEenOM09vPgwbi7npJhJfH8E6BYYIlJNgUA7sPPfuV5MUDZTK7K0Yq4RrOsesbBwv22ss5RZZT5NCKTb5UubZlFCyYlL2nSADps05LW7+UzmoA+piUjIv4Yll4k7j+8uqzLiywaGQ1z5KCVaHyc/Agq1nae8snZy7SCnBhWmEGngyxf7XTu4/yhLfqhhKxe4wCRT4Icze8ttjhZYKprB6V7h+gr7pfvdfKd1hyNEzb1Q1mBt5J/L3Uzna8nwy9zPgwB4zKsOKrf5y77eC7fDjnOTsmP3D4cxn6yXbFiDa80PCnCJcUdH2UBXi2nmLBDas2FVMBjrJlG4W9o1xpB1+pDYOgs+9ybkbN4JCwSew0g/TmC85g0jES13Dkv8Te1c+QAY9aSJ+hatw81SNYmLhmmnJbYl4C6fTxuoehOHhX79IVcTcNJRLsiu/aYxty/9zQFjZuSJdgOB1prVqCH7na3D3VezPjo4X/xB/xPpyXtPTg3x6YtkE3a69OJZCzfCO7M4NmlYiTzrN4SfFZh14eATz3HRCyt9EYTgc0kh9L/KFTx+XNoaQdSYNJaOz8kSdX1HRdrpZ/PTFZJyL/Jnm4q0lQ+FbW4EQuTNtFVd5H/ctflKJwsvYrLhhb57+RNQ7lvy/uTD6oBy2o+Guc7sfG4hP+BeEYk4xuEA0PgvsYlC6fCELpKlLbEmjNqQ2dJ+tDP+SVkfNMFhKMmBNlm6numR2jzZ0a0Z7/sqyBS2r4AK+Zx8OLzk3FVVS9W3r9yrUM0juVSHNDOCHMYpDgPQ0lYEdSyEprqvSXx1Sen5zNL9V5I5g7wx2+eoOxRPom8FdTB2Pijep1eVehcfFbM5kJNQ/ZIL2JGrI4I+UbqAmOAvKGN57toebugeZTI1j54GXNyn73VxF77Ja0FMzV9DPl09tO9RbqOXLAAA3+VAXmiLL89I84lIpSeviqcA++Qg0nVFVvgcF9UagU8H+Jah2GncJo1AlWa5x7mHMZXBUFOehnz9X4KRLKB4zTyQ41YXb00L+PUHYqEdMqyYiGNh/UdUpvZFd2V2PsBZ/yL+SIE+N9bQ3Y7U4qL3z/R9tUk1FpRhQl4w5nrh35fbJrcfKcaydR9FhMV0xJ+uNoeooYqlHp5J9vsUUq7liEy4uQiwPy+BtNAxIouNkLLp++yC26dGvvmBv642Z/QrpjvTMpWFglju0DEAK5PlbsCklSI84SHg8WArcP+lJpa1Jz3/uuKwZGsfdkmduk8HW22FpQ5OSpLYGSO+acMjkf8YgFjb5cG3mTirPR+2c2FwkqvnacBI+N5Perp7usV4A4BlIujuucOEjMVigtmIJceH/KnvSpbDNViBZ2J7CvDRJdCEu20fgr0XMuXhXbcgTJp6Z0R04gWf3yeSu38BX86n1zSgLg3kVbqeHdr6me0arxZ+9wS8n2POdJVqIAdQ66I66gvJQ7b3VJkJVBQTbrv1z+qT9U24N4HrUgvb4kRlhBl0UVa1garSJdnxdzdNuPe+kimG2B5X1YPAHkVmm4RaGObKz0J9a6/Y04gEIhvySNyj1o54L3v4Ih1eWb9QfrQEEMNvcVgWXf7szIz/F7hpc2qTANAKYxpj2MwqWq64dRESve3RlbXH54Ho7tDWENs7rNB7LJz36xC0CYNbg2nzpqrAWrEBO/D7MeksTgUNkr2T3nLt8qg1dx37vAU9BvEVG7hA9CxlB6V9nNaNaJBJLtDxbojqUn0tpcJcT+kgg/abKFjAyvcWuQ2RmP8sgp/ZT9IfGqChOq9xL/SFzodz/4PtwBVrxtszYIw0XA1M0QfbO7+2T7XQPIij3iY0nKP2G3FF1YsqPuqWrzbNZ9sl5ztJ9U6RahCzRoLDZFg07TvExdc/OQeN82l1Mp4ViyuuANapyxIdm5GIV+KAKom+jiOEPKj3ANiNcj2GfbGHqQQht4hhggvj/aB3JT8Q/zDrioVDwM6VlaNoRnEo8fQLMg2/pOmoy4EzISGiZPgdw0/2fCkSJHjONlrGiDuqW8DzambHR/hpq256eHqRCwBH1PcxLGjwp4+7nmiCbG/TD3705KcIndMRisRpIDZUtK0J9CHWB4ijUCs6CbfzwOckSQaGHGpzYQHR5aZb8LiXndqukYuF7ECs59QZfQMu/lhoCyedF5a/eCbcEXPcoLeQH8kvdEIeDaE5u9ygWQg8Pn8WPZXyIKy15CC6p5Hwbo2Eri+D73k35rabM6vWrBFZrIdibaiAWWkhLrV2GTJsNNFQHwth+AZJeRIw7TdrTlufKLiD6nIsv2cYQ+yT6vOXb/EtX8wSONp8nQNvZE05RbNRKJ4Odf4YSc1pIaDDX0X1O7EUg9JD6POpCdbDtTsudvUdTmQliSqqT6d5CmojMI64iUwg5FXOgyWBI5c1UYK188ByioorGkxrPTcj7OApoddzepaMAKH2qnprOwk8ClyfUlInLvN7lz+dm7IASnjJ/j8FhnBUsWq/Bc5eKk25crJC43QLy1In1YHZSbyfaNhQJyHdYPCpYVuYsLVcu021WdEq0BtNScp2LPaIlsmb0Zrep41RBDXtPvZ+GRDAEJsQMHyloGuu9+phwMgpi9wLJs1ZTojpFb1arpTwuQ6Sb4mg35meDJ++C6haQmBEDu5t0pZL+rwF13eBTO2a/nJCZmrfOPN2v39470pxaKrMRcFMg23MLdk11YphpSBlfbL47FSsNxACu2n1BPQ7XYDyLMCIMzeQnqgiPrmvqKrBpL616Qp85PTtLAsHp3YxIHzrhzPa3vGKpxKCUgT+PWIFXAL4xgesjAg2Z9atOy/Qyk791wx8o58ZP3m+3PPLYWM/uPbSpLFlFtiS7DD7MD+9hjoNb+um7QXKIF4dqbkYUOkLN5Oc4jMED02rn8Yi/Vvfq2Tikej9HTGJOLnoYA+bvjt739xzuaLz4YKz7fBJshp0BMKx1vy+YqL7rLUiaJ2zhbU4VXipbmcPKEfcYgBLdq6D5lJAqru27N0USrMfWMGQ2yvTgf0mYEpSvhPbr5p7NFuVOLe08cFsP9uR6UmOjTYgt+a9bwUsRQ91C/yT57RSv9ncn6vnyIl1ReS2nMjaAXnhSH+DyeYkKktLcgS/BJJx/wXhsgKDBVcOlc1X8fjjIUEEBEOf6v+8094Va5GI+c/WCAHao1O3ZlIGj9PhM5XZ1GmQFViC4/V58sacg9EApTF+PZwzYJNkFU9e94UXREC8+yE8KAjt/ykaKkqtI6j6W3Oaq0AhddwshLhKdzCEKzT74jGcI3h5dKgId/T7joYueodOcXg2VrMEthEF9sk3YwPeS8vonZxeWEFXNYrfhxVrzQho1D+Qd5b8tu+BDaTrwAGRY0F9CQp/V0DlsQH36Ns3JPt3JKnlQQeRe/VLJIJCuOXDsxCW62CIuf1Nfb4GYlIEfrJi8X1oUkz7pM6ou6kocHRz4lebXAfSST2xdVxq9O6hoskAFsheLvjX0YF0f3IHTj4emadoOkbdnHvL71mutut8/4rePf62D/0VIL+TqBwnmYD0UEbJsOelm4JHMQURSMsGC70KkYQ61a5FuAEyQPlT2vt002bDYRJflT/lIjLAelOhYFkb7iSH6MaCCoyjKDNhflbxfPlJ2/y9e1LrpAm0bOp6+nhAvS4QYV1Mv/XebAqGvvc6j240xq189ssF5ZMlHO3l48jRe47V3F6x4NV/Av+wnNSNcp5KDVgB4BM6Ody5qXUsUvRy2JOpqFhk1885vnKzxUI6GE6DvUgYg3gqB7d5iSDeM0aBgZCEFuB6ryfhZJV49pdE2azWBIJJ03sN8vweIZHbe651yvoqZANjnrjrMlb587/2umu3CEK+AgIKFj/e86lORH8+5sgFMFT+6nRbCotVEMjfnZJcTnRPFhEIMYyvkISw5qV9HVm7iHWp6iZCaAhkRgC1X0zOwZgrVEnHjleDibwqLkrCTvtchnCnpWkXn5Upxmm6Sp2neq3BZE6iYGZWBE5SAYkZH7HIuhGfK22GsKxRcj2gpEUzg7at59q4zOpf4FeU5Bhih4JRoi+yahA4B8K1ac6YQQzhsu/CoXVkgarWR4F3O8Drj9drAp8q89kKTeA1X2temvGwm9WZs/Kt2hOjn21GXSX3EJj65vWfed5qX6srZdjmeys9IPuvroi1OZeRDnxDb3RuusPvmaV9/k/dVjgKZCTrJXyTCdKybEhxbK4zxzH3y7/OrKzaHiakZoIwSBLqM0aeeLDJ6MT3rPwn0FzANZA6GFY0YruWgITEcOGo5MYq4I5n7yJjZcC4w60VsuQNuoXOmR9etU2SREhP6dHMAYXOdWaDYSqXD+eHhkawAZAP8K1acSJLPux5ctSUou0U53xJ7NA26izROIjDjKNQ4MIT2E/eGNo6pgV867zisYuA0yiaul73p5AkW8iRgLwEwnRHZ6exLVnoRVOssLnR2TeW/iRGINgdzEYHLdjOtZ2zwPOlaqNfBs11+su35KvfOS1oGdNRAzIuxICew4mV3/GXU7DFUfOun19hJIYKJi89nUS1SOVotmPeUrRu3VwpoNlkVU6/oNs40NE8IgMB4La7yQrH4tb+QoNQDRG96uJGncVVtPaYnOsDcBwFcGbHUtrN5oT/QRqxLoXSimDE3saaAX4i+b87V72+vSQS+a6q4R1sbp7op1vx9VNlIJzQXUan87BXOBXptq7mikCoUmDFbDe14BCpqFrY+0ALhNzujM2T92ZFm+/C+i9dhFSY+ZIBF9tHasZSM+Dg+IWTrbRTMFVq0Hvr3zMJGjEztRcuewsSonrhx2Mbwps2Tc3gv8LyPEGbsaGwejr6uc7QFwkI86zMdIg3CIbUN6sw5BeUW+CUnzBw8i5VWiPOXxFVVdRKijHQGydX9dqVJj2kPHMk2Fz3HNAul0yoOhIl8V4/IiIQjJa9Br2nbfB5HQtLVTB/Vj6eGxFEHpDAKUgRmF6fGs+ddI2yFPn2cDAoSfv056/W5dI4yuIBvgMuq0wpaN/EcObWxri9mbriv8A4ge+sWYMaCgDqHK+sXN7WULT24edaC7Nycf2ufIphxYSjFeF5Ubq+OZTDMVt01HDRSpxrgBr7ZatFMmy5ljxKBWUoLrQjdJZr5oCElghPCyjRD8Gi9ezxn7zdkG32pmQqgUW1f96CPLsCC0HpCf5QHkno1J1NEIivwODIXDv+zycuwJjCAzBAmMoJqjomqFKaxpE4a343bSs/cwSeyp0kbEiESRJpS4O21dt5GcE0047ZLjT4mj+7+Ygk7lVvX6SPbi08c1sqW4uz3g1L0KCauLw/kVh5bgZKUs6XPfn8ENrIUalvnHOkbWpHiiFbOI6hMDyIuY3vkeu56TMrczbNUZRA9RJ+/rZhPryDfQEvVKnFw1wwc7WVZSgmqtImD5WaJ69DYjSfDNsssecJ/SX3z9FVWD2bNaW2FeGA2IzfRM6f2H95Fgif2a9WadoM/H9DDiQHZp1bpP19CHL8l7AHFtWj6oSyBwUsNDU8Wx9LOKB3R35wE5bNbJHFZPmT8rBb6JI92OXzI4jUqZWv2BLCxDYWjbi4xiW4hGavCFjxkuKfYdD8v8DvUlYPXFcyHu3KkroFIPThYf+w1Vs6cUEyzM6eT8HF57taM2yYZzVJSUTpF35BEhm+pLKf2Bnrm3bfJ9ooe9CmYyzfs6kGXUYHZtLxKvajQkPKLOpupmX8X2cK5V8jnpdJkh7UYDkH2jCSmhjSlS3QH74egC9rOETZ2ZxY5rmvq9Iu+LFZmQP6dQz/X0eM8NPOsBs6QqVGLonHH30mivu0cAYxFrVUHiJmdjvGJ0zUjwCsb8LUXztawaIaMoJ47zGIT6ytD4BkE/bFw2LomTwTuGjuAeyhbnFBRtEQgRk3aNyG7Lkd1tVfmICe4jpExNY2OQ6VPBtxznCdJQw8zwEM8sG5HAHDLdkVQmAIOc6Ar1r9OYYLy5tgvVv5EtKu6AKRuCwEGvTbz+dpVrgJP5MjJgFTaUJ8arJhwk96HaXUgvmv/jcQ6Q03XSvhdXlDog3zls8p6mDmcHqx/G0XAKwKyqgtRGvaqXIg3dmfoJsoqGhI51DxqkUZBXSWMz5R0WekpOP/G0LHKgjXiDUpo1m2unW+AW+7NKIygXLVNO+IGZK7zNjDvQrFVh2v5WU7bV4HRkYLnlWFzmHD61oTeweeMPzkkiKug321FftpZGBdzYlkw+qjcpeP2XYjRUKPDb793enR7wKCNRhF2Sp+OeYifbYP0jYmSkDbwjs8g9ncOrfIOuQ3Dcv510/0q1h1Dot3HVjSxJqQYgT23bn3PbX/ljUqmu4LxRCDM9gmdyA+teTMxMc8m74fpF+hgDS5BOJQ2YiF2+pcUUsJMTcIBYNSTsn9SssJzv6TeAmf2HmPCO0Z+uOnjnfBU2cBXr5eImarFG8FBjzABEH9A4ekIFGNbWR0uii7dwYtaM99HOjVUEd58Nq2cVznOYyx9Q16Jw8hfQZSKjyGaGz9NHJnTfvfs2wm2JxFha6vZ1A+qgJV5EcyORLMpj0Y3uOAoalF56EsP5jiN5wcsS6hNkMzvv20xPuLcckj7KDM9u02KvKDujeHDiGNkTWoAzkT4UGRwbW2Quj+mpj09FyZ160kmjGjLg/skzSdnIEkk6jEyFPWbS6MqLH1BvT+oiu2yta4zCruMesyPzhq399rU3R/kAt2FjeeGhtp2sRPIqgEO8gVW6wG9GfAlpz9wVKuTrXjeZpTXBjeDUpTteo6MAAoDurYvCPbE5uI2qZTcHqls1GLZ8OnSmUOsaYUWuqABiUXKefBpML9erSV+sqEWEpHRCC0YQ5264nUcSX2YpU16iK9WrS27JF/D9MtTdJF4/SRqD4uBIpXBsnr+OiMk866XKxJihclKSttuv5PCVXoX+KapRB8ZwE7fb2oOkyMYHTsTdHBkx3xZilS8artMEKbvw8ZSqQ94MvxfX7ufa3dB3w/95/2v3qg8Xf9u4RbdNoPi3yX0Q1Y62MHmWODEiXZDPdfI1AEW5tpnSmwpqMlhTcgBlmzcFyj21LcP3JYZxKGtvPQ4PRBQMyAp18TTFWsyzVx/qBKqaeRUx+Vlcx/3d1cUpdCwccYJViJa0lutaSU0/FKlbEgu1eEZT/25yq5VMQ6ORJeJQIKmpULazSGD6n34CnEGK2z0UM28w398k6cLFE6f/tphajFXEIpjgwkwfQANOeFXwHxFnYuuia0UV7wjoDmjLETQivuvamvLK+LKQjVyJJFlEwygRLcwKf3IhJdSIdFnqYFOFQrpi6rekLPIMhE7gQyO128sWjtA/IrUm7PK711p5pmI2PbAtjr9WRCgeQOgSxdk4A2zaG+8g6epQ30vDni2Q53Mq6i6M6/ipkgAQ1s5tKzqXCHuoyBdv75ja9FFV9UqW9bwUx7X3FPuC8wVkVK9rjLv8D530KKdilAG1o3mn9Wq3sqEiMLs/6dMdnAQWrPsfjWkmi/F3iLS2Y5xShbi686f3Rb5XcW1XX9qb1buqUNDmtcgVXErx5nsfOKuAXK0dTKIQaNPpP/nntMmU1FKlni8XZ4QV9GfP4Xh9oMDg+e3AX++hdjetMFTryDBi5rVVWqKO5panNu9rvLJg8d1IGoi8dCGoHbzHaJ/+dxregdUEjJ3kD+4U9SEuOUXDnPO/jCH4agO+oGqoKzMSX2JP6Vg0BxiPxGOiAEZ+5w34IFuthCAe3hcInsdSDb8xcLK31NvIyQQDGjfDnqckH7mY1v7GEJrxHvGh851M2YR1AZ4FWgNelSUa7+X4j95GgXUc2d/Dk/RcEszDeWE3JKCzlYejsSOhJlkIWr09QAf4YcUzN/C4jdbSgZxYlxACeOFHXu7YSgsBAjxTi4yVGRCm2GRNlDkg+zIJ3s6uWwnR4P3qYfrNi332yfkQRHeImzUbArl5LmcGSddpIJY2Qr+j64s1Y7Hf7j7POYF8wGiE5Gy1/KKUjMWwYyXZRy3Lp1BZBdyeygMSaVAyLDsyqAl0pHirBxMDK3FjCiy59b6ATkZD8VXbvytaa7885f30/+o3KZOMkrQPL2LSWJ9as9M4qHwTzr9sfnMNWD1LVwIkmBrIrxCcF2Ng4p3limsO13VIyyFJrZsfp0fxwEB4eV2RJwit+hn2uz9OUl4GjWeQuMAoTjciOFJNnJPJX/dGlWbk1o7APLieamDf+OmRPgK24qaH9iiOvpL47v7RX28Rt6F/u/EWYPnbo5umKHaQ03aOpSUkOOUuEVdDlsuWoASXbStDEEkQqUUcWm5zwLrXT447wbS+sUzFVTwOjftRNv4wN9MyTq0Q2evkH4noEp+S/azCjGbzHbWJPqJhuhtDbxbKkP/gPcweWCp20nQQv4E1hRgxshJb7WY/4egCYedz5jAGyTz4h783Hy35VzCt3MuVTD3OWMeO/SuFitfSs5sVehFHidN6fO8zweN4N4TAc4Wo35W/WS0NqSrXCPw6abg9NSLUXJlkmczuXJ8ipi7YXe5VIRWY18Rz/i51kbLxOcy/g3vraTZcE0e1NTgPMks9BOUplW+9727ZpWKChokm3PRForCGRno82QEBNvnfCHBTDkGSkUvnZpHVpI8CrIMIBjHBS4jG0hXQfRVHFtMLe88euEcWUSWdZeIgxXgDeNaSRwb09ZkCfpIBHqwbRAVYPDAPdKMvOfUFBB/mteUbmJfkyEJegMgLsMrIfPJ8Q+Dn6XutjAScdeCl4VTDfhrKuqIfG05HXk0G/0L5w0G6wNWH/vdyEhZDAE4ho1+ozwA4EsWp5HWJ1aC8ORg0zs8pW/kPMyEkLV28LYdBKhHTq4Whu0ioAC8r0CwedFhaTjyNYjXMW1j94LgQCnaUPBMkNAQ5oSAXck9ZFm0gI97/C6TgO0z85vORWtWzVBXvJ7YqSgPHjwMceabH7+1snGi1cO94Z02/EOIQH2IRrmKsepfrmH9SsYe+Wviun20RjNJK58osO+MXmA62Mn+LZCSfyBx3OjdhGwdgASy2wdq/WITVjXydWkzEjXBO2qQgxrWiKVbp+X1Elc/3QwU0wesX75jdVqK8JpBytaRnCxxaORDnokRQURFJeKi/rLXq5OKE4RsDnUu+PoV1SYnnNrHaVJVGgMmQI0PVXwXcLtTQX/SQXAfYQR7XEcAqWrzRWMbyLw0fFLr9ZOLzuYqOxRKsmIwYpBqG3ToSMlKl+9B5QKsnaVurK+yYAEZ3h7IS/JcM0fUNeT69Ddqa7mYEhsuaVCZRUAr50waU5XA0Q/V2g5KkoVElk2sSzzfL1rlDtpHY/FJRyYKEeCsvqUBNECv1vxRrF46pGG24AXr4j6HTXrPNDLXszB6Erga1F8rzpxYVPLao69jDQZiVURy3QPhbDTL4bcPdB+SXepT8Y2snh1bF+P6/XnoMvWh0fTohyhPvIrTpWk79wf8so8nEAzyisM4pRkWEoAUdXdDn9et1K2z6KF2OD4SLWIaUmtJA1auWQdJeL+QuNclSdBe94Lyw8KNHyV+3+fb8bBlgLP/PuVrGBw5eEhHvthqBNOnItulMfq9SBrybaK79K+xR9T7WHvW0f1bWBenkYqtYfLpNkvav9IwAjfrhDiHeFMUcw6yByG+LYjfAHmU+O4afXL0vWGQDvjWTKK+CtvK2DIFx2h8dPKJSA6viB7TK6+q08SQyaFeoiEZl5MBSYy0Fm1TnJZjYSB9CnBDSW6XMQ4lWE3mwnDJ6esWJVtT5EYUf38JHwfbxEvPbl9CYjTqi3FK7bHaWZxH1oqpU7z1MGxJmi4VpAuj34QhAykpXOLDd+WKRu4oFNcoD+jJoN54xQLuovZbuVIgU8Tun0ZlPlB5Tl7qhBG8gSeOUDs6Grl1FGlnueOHqIidtd61M5hJXfKT/Hx5J5cPBwdG84GekR86yGAJXW0XZ+/V1Uj/kqINEVopuE0/Muh3O8sGRHDSbVfATgJBgM896Fht5Ab2cT/yzVMAeS2GBhHca9NAAFlnx61rfrHRUTU9uz3FL8MHL0h+3OcSMVJpu3IO4ZzSafCr9FlkYYbB/NPcdK+UPOo2UoIS21F3phXlPFkb7Z989IkhHUmj9fRdLaUBEde+bevF8sn2jt/fIlXSyYGFqAzAChX9m/25GXNzjefjGc1tPEgcM5VU26JrZGSqSzRvEiRo2QH3a3nmacoERDcRBDe9jUazrlmKvjYMkn0iCq5nsWSd23gDCWrCDBEeDVtxVDSp7uhhqcSt4f4g9ZTMGcxapKvEX5+t7VD/RH1RvQjL8KeJjZ1rrY4BelsAQOuAahbTAhrnfKWVELzDcjOi/IaKLmL1f40uHDkSoZlmE3HuKzKLcdv4IOtkyZD/J4f+CktoyFPuGAyI3Lb45jNrqUX1MxV8Ks/s4wTyZkkDv8dRwWhbe8LMv+pXbA6FqL3LgTLPyJTjXzw8voftctsVzTuo4rShb3AiCFNwsq1O0FUIYu/nL07uEWUiPM/jOG+DwLvtb0ulkK7uO8KikKezr3syzvfoLrj+DeFredOvXwwTxBrA10SR/R3YNP+lXWypcxPMcQjyjXx79jyoymzYTfs4ZiQpog0DTgWEYJmig5Tx2KgP3IhcW6DWrWQRSl+M7IRyshKtjDFnJwAH+NK7NsttJ+bLfwhHgmFrAlwMI5k01TLpTnv4dxzgMTq5iKEz93MIAQ8CbMSaT7TEx+Yc/XunLUcmTaVpW8vXkYz1HK7I+KYBRCBv2H7u3BiZIYGVvXSi+OFDYZzoRBUJfiF5VkyxktTg5d4oQ81XDg0S3EDtkNMsjTrbCfFPAaq9nBv15gWDgnxQGQa/wfaMZabvvi6/weHl0R//pXDsGFK02fKIINbWbQ8S5aN1XWsJTOB9Rp8IImVOp8zTnYTE7dT0uZytOg9SjqHO6uqaug3ROewUvtJr8MqFgl1p1n90uY+Gv0/Ezb3O/UTjq4vDCqj9N8C/IDmkAvRkpm1zXQeAwOdyW08McxFq7Eyn9RHc1AI67gZxcW7CrycuLXg6eBEEPI5Z4bzoEFQgyAbrAVgCHJGhlOgLc9wVSsW0oRg2pug8gVHBXOvezu/ABf2vszUy04j2e/FnaylL3wI3mQsM8Z8u2rXfMNO28p0QP9i3bHFih2zmI27DfTpZFEpnd666zF0ilFsdnW6EsLzNK2kr7+sPfj2TyK5kb/JjJ5KJX9/iMyu/AFXRuzOgUsGeqBezuSmCUMFLnoKYS9sGsxKDbTKA0y46xzZvUe5xrixBSunzAwI2SibZDPDsyN8fCX1AuhAiFYCRTUi99dOBoY0+4gkvdrcn1E+f6Kegh0yor3vZWRv2dukQdo5uLRc6lixweqU6pzbvB4yyfOsAvK2WnzB4GRMEd9qBxqonUUixI9KN7ooxerrZ+JV2dwwSU/66HrlkNPaasX+A/XoOxM9kjYm6M9iEDDSsa1VRozrlmYgLQUf18PuI/tsqVfjZcYQD3TUA68djluBO7rS+aSofz2eSSeBNp+PdPhAd+TQRxm1bStZgbTRzsMedqoEy+I9lVtjUDfNonifn0PUnifYF0uPcoIE3NsTzFT/x1kListb0RpECvtYsLK/7vJZNDHVtgtEi2jpRnW37c3QSNZqSVxyiGSTTQJ4CTFWg3TDf0kLs8Hski4T0XJirSPPxDrjUn0bz3HY76V/ejMVF/60Xckw2LXjz+PUfVspZalHvcjm9mN5S0T5nVr5RfRifmmBO/oNxC/mc/HzzzldlbjPYLWUFlZYaK4szMcF3WR18940VWh55nCzXqP4YflllaZMLKuzWlqytAJO0JJ5KvR5V2S6DLR9Xu8qhlsZdT8Aewg7t509RBGUKxodC+8BA/WfZEqUt0hloiIzuU+ujBHBpwbLgLJOaZIk1eHyD11+qn5eghO3k/lf8d2nB9baMEwqXtxazA17WmcRSoBZvuMYzJzbOecYvUqBNPPZCMut7MXpP9EKU2FbQ8c7x1C2QgH78VkmXoTF2IhH8Dyou4yoi67aIPOBpaNsLxQojqIbEtBH1W6fz5OoJXznf5E8vlXlIbIw97OKlE03qwgbeLXR4WeUavmcDkmI0OukJJnXRJAT9njaSmq9bb8+UVLNbnR01LVexV1XhTIs7pVCufpM5LB7yWBswS0qOtfOxv395bBOrU26Wc4aDPycCn/JcLjj6gJP/8GzTX3Z1XV3/3LRlQIGrZqnmjfImL/oqRCZ4H299IgXNwmj+ex/e/avypXxmyxmE75E4RsoNnnnTi6kXtsGx35lytLo7TaE2Sf28QE0jZ4L2R8H4ESLpaSz4LsixyGsez9Tp13BuHOVUd+AgGLr/FFecJmUbpqAkyBac+6tJ1YiQ54WFzGXZXdNEhExcBx+BSJPSCrzir8MkYL7Fz44PPIcjSpQBlf2SIYyg5SP00kZQaCeXsT2aO0QXfUBxuOyWlNKQPgZXcPsmik+MOSecj7ix8wPmXEioO7mqWFeZZNMIQiKaePDJ//G9yFJd1IIJ7cX238rjEgeILaZopSQBaflC9mgDd7MY5SSxSF2pII+zNMj81gsVd0Uu6YTZGnloXAxzhoMR3PcUh0KrMrRYXD/e4kOuM5TkX0wXjf2m2aFwutdqb9rRXZ3ie1gcmPMUR3QBDw1dClPdCdQcsRttcURWOa7QD/CeW8EUwBdehQI75rU4IdQdiU0AL81Xl4HOrEWMZr4lpQFDuaiDZvqf2VU06QZJNRUn3/Akh7GIu7mbgTkfJbtpgp3HLuhO9VLfhnUer/6YVfqGgNqKvHeoryXZWW2jtFj8TwTjCaOGSFiVX3hDMVyIPSmF9fE4APUAelNFjeNNCiE3YQkiwKDoms8rZ0ZSEfg8l4NIwYeMBVqsWWWE7B9pcr4eSE/Yx4jRjFEMM4y3+ILpcKgiw5RedLBLJah6wlaviEZlExXahTRgynK0aob944DMXmYMRKTkjyb3VEhJhKG95Bpz7rawrpNfPeA/azCFzKA/w3jjctlcq1VRRL7Uy8bS4wMgZ2FwYcgKcB6nYhTfa1AKteg1S0EjAM9Ttzoej7L7SZK/8qlBuv9mYXrT7PwYc6GkiNkFw3H/fvYdWnKv96fKUVJYVP2lIHbIn41Mf1+J2zkz05QhbHPZre/BG+EgQZS4QY6iRejmtKM3E03P2zPc8/CizgMt0LsI5pGXcnyzUsd9qTZNJ3yf9K1yknD/vFhOF0BCryzYXzfwfVTyfjgQmZprwIn77s9y8b1aS3BoS/22ac/diln1YwEEax85n3hy8Bq++SePVZ1wYkyLgrEPMyyz2NfgJkdrW3D95OGSISrk0QzuZeO6WwNiS7gXF6uOwvkojWdp8ViYfBcs56cwzv4cJxcwwPQKRv2Wea7bRxykRH9ELV4WlxChlO1ac1U9w+yZp32q+6ZcojYfDwP5X7JCmIiLngsmJAD3xjbXn8W6J9kV0nhBypomuChbrTq8lvdFaxYzCQJUdn7+6S8waFLx/vbCihBihreQSDndJxqIYfgKqIfvH7668OMRxSyRuOa4H3be3rMaP91iMf2o6IGu7o9qoQTN85Uc1F25U/PE6gXscxc8f1EzIjcSNCaWV4I7t98KxJ+rClx1nNnq4YJP0k/YNsx6NHVnqX1PiU03ThY1VRIWMHCWfs9GNHlj73Dbq1sayLv+Ztvb2yFP35VfDrsaRLq25ckbpzC0R9h9mrjQm3MYUhz9ttIW8tjnDzhtjd4P1FhZxOrjNf+uDDli/QKlhQIEmdFt0KwAFd4Wl2Vyhh7jO7Gp2todqb7+5Z+d2OZOE8Wn8FSh0eDGUBg9Pk/GtZQxwKHukdlNYbROUHAOJVqvMNwsj+pcMCsgqsAOEnAmMinodpzDqOXLvClpVgFhb3ONq3Tti8hIQCihENJQ46Rvv1M6rWwfidzYqSaeNM+vVrZztkA/BgKXgOratZLZFvGhpGnGvB1S6R72JpvKYOCkMyUkZNJ75spirX48m8BBupGQ+w2oVEp+QyPCHPrME3wfpkBdBZQUdt7LEvul1t1dWZlKiooLkkjdXYNWSbhVOYtdtOKHz1YEUYlWV9hpVP0sGHyKZvNquyfYI0k4p3P6v3wTok0CmFOScJxd78H7IVU4hv8V+h9dzalXHXnKqreYEDKBOw9wrW/RgvEhVFCxKyhtEQ8h2c7kACbkVbC+uxHUTCue8DgyI+ohLLwAMO/rJQzsvs1mrCOwc4ah+PjJRGc2TDqYL4zmxcaKqOW6YqDcqQWGjGpf/ZrRnhPbx+TvUTgpk2zkeWG0BfnbwRBkxkRo2iqHbM3tCaHXQyB2Y33q/7GeBbtp6t0qihGO6zrkcEkmbQFy7x+pbrrjU8pzdqq0TowRa4p4rl/Qy3MsQJfwAAMPZUBRmGM67kEWuqpgeNolbcRx1/4DOdriFB+xme34AutAn+/Cpbs+WXzFpn3jFzaxm95wfzhDBmvQ/x91iy+bnNnoAQu8MR8i5Rw9xASGiX1ESwJP4gX20xGAa0aH+vvlGUFkmjP6fmeAhu+PsD2vT79QDDfi1WJbWLzXzg1+ECRCEPL7GXmqepB/VdCBCXnUAWjf11PD/fLoD1/JgU+2rYt6bCcD7SodgnMQZEfD8X9XIFi7QTVc85loVvItBlG4eVCU4oGljIY8AYIqQ2YVURHzMXmqWhQVvR5UI0Fa4AzISyhibIpo+NxAjkdCmFWWiXduNuaRdG7+mLdQWabq2hc7oDz6DL3RSZiSyKpr0Q/Fl9qcWECvvbHlOPX0seDdfV82j+2jEFsdcmQV4x566sjrbIyivm7bZkOJmRwugH9YD4hchrlugdX01vp83LLyE/qv4El+fdiJ5zEDpb0dTObMB1GR+FNHjm16lZI/DDQvSU2t3GbTx0024GBneolWyxY8W77r328FRLvDLb2d4dJB7mlh1ornPYD/P2DV4mF9KrcQWccC41f11X+uUbTe6Q0vH1y7q04YttSuitPideq5BJfG0G8SDQfAS5Ich19D05WjZJ8Zk+6HEMP0YDz9FJ95gXctGX0alXk97295XvOJX8u6ayKbILv8/vp1Z9sJ7allOCEiaamSd5zrsVah5FKG+tnAU9Vu8LFCcpYxdjgQ+dWvLjbEBxS4WAwCrJqxBc60WHwQMn8WFiYdxsnB9/oCvNpGc2mguyrEVX2P3n0oBF7pycu3yTanDZNj0BZFuNtS5LrOwXsTMR4etD+TSJNx098cc5cR3wB91liO7yaeTPbE/F3LXHrc4dF48hp9E5v2WpVCxiIxlSEHt3c3y/TpS5jLcEEmOmzArPCUS6uGK4OU09dsQJFIXlGtnNRWL+JK3bAuUtPr4qRaii3D8CHq3QOCeFR9M/zgkygxPeFOj1jlbjimpYudshUZI4DFeSNxGdqN11iBQLOS4oCkGxn12KjvV484khzJQa2XCgmwGBIRIKfbHp9KYl5Sspi2pDb7YfVBrI4cGUZ2bqBV/0K7OXT8vxfv21m6gBWoHOb4uRHv0t/9o9esplWAHwSpmXq60x0wGzCTXfQXqkTTcvZqAoDNWML8V7Yvsh+m7saJUEc8/Hg5lYuG5U69yWk97c559o3LEBbCj/uCWsUZh/HJRKa3VfnO7g2bU/+d9aOSvYH72y0NSrT7pODNXeMexygvhS6kasBO1I8Xc6JKLxCPCmUd4xAZ/W7QvXd+Pshe+NBEG6dFqSeu3sQfCU5R/zOIuWJ20kgFe3Ki8curONQHkhkDdcWLWJn9+oj/XxhXlg7Re9IIEEdd5Ti7qYag7OsYzyG0tFkx5d/N9NF/3Jwqg63ezmLz2sJv+dDwesNHF1QMe+431QfzPRHLuTLzcsJgQaPRFMBN7gMW9IhgL8sEwUs7Rj/GsHeq/VtY8nJq5DJavBtOLVqqlqkygLSKi3vKCvTrEMfk1TnBQgHqGbxT/G0nMOdYWpRNVgAsXwGaSYUr2IYQtKDCOC5tIrN0WZ58Rj3HVp0jfTHbbuEUFUWqj+WgErNKh9TVzKRmBOTdmSE1AlhDuZzbyNTNtS8qU5pOjc4ND0o5ymX5PXz6GjPBawbODzrH0YJaexZ1spx/ydTua79Iuf+22E8O1YoHca0BiJuYbf1VW3eRBKUFgJwfYE/fCTMa98POxITKz7s4x+MZM7XrRWJMouNpcNW8DfeLwmCWAjuX3e150LhNMLq4FuUJ+3tgyB5AvwnpbZ8cab5SUzbqwwwdchqU7MgyRHMlmKc8/3LNfDuMYhaFx4GVjSuCkEkKV3472PlSFjCLcVEC9+HTJPwwXmFIHfYaWOl1t3ubsbbgSWVc6F6H3tErmkRK4kbH7/6rEv+nClGAEzKAFiMeuo/tkExbadyo9S8Y9AiyaaYvNNkUiVYDQMpfnCF8HXFvkmSrJCEqi207mbkokm09RwwiYU4KSOPVO4x+E/i/3GkTWn/8Lp5i7lRF6wV82DsNHwgjWvfInMlNxYXVimmJuOMknBNx2RUvHCYR7wZsBrZRwNoYIE2zau6oXRB90Xs0GNiuzxxOZqna3y61mlaTS3OnEJHwkI4rKzFWPgAei+8DgcBrOOU5eWpHPp+SXn2cJD0qP2JekN0SKvy6xipBKSuPoano7Vy2M6mPgaLURbgFi7h6spxX4/p+z6bc9OpCxPO7D3lvGUIkUDfLE3IwBsk+GIkeupNMcfqJK2Ohady0/pq1j2JrjE/eHZyhi9pP2fITe6MU9aLRoVcLNfLnSrCel9iLR5C93lFARiYLLLX7wzxHpOOkP8LVpMWImWYsHXzXC0VGD/rY0mMUz0H1JT03rGzLMIqLFW6h1XjQQWEo7PNM6WOSyvoOTrFGPVUmleViSGvD7qgjr03SeqbzZNiXNoZ9gdhBhAB0/zWUGYAxqWEpYz9AvwVPrFdDxdz75PmnVsefOGtek/5Kz9I45bkJ0ztKm1he3KJZ7LL8kmo8WQpTJ3VDOmbThRCIGOCu8fDEkqNJw3xdrj3qdegsBMczN3xqxxm5SDHngpgTjOmRKMiNsViC+QOyE1JyAT1q/ck/rJ2XJOkRLnFeUlfPlWNWX3akdp2wGjXid8XV4fI2WOLl0783nyHBFEqM9iKfyi/U45BfH1Ai5tfrpmALr/Rm8o8bAEY9fZrPvZkhcjFrRICeW8InXS+QSolKna9WLOrm+rk7dyYiNDQvKwK7PfLmxIE6INXQrPUyVSQdbIQ5xOP5UjhDsZauqZ88hAhX46gxMr2TNcUS8pcarqZiDy+Ewbov6+L1DrUP2SvEtGnVBR9vRMnRfx24Ods+tAetpUVWAynE/0kmP69TuTavczpFK2OpVddFqby+u29fZhqlw4dUHq/tijRbQbdj/AHee17g2fY5haWSC7PdR0cxl/k3g+n7iO10ripEthq+M0AvdAHshWfVS9/8o1odUIYKb1DCO5sViekbBP1GNooB+ZtW04kpBRyWdq8kAEmGS71EmV7YGtCIgG92OSE2mmZ04TcgjYYBx2+/bKH2dZ+2EOcTM+8QRUxe9pfrEG+o0m0JwDbId4DKDGbLLKhmC9qgCSylTC/qikEHcFzXBvQpFBECgcX92bQznH3KRybhZQLGcMScSKZQ3kB3itAj3xcYuIocanZQVuTojYTmd1t9eqTnL4QLiu2PRQJ1yFvu1W1rRRU8SbBO5aiLiuDxpdxxRxjERAhp0OfzbYXjeFE0JGSiRgZByKioeZr2kQHnDjtChD+WoJQ42GBSRJVZuKzObOZGRAaYUytUJOlrWhgwMO7w/zNl7RMVBiQoSzb6ztQL6xHGF5E9NH30g2MZpD1CdwkAhN7OfJ2kDYY3TY9K8fnN/VksqbVtY6DPhcd66G2bYlWrZ3EVw7peGjlIr/ZtTfz7+ZQ4E1MCCm2DhhO1RTApUtLGglfyMQwBsY3SQMhcIg2MkF9MajiT+3JbITbJ85iBnjqHh2PcNLCLN25OF1AZUdnjKKm6xPOAsFhXUQw8PzBsuYM2u8RDJBC/4NACkilbyNyK2Ck/FdT2l/VldKsTezoFHfuXAmVUQt5ISugsRVWexvFxsK9gDRLtjSyD5DWzGNDALL2/V+dqGAEPGdIZTikIxS1Pgo/3dXPjK+XOA/Rjh7lx0MpkJ5WQKV47pq2pvey6UAp9BihYzoOF8p5z1hOqkBK/aMclhECcJ8LWZwsbHERhsHhq0ZP6jkgoT2coFoyhvjgCpiF6WiiqTnWQpzTG1w6zfUX0tol67CVDbfF3lzHJEOCLe6MT70UM8KVXEAApbC5EVfb4vPkCIGewG5IdHJQzJOgZq2LuNrkasKRqVu/ug3zMxZoEpM5OCb0WdowBZVLRs6UZ4TSYZcQVUTLGVMRQYCOele6N4U7xbLaOyjRcPKdNkjZDQiFn1QP2707trPOtcC48lVT5fF0ytU8AK6MURGZrjy7xnvBjocXw8DqEqua+pXZS5QQbCOEpRbAfS/dVYu+MtfrHW+HrXBx2hXHSVHHGxHOSzxH1nxkSRWiVarJfGh39+POZWBOff/4E1HYgfAEB1WtD9rCNA3upaLVEgd7crqkkcEORvIczdRGoZaQL4hSRwQBhQAS9kepJU4UQ3xoujjddr60IAIQvox1Pr7fjkKDyz42wW2j/o76P2fb1IOyYPXmF/H3S2rbdPoFcekxIPG8BU2mNNyqf8X6KW8BoGe6MumXNGqZ2emIy1XHJxLxrMGPftWj5XZiUlLqQhlqt0NVsy1NmL7RFk9JcgE5J8iznCbT1oadvGzKecEi+Y2OjtuGz22B6aViwJRS/9/T3+uk9L8oEzGcAjpGaiD4Z24WWs05pf6rF9IOFeSDM39AzjaGKdBntQQXJndTiP0KEEA3d+8BcfsM1qiRW/1GHE5eav1IL7tMEYe5slHzAODR8iFdBIjMgU8pDlIKp1uE5VzstMMkV+ghYCkdFKZLrkQWKXyadhNVoOCoqysHFUfer/jBbNofJWu7nBmA6afnSHZycs5MYZil+oGbD3o9SKqs0Cc1LIgwX/QSQgX1gb9qp0YBA9m4sIgPOn+LGjV0Ti6eDZBs4lPbKqYzxGRVqdO+qS/bamXubB7pd3PHg7/IqgU51jqG7DNmIGd17jUdx8HaQqZSa6z/B+tVwxpjb9v7SJFquVTF6AWkbDahHfFYHxOo5MzgmeTBc6ZYKHwny7DQfJ9ENH5u2sPhRwSAZZia9q3K5Rkx8kR40DE//PtNpjxQexHY8+3zwW5O1MKLTiJF6e41r95Afd0ZmoR5H9hrwNIoPhr8oYZu7j5tpPPkfyY70wtitiDuE6TWbuaqmy/2BXt8oqjeqHOxqb3JjoGGHhMnB31qnkpm7I1htFBp9jsUL8G1uqs9rwhVY1cHVWTKMr3fgFNpPUhnuhZoke8RxqF+L4+DEhqSPoedDQeoI3AAFvuRChWXR0gf54g1SUuSLcDXjwHJIciIGao0sn7urwmjNCyIUTPwFcc5R+ewMJVgB/svQ/oB+MqtglnCpuRQpFyrl8l3mJaaN0hj9RG2c0acqg1i6810dyJ6aklLrogj4ZyHiDUC+DnbUtolutVvaPp2gXFo5gwe6UfrPOcsaE9OakdzfNppHnK1a3bZwV5zl1ALNM/g7UGV2Xgff0QATpvxSu/55cIaSUcYHa6R8xni74srRdktZ2Yl1edrE9rcQSGH5XPSAGDtknS9j98ucr8wLb1r07TT3orpgXoNth6N91An3HjDxAQKZX3Jfnj6n9ASkZK7kYTxkjY8qiJCw0pZ1S/EzE8pGodfA+uTYrWa47DnQUk4ym7x0eCbb/eu1HfOGFOp4/W3UcOOQ4orxPtRXW9Gj3guOU6KeUErts1Cls7OuAVey+o5UwDUgGclH0oP1o1P0kXu08gpTxLhYfI9rRd169duVrySUvoCEWCOKlXfDzKGOkZIzkLjs4UrZiGTIzooW2lwtct+NKdP0rpFLyWh5JXCZY75aXS7BD75IrZxUK3AX8kRevaY50QlJpEwSg8KcFXvqqQg/DWDTYTRw1BcJbV2NPBwZJkFAJjTqOQUFCInBHUJx2kW9ztLtbRnx5Sgl/1WjP9ASgHpBXW2OCEeLNCQWRPfF+Rsa1IPkIMIK2o+IbDBcyDdM97w9ZX0Fagxt2/tuoA2ZF/vZRWQ06iwWhqSiQoQy0orH/R5TN+Ro/WLGHL223IkXxPC86JFnJCMolR8/gnhibhz68UCf1OX9FDHGnbZERz6hQdQWVbpTNDpDW4VftcbcdZuZ+JRRLR6gkKxGs51vjEU5+dLsY8RdYgdiINFa4+wcnEZF3oYqyGtqO6pfVDXnpCEG5QlEAFgrNCcUcAvJv164xbd1q0k7XZFXGafCIPyu1u1DV6MXfcygCu+j4Zq3Qt84zXGWvRVxxwJGCSVp2Qqoc6eb8uKBcHWUkfYlRntMslkgg831wWA3wU5FAiZTKQu4wtVEdRWJPeGcbvz5d41WpAjXfHopvM668vnsuQcKFrGGoHs6mhmOuAhiuQ7zgqXQPCoWcjIiPZEUxjMvdjeB2L5VYP/nJp1M1K9DZDkR2hrPT/o87bPSqPKkIvHx47Fib2iR0SElUYk5Flm/koEMOWN5pRnNMc6gJjMuN10huvGsuhy6o03pOwAfw58HoTp8/txM0YwDH+WJLWCJxIs5WeiqnxpmynoZK0x2Bvk3ktVesJ/2ls8lr2QY44RLlBC49J5+3JWGIBgJwYhpx+P/fOEx1Oyo8QPd0pONgnRbAdAMT0pEo7FmF3AaP3VskaRGqtWuHWnbd6rmrjlXp3Ek/KrW/lJlTR9h1gwnNZRBFhO+v0bMAgtdNLpjwzqK1y+bFy2LGI5nFApMJ8UIN+lTi2IFsESCXpDqFrBI8FK+YIlT9UEZO+qd6vB9vZ59lICHToPsECkYFrx/vQvjYdVKrOKyqOfkp4W07RCrDYfPmycwqSu68oPhJ8pAwVErj9BlWrvLvmucPHaHs5kKUr4Dno/WrQ/U0zGUYdHcbsHRnoRzntonZel3HncU9jNCUSRjBv+jLxz89+/A21a9UfOdnXypFPnrtOKH70CkV5eyLi9rGcHYIvUQR09fA85qw5MUHiNz2odfj4O+/V7p2xbQobLtTa0YpACVmrtqpmEBUy+HejcWfh78KS77XcKN+fnDwVYTxCxwNaEkOgAJ+NcliEUDSruVDK5eWHwXdbKqtc7Gv0aULYBmT8UyFC6OSltO/2U6H3kzGZhLh71lJv60LpKnBrZFhKiUlU69WiAM38Ic3x+tY3ctNx0iUIfEs23hkHPJf5y36u4jMv+gWyz9nF5bT9oNrrAUgjU3Jp5Hs3X+MAhQfn3ruKB8Fe+0M3Fwady3S5IdThp377ZJHbvKCo+A5S3QlOPbAzQN+jjIOyLi8MayELCFQdx0GtLzG9EhXlPNAwOLp6kCeG5VcmUGae+PfXWfMj5Hj9AGACH6+qz222+P4vKCN8/QOUc5is52IePvp8CZ+Dcx7VAnG+9OQEySBCqmfSONzUiVfBoQWWudJu9EBNDaR6uNSYFlhfV8LrmQ8wfjB3G2YRdi5ehZi/DFSfkBPpK0KXwMCbHTY77fvOlnhBeRDCC3sjXCV9dVO4RH7qWBd/ihO7iwbGiRwyymEJ4B8nl0JckNL4OuTj3enicX/qYDmp4ibkPoTEqxH5OIuy+7h/nLRtWm1RK4aMfemjUdgxfI89d43WM3mPa+UClxSn9v3t7vx3gE7X/t/Ja2KZdK+zJBfv0GEGSNIuQP0O2OTcedp2Ql+acH65M4vVISoSZxki9fUO25ypqDDDlxgXwkobQpRxgYs6nCEIZx2AgBtM0BP31l1EXCe0V8bOqEjcpcw/dxBJXN834gS91vAh1Lw21CTyFbo0u6ovzbP+PImY2myzvexSrUWFIN728BcUKYUDqY6NagRZgd4q33Q0TQlPLMOqxV5wyYiXvh6sFCQQz3ArAGEr99wJTMLW5ciW+CNvGWJFAqi1LmbZusqx+76Hu0axpap8lny0SE/woPDrwynbTH58WJh7tF+3jY3pf1DcJOIMTBOG7czPdqmIsq1b8qCSWa9LDk7sDFpWOByqYz0tmzDYhxednlxWrZIyO9sCvbVQvp54cWixM6JuuXvChSDue4+0p5SKFuYDyFtyVKRE8+kb0aTke27sx2KriAg9ZL4d1rArYLn8di8hhEf4oKvyvUQ+sAkZrjfQv5pwIKjI00R9lQ+pmxGP+ZR5MbVztW1FW0Eu/LsPVe5GqhY8WZSIIRA8w/Vv3se93x8f6wEEtmqZASP84f43J7wvw9q0i6NSnN+ERCKvg1vTrriSeYCJpTSK7/kInFiYBYR82NwynyFLSaDDH3Z1ozksUicJqw3seiOvFz2Q809XEzOHbkp4WA534755NIUA8ZEB4nGQO5xU30aIFX09zGCQU2IwncoLXN01Dp868ODf6gEg0ozqUmcPPv20HSR7CWYzJUKOSTCE4uORzxACKhjcJCdAlSoLPD1o6u47D0rXkRvvNvLZUQV1CzBYJ1+ix5pV+npP/YJhFEODEhgWmqC/7i19VblibFUGQUH8z6v05+RLrqUdqb5jTqdb1PBftGWzyRNsIV3sIjFXLFlsFp/7zKiWCu3+s6YkkuDcVUVQyuFg2VjYlK1gUx+W4C53gGPIel3Es1tpQjyyuLGg5Tos1Obohg1pje1lfuT3VQz1AGCUwD/+R99R5fIvdr0FQnEBRyFuKB4MRQ+oHZfayl1j0TQRCAA41mB+FsHr0yXOV6ykUcufYCnuEIIia5rn3PA6K+AJahb4aPjxcZJBwbD7vDBsrzYLded06E8Vy95jilEtjGFFF6mYzfQM55cnGJYzWXXpIrwY+K/Co8OkEaNtKCCIJlwMpZJ24o9gmva5SCxPpf5b/yfNaWU+A3T0ShovSnYzBtfMvQbqadqwhvh1RXgiwBU0lNlCiOjDp74ghle5dSxYO9Y3xY1sCUoYBfjoLjJnqC0Kvgr8SPtVGlrn8RAEj+Mri/jBqJ2BH23G0dQMAFM9FNWXR/NTjXUaZJ1FDWCy+hYSm97US9xhjssB5xhqjM2LhE0UOlgXbWGK9IpGBJghVLOO5oM/EWnL4SHQ+b7Tt/3WJCPqPBzChd/DzC9LfVENYZQV5PStkNlr25/NTUVrcUoZJyy0znCu5rM4gHkInAJ1pT4UrFSeeKno8N99BosFVYaSpFngWDHe+LbnCf36YIzz3V4sfivXpKNG91IRMCzddpsv8/RNoJuOOaTP0nYhNhEgNdbZ5Z+/LrXZg13VpM/bonAibQBR0dMDfmxz+XHZ5L/XYk0PyVUCuiNqN8YN/bh8Y2BVIxl7QqNeNhRKUN7ozpBCeMnY/F4ysm9Psd1FZHP/KSv7vdsabmF0TRPHG34oRIUlO4cSgr3icRZ6hFFeOAvW2GJ4mW3hSl4BVoJ4uz+gYXHOf6UgTvJSv92yMeFWbaWchkgIMZTbZXIz8jUx+fUISybqi7cwAhMCk7swuSxLY6tGLqvRa8P2GdQHD6wjHvexdDmtUXjOLHGikTxtrZN4yS1LsKYeLiD8PgzEiMMK4s43u3z0gddukKNCeHhXaCR05X39R/NxDDeWpO4k1x30aBNh3cbFVVnFx1SLJ799wbhSQumEnNLyUwZwoW/24BWnfz3S9JxjVuUo1ed5V5GGc+8ONU1vjP3NnpEgWIHM5gGaZUYJkteHYnsOQX9WrzdTpjokkYzLDwZaI7D5hbX1Z086Uz9CZtIFf6CbEKDTLiZY+tYhwIGa7pzDs0CHIi9uKuBQiIbNnOytHn9hKXywqJkFeyMZ6dzHoL0dwqPquLtVw5/l2bk+FqKMe6Q4AoRQdwpc4aiWH6GsU0lHOU1r5XcKYlNgDK+OKiLBbGe9rjY5bAz6dYPl4IiBPxjpi8vpI4/8slbohQ9uvy140b8++RZAstAA4R3wHWVFIeKZ7/KbXFqakx0dfSVD7PQBi4FNiNZ5oZJl4wLLz9ZLM72DH4UGUzlk3y2pfUG34vIwxPgFbOAnrG1rP5QURiEJ3m+xqZA3bjMuPnHAVJOJRC20HiLqRO4zh+aTdXErX0KYZG2DwR9wdlhiULobwPtRnn9/AlS1sAv3XqfaIeaW7oD3gQcyo1lovQjgLxB1Kp3S3xXoWX3/xM2nXdXuTh9In0ReLRJCf3W9rHTA4T5XvMSnNMyVQSkZY2PlpKEbydInseZrUaki4f/Ar+cbH9XUSKPJH6xfpSpDejoIkcfzwwbCfDfrSyuqNz3+REQHRWa3qBRBguQKYKdJ6TOC3q9Jb5M6Dmj0VXn+llehFGnzdWJ3DmEkDGK8ZXRdze5SIVtiiviQ+Ea6LKK+BNP6aO0oDAS8QiTK36nKiigQwTTf1/4G5bcKlQ9LDk1dM+qSpDa5Bi/tJd/3fZd6TqR61coY0iD67w5Y6vTCGJtw3xC5TxO6YBewuSJkLhn3elYUuxStIfQJlRaVeXVFPPUAam0l/RBwwNvuE5mswazCfLNiM2HJvPbPWd6clE9yK5a4ZZ2zsYd6R3l84JaEA/rI+B+ZcAe4chxY4kIJywzjGAGW3mJf0vC69pM83zOh/NtqmGe9B9AfDwXbitoA41ooFufPuC+5+LSCzptHC+3ZyCGgrcs2mS9xrxFqCNbaXrRFM7r0gBf69MjmbnDQlNrcVWCwvu8oEL65FoByOycxjEasg7HI6nrgYNQURZgDD0agnT+i0+R/GTQ1Ce0ordJkzJSkymr4YOxa9a+2c38NObd4+1J7U+jJRGq++xflFUf6OB6JeyQ6cOUMSRpUekg1QdrQERuYzBfnsQ9VHE16AsZKsGmxUqiwuJBqhTAlSWXvHmzGCIyqaGZoIAc5KBZUP8QAAAAA=');