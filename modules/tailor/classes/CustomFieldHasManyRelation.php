<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAACgBgAAh3+id5QTd4cKFhkjvPMg8fkXM9RsY4EL0X+HE95oEtWxr2rS76ep2xUFLka8Bp/ZOxrG/FFWK5m140i812Mq8GkBc+jJRPk9e4zc7EyCXOIMbn/wKi17D0XgB2u8wvpLB+4CmqjrxuQTazyaEvn93FpqrG/z33i34AWU7hbzTO/SJ7q3cqDVoWCcWmOeDFYsdSjhKsT630V1Ji0oM55szIYrzXV50XIqxyoCSmmwvtDod9cGDXVFVj3J0NgqnxjhHeWqttkOTnR45+Cbma6Jd/Fual3ii9x73L8iwGX5gIzvcJen07UnZtb79Rx2PMVwQ9JngMrv/opl+7aDjNHZJRxojwQZa+I6Ii+AdFoDHHEJTq6USg2kI6JzxY78TdH96+BnT497Bs/XLS1JVqbZXyS8zmJ6BBQ1wDJsKHz/rPLS+72R6imCg91WoTI5++k0zTE08mYebGkwzl6BKt/2XkkOYW1KjVjP/O+gCKRQ5abrHYdoPBB6GFGGs19B+3yjwdgBy8GOB+Ig4BMh0attpKiRxms00sTJeNlc+oslKgrLWF9GZEmsR1AXj1p4jKJri6RQQIJwq2yQuxM0MIUq1g+mBlwRbHIxKoR6CxdF31cBBuAS3QRel4y6kqSrp2TnsruTbI2OrdE6pkTO5HQ/bdkKWMF+SzvOnzgyMIBdYBd9SMMjxRvh6RVaNubgGo4p2werY6dQCt2ykiD6OLVa513SP96uL520gDnEQnFkJBXNum6esyrtNTLOuj2Bj9w4CLs1WdGavbK26a9baFe2m8ck3C0YOHICNaltxsx7jvT2dONjIyrJEBw4f3VVY0D9sQ761TTA974yaajV3hJBesN0TWG6JqsFklyg3leJYV8+A/in5uAL1LBzzF0mbZLOquvkiojhiMn0OgUPf54k2EQCzmhJhCJI2mxgtQvLEQU1pfwZal8Mz49Lh4gNfCwv/hlCZ1zhEezTLOUiSj4Jxv1JaOxIeAGUcXK+vaL+T6IRNdM21ZImibO5q6ApNsU3vio7E0jIP8Kq6Q+SQn8CAMajiq5g5WyI2OyH65h/WNIQMUWKOMUSQlyHdJw8LndC6tgx1D/ZswqwquRVe1zPgHOqXeXBMN6wvpaDBQmGo0kKs3nIpDrRy8MQN4CbsrZ9fjVPUR0VkwO8rZDZULXGTob259ppM9bgyzCdHNBihOmkzQ3yihRGdZ8gDZUjmviqtjhjvAOgS51wh34O6ZGEbmmw5v4JE7g/z1WLa7WA10+xaGIGNRPwM9aSaF/oPBRJmESeDb1ZbOGU24oNSW81o2gVr5TZT++cdmnl5Um18hZYUX9WIywk6C+Ig+xE3SIgilWXUPAU1jw7myuuiNGmA+eqwld7ePIbnAiWvf81wrt9bBm3gjb5QfM6qLzZ0bKs1bfJ2kUqfQGsPhusj+yURUiGtf47rxSUM6b1TJMbPcf3kM+xVdC45vvjkk7qu8HvCZnCMhAVp69ZM6RyYMyl1Ht/a5DUbtuDq1Uo1GQRskzE19GGGFuQZZeBRb/T+D9OLqeHJLnULLnzwlIdyg+6AZorcCUriPGf/su/tvvzecuOCzVFDC38G8r0F4EjgYQZeCX9E/YfnaHi/exRk5bLhyL0DNJaDs1tm+xedbQnbZ/gjhy/+71zJXNRPznkJpvhHsRXaYWAicCdLQ1dZXO8bLFIvEFgmMoBkeJ6k+ZmW9W3saW6xZxEJZLjIU7+ciNmGxCZB6llNX2LNCzgrqAFOll1IJN7yalkfVTCKs1J/kcdiiDNPapTxuqZTnVb/Zg8RSRrJRaISnbjdI0a0qfegc3Fcra/ZiUcCQZYbmO7jhWBc5EY20WyW+M2X78CWmCm8vqslXdcSWxuue6GuoLQtnFqi0KIPVemT+CgQlzYALv7P7C/95OjlVre+F/qEWt7lUuxPv+V4io0SbSDIASWxxgMKTCgHmRys3ZkJeV4dAry3vPdduS0jjaxBVvReEtKstaQgUs3O3sXjgBgqahjjh45NJOWItrkaWaakX+np/s+C9yyzd5jSAHv0OJvn02KYWTdMSH8UsjfELHqUmwc+21Yuqgzfcs8TZ9Jb1Ou+S5vmpaqrX/Es2HlOt5g/r+ECUrYfffoRCQPtCLJ57kpcHDMdIvJN0OoepbBfN7G5ZoipxowVoAGbF48BUf7X2ue+CMg6PlZbNavps+Q+KcufaxzP+o2j+p5EximkDb9CtEKhs4aqHcWb/6DtV8OPBNV0sjffAGBXRtR10EgxtLx1wAAAAA=');
