<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAACQDgAAawcdK72xSfWjPBMUEwIS0Zf1RXJwxZc42WYxq+j86eWbxDUJp7G5FFb/FtxQwjfGNSJ+WqGr+oQmmlcqUDCb1e2nReRYtqzklESrP5ik3Iv9yThdJOHB3SZEQneu969sXg1+wnNNM6zmtSOCT9QtAtwU1DvjM9LhTiBE63jqQBup2DCrSE0p4R7Gtr4IjCiOmMHjHXmli47Q+cd7e2stId99giGqxwWNrBVTJ4Q9W6b03XpJGyz7vzx547+D12Q8iduD3YuEi4StCvmNsQWMm+IoJDhpt0ExnvAXKJ0htI8oUppL/b6t8oPWAnHaxVNz7dThm8otr+TamCssD0w/SIjH1Zm4t/sd94UbdAbhP5zRejgMul5OkxHXGpOkKteKscDVVBXimTOfCqcg90jLa+e/s0GDNw6RGUE/STfjl8i7fj+Dxm0c7imwNgYWSXPaoMikiAEVn3imtkGO0FFJpp5vPTHugIbQ0Whmn//L61RySRMtf86XmYhptVyZb8BAll4V/2AkhJzKvxgxMSvnFHDSmvGWSwEPlzhSAx6WGxK39dThLdmqECpKqXMRQ5Gbr7KInnlSWArWa0BwYUNmIZ+ePjkD5UwMkGxOJj/pktpSbeox/ZgFBQDHRq2b9XrgcVxraJjd7YfNNIpjBUYcwdNPNXPFam1edcr19ZjzR18/K4tdB6YRsD9yHxPjLdAvr9IiDtOAMx1muiwwiwUB5WXUu4Jf5EFt+gtWu4A9ZKM3Qj0OeZckMqmJNa0tmx8aWfspr4jEq//k33GTGlW3xCIxbbzvnE/3imgMdm8bEkuc69IFCEK+H//IdIup1IQmwZ7lwtGMG/JKwVu/jR99AixqERw6AUYqkGWQoNI14FHFVdvXEe9FE2NAitPP8KNrNsOJL9dJIIhpd1dbHwAQkoozvDFgLPWXWXRCFtAQRQ9X0Ee1CzWiV0Wu4qdYiV+Tm11TsxBBvEuh7xxn6JeR6mShwnQQ85OPf9QvkzW+l/TqpXJqcWMNY4dElsIKPEs/OgoFM6KzpD+arzTzNaGcbYW6g95CAZNWpcrs7/4f5VPtrFEnx6KBZCN6e2RSi0Ta09JmMFeyHAme2e8uZjBj3jCj/7GGFsRq4OhwJJYKQjGsbVTO6vPN/fk1yFxikH2umpEsAysSOLThWc9QToZ15JK/KvqT8K5Ua+XDmzyMxZ9CE3Ukv5VXirDtyBykyfBuwqXAPjjtteOm1GziSb5YYF5Q97yLlz9sbX8oLIYhV5F/sjXLopqfkIxqoqJuFPthHQUNHfSWG9qW4qvZJ7Kqh/nWxrpH5ITYwSLf4OXozN9kzmS/Y0lm8UVZwy4cGHoC/npRPtQiasi+22gc/ma8izectA2nI6YliRAEG+nBnzx15QzGLsU6E2dJw26dTnJrKO+D2d/q/dIvhjPN60l45fTlQSUkGt+Et5qMRU3MbYM2T4p27jYenr5VoA3IFueDccxnOoMMvToCs7i1EbMn80GrOB16HD/oqMNrwd6ByN3xWYsS8/Jpt/twxj8z26ZZfjRXlI9QfsXuJ0PxbPEYyAaAjeXq1SqAj9hoGtpNEXySV5Goc1za94z6aBRJCUxD2n9Ul0vYfiNqk1+M2fkZVSe6hW4qHPkXmGX5z+xjO/oL0VIof4jQtnSeXX4FsYl91x/AwAYKN3CWSdZFpmHxLgiXkFrRXjc2jxb7n+wEmCrtSZqbwaJ9TMrKSZs2/NC4aGPd9i7r0oMPJKlNSQIpijkuCY49kKSZSS4gY5sNQowb+Yg4UrmIddkaSnxT8kg6S2w+X4pz3R22F3ztZ36CyS1x3B8HeBAM63djBeFZ3ereN1s+5YJL4GYOe4C53yee4D30IJujLplqJTmM/phklil6Zqe5asW92YKFx5IRqZw6biCN3lL3sOKku4BilBj3L35EPQ3GdL7tIjHmQhPt+7PPhMz7wwUCl/qAmrULS3fTAuXEUfRNJ0Cl9J2EgEOKSw4Omo1BfPKV3wfcBqNr/MRFnfZHnYvzTEZ0u7MUFf/1wrVYr8pUlyE80vuqUY0qZXiuWhBLUGIKSygdhFS1eMdZ+giteppiy7mXSVuc9JqnGeKJqvoawqf47wzehAhFj19MxQQ40vv21GyvXenY7pxkI7T6X+UVxiwtN9jS8gidQMdS9nF1kMp2lDHURBvOh8l3AVQA0txop3UIlxhYdbnJzp+KUbIroJ4jj1xJZ1CLHeHYRqvJGwFq3CAeUu5HWd8jzgNomI+1TdFnRJOmgp0EushnDSel5D29H7/z2MhaizWEdnmJEcQ3LwYDeJ1wgXSCDnPLxdXjosandzS4bCCEYGIIrYt5lTFA3R1w730lylihlJbykB8cmkRyBtZjE3Uu8BtBQXx9yJ7sEKBhANTXY517worJJv3gMScx34WFwKUcyHXZjP/+Db/qBICpDaskFrUiuv5gdekG0aXEOULibnj1aU1IS6FiV4dKvO62MylNk3XE+AaMNuw9LTAyFlVUHYNGxpWvUQpJJGeEl8BlhmXUY9cXqkcG4i1U7w5bNbJtpzAcus5BW1gC/igtSzAN1X79ozZ2Cx4qUYVXUqQRq18x68dPLt3npPVj/cIW77c0ZjCT6tZzDJvd0+FKWCuIovkH/0w8WXGlZi3PDZMA8gwmDAYT2Ctp6JX/++kOcrPAJ1/rDD/5rTP5L/ryfOu7Gs4tDgV4mztenGe5jLNEYPjx0Rp63yudi+vJ1rFlqKsyZo/cjvzPOPuk2ETTItVrgjnK8dlGGPhzb7tO6hs5hCpsn9+rCHlI9fXAXJhOpQjkyQ+10z0q0q7ssz3RT8RN1jCav1o5deWwtai6NDVJhPnLxHBn1k6LIdlKjKmuwm8ZaxfG6Vsqf8LWqA0vJY1C50fzI6amEXZl3Z0Xt/0OnQPWMZOKtNKlKvtTGeZF83U1130Ghydxpq+/Q3M9+9YTSeJhXo8DTLYc6eQd72vQQvXnNr5R+BJb7CNTsIempJ3661avEpnqstFh2bJCmqev1o6VRj1uJu5DCjNfsBm9yyodwBbHXzZaZ4IQlZ/USJPyJhb+wFtx6BN3fXyMcDDFhtR7R1wLr1P79BkoE3zQnrwVcDh5yoM8KoKOaMQWf4aEuRcAF3Rg9luY33l1XAFv1KtlbufBys8OmkJJxpFu6/hfGTKmn/+j2NZDKAGdWMrRWfpH0t2ihZMT2PQhI/a2Z/YGOMf+53WjtZ1WAwfa1328Xn/3PHLfQe8T/2Z1nsh677eCH3Vud9tGMU6enVW98R/S5H8QuJYVaoYR6t+4sG9EmYaCACLMaJBRyr0Oz569pj5aQ3mRxZcynwGFzqY6kvB3j2fA8HvnnAjPh12XKr4E9Sc3kpYE63uqDkVmPpxB9s/na6kraToqfsSWcZwJoqRjgl59u6IhEiByMijHP1+VPU1wN2ZzbYTubIxxJ68BJZwK7SNV20JLWtY93jD33buJaY8VWjWcglK9mRASIfX61IbP+xWjEg0Bgc6IByIxApix6eNzLmDHoiKxMrl4z1Z04flmXE2L6ZtGu153yRdPOu76wX1BcBGIwxhIHQmA937Fo9oN4xDepeQ8DzDAC4gWHnPYvwsDLcZH2zVaXUXXKopizX4VeqqdCtO8zK1aSm2KRSfiZOCm/85ms/2royugULVAqBo8x+i3ev5QqsCPTgYn2tFZDeHctsxXl4unMXYFXsHJfJAHFi8/oQr1ECMk34cJ441ibvSCr03Vr2uTR1BlrAwKkwIWgAxZ7SghuYHDlYmYkc9VgEqKALMk+86xpl5A5Jfwk1XM/2loPLaruuKPNPq1UqLDSNTXnN68D4G5BFm6vlsJ07VCpU6vETxIKkQMSYDiP+tjVB3uX/mEk1y1GPe89OXgtklL1fHZJaOy6M1qTWsRVWMKMnIljroelYtTHRNqZc/bGPwAGFMVptJ2/9jYCrwg9yVS92sJSQ7kikfGhI4IOvk5tyjzoEXsyi3Yb34JbCPWBHtlKPrsUXkTi8rreDoZHCSOCwAIDdFS2s7yaEm9rlRzfl6WvR5+uZhmH8JADcFQ8srXdpy3CePInTRJfleQ6OHNIexAtHFFvwd0uvpTcJl/HakAJlSqBM9BqjzsyZPwwNpeCxcZ5F75vJZaP1BM+ti5RuV8Y7YaOnNzOkdDitepytHprEV2IInuKzlUasp9prKr4jjS5CyNDwo2xUnesDBhrW9xgSql2+rur/R3O37+xy5PsSrxhNeAfy/d+4paIsYTmUgNWDUbs6qbIxW0H9jXOO/0hmZOrBUQihJHziH1FhisffdRBd+OoVTgr/8T0Zoa/zhyCW/QcagZWePZ21oepaTqqd8NvLI2AIo/qXvtgTzW4gbk+n0V5VjYlD7XqEOcr32N9ZxKHU4SwIUCrefeO9gn6qw7/StwkpZUvt4eGq5yx5raXV6zuhIaKky064SpRCHvOHoZCFmQt0mvZpkM1rZET7xULS2u8v+I433f2wiX/kqAgjrse0w38Pr6EByVnRL96K071fYzGSCnfRRb6bNAEjoWfl3pHlcvEHpzX6GszdKOWfwUJ4JlpddUCZKfbG4nfzaDsqm/molcvXl5tWz0WvfbeeqdoJtjn6ZT2TUyRTfhkjCsCBjLCp20z5ffs+a4m4TlFNo0Ckal49jusdT4z648v36S0pNt35PBZaL1n2B4QUAqXQxy/fZRqP2mFJneSEDE/1ru/lmQ0NZX2itdeEILYcoK8sfPjdjPrqkC4kjptauThiBinSGEat8NeSzo0EcvZkoCHXSzX2YFQiEhM+YZcWAcG2E4XKPub2MAoiY3lYT91XtpwaemgJc9kgK0xChDIedqwSFmPYZrkU9/bso0PzFdDSya5EKZtwIb3XYiojDdhpcF/5mq6IIELItboJyWG3cCDHeAE4yaIMd3lV+7S/TEFw9EaV7Hif5CoZvHgmF1vyJCjb2+EFThK+m3X+Cp/VtgqQd+YAIAAAAA');
