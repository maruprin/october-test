<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAgBQAAiXeMoqvhArEJHIhLaa4vAaoeIoudKn1YuXH086TjdUpVMqSoyQN+vLDrk4nhpvy0Bf9IFr8bgULEGC0iQ9BMRdp/IzRkZoE1l3ixMLOqJWCEls2sbwFaUx4vaoeE9VbtCUfkuoQR976IjADsZ55CjShCFJ76nZXjWnnr3tpDkWuNimHHHhnUPbRNXdOCPXQr6gxPFQR3LnTYQdiVRxwaJZi4oKHK22XSk3I3EA1jy86uwuNfFB6oZXiBvNIxrqPivOWBkyeu60N2VWnwHhTUsWf8VRY5hv9b+KUSbKTP/3o1ygo7oGbYTdt92lKk0aglMt4cmYbw6CL477zI6sk/K9v2hvp8bFQqfXEidqe4qQ+7nHExZ3f849F3/UXNfin9w63nT6E0zcu7limddGqT9r9p7Hha/blTJyaIcejmpx3u6f5tXXCE1zsiCbWE/Ue5+v8ufPRLxJPVNpq1OSQGnszXiWiLgXFa128R2ClmzPhUCjH6Oa19Rv62GFXA5m5/cy0FPFyTLJkf0htgtbIG7iTnCc8n/vU4suT8AGVsMzq0/BOUcg4Uclsi74dGi6WTi7naqyf97ZjTSKtKjUNiKVSL/VzSSGuDOYnzul5Nfb+rcvK9rbe8mct3bGoFBsHINwqXx6XoOKbjTq2PiTFHuO6AHe7I/lGE2iYrxL7cnltH+UxogRu4n+gJp48Agz/Tft1ltOmk/bTYw/IsKzs1s0gxJ93m6TMov6D8O64U55hFC73U4GYE8LracJ6VL+qwsu3AC1/WnJs2qqokocnxrcQrcm4MpaO9fY8MIJb2X0zZHQ/xf/1avE2/98g6MbPcjyaWYueS5Q3UViqpExmLbmGN6PBl18AjHLFns9d53OZr6UF0lOsarjCIS42bjJhT3TdzrUIICLaPTUb7Oi907GKvTHOrCtG/5Re53DjPMZsJVwwVK2c9kYlk39o2QT8qIfAVZG9uD25odtYP6GFwPXuw8ReY/OgtvnjkOEhe4sb7qJlo6sNdqcLatVyn+RfP8Ym+n7QsMxwILFafD4ak/AGcOUiAXnSH94dSxGezeBmX96nqlDt5s1Tw67cPHp+QMlbJoFfbkdveBuLbCLzl3l8f1RGymcv11uobYEMYih0tJZqojZGp0jxY1nfepI6rOySHl6sgbUYv4E3xuV0YEFfrReGstJ4tPYCUozcFM+10fuDTZrgBKXMyao4IbiTfwLeiLmR/nDF/Pb2vUqUNVGGUrq7G6QBQzcrpktV6CwhyFGa9c9InrUF+f7aNc6LmIgQe6IYuxwF4KziFaFJY+vWxtczBNKQnZM6HqdIGURGciDy8xIplpAj79+Ccx2J9eEpj5l987Wq40+UQngQy3rT2AgJQrl4/otIuDoxRG9StYBqpQYpXVK+TxbLLhxwIl+2MZdAf7ziHgjFHQeRl9QoOUrAlKDA854cCIOxCCA15pBWazuoiRsr7tQyN7F8PmoPzkt+4Fc64c6m2IhEO4hOGUZ66QtpQWDzMc4l8p4TEo8w2WjmSmH1iO5swWjE2nWBSndtnAAbUTHhdx9RWjZvHly6IASjZMLSlttvDL65J9yShenkvr9iI7niV2usfayndH+5Gsddf7putRKokhqEA4IkZ4HYYToNMVv/IvDvtff1S3jayir1wKwo86/4t6ZzFWwiI5cKExR+E1HuOttpNdV/ZOdc0fYsLetCVgNVLx/Buyoy0mnT7Kx4AaqwP3Q6RjeSkF2fz5EOtxNXsVgAAAAA=');
