<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAACQAwAAHT8xGlAsphgNgneDoXg28juxlCvnqYnvv/uxilCFdtkZ3lY3oO25ZxeUWGpO8/yG5TV6+7BURNolqkO0BvC7cqH8HpHZP2igV2GtPjJjpmExuA1qh7B+NxMNmW+pv9uYUqoKAJo8jpp3dsIQuN8gUpScHfa7L5mWOBa/iEy9e5thBNtT1zjnl1A2nyIomrjBdoxYqczBH6NIcabN+5fd6i0hx76fo0euCbQlYQwX5/MEPUtIEzPz8+A/GyVOARwTCAnhYGKOM75v9Eo31eaSKJVebWHbi86qsOu4UzuY6K/+c5QXa3bjpJNVlOs86CZRlj8Hc7Ur4+xm15fcYxez5yqp75BAxIH5vRR3CK1rzFkzHvHHRXUS30XWL6gK7Uzjwb+S66Vy96U3lRrZ5vXg/kLmVYvetlN8rjCRfw3k5h75+r1ahpQIwRyryNz1Di/3uLXq5oY7Wpys3T2PbLKxYAH+VDpQWGaHm1t7v5qdN9Z2pcvTbSAPwzcFLR70sn3SViWmVwlyrONT6pr83KOmDf/++69Bk0IsSOzuEd0982r4X+4HTk0yq1j0jLaG0K84qcY4CmC0aPFkJZufVCP7JP2iQ9Hw2key4rV0mds6+3ZL8DlapE/1SnavmtqV/TbjGHN3xlx5/+28OTGhKq9YZ6FdMoKGVknDTNs3aIV9PqW+DLcHqdpMhVQTBg1MJ+VtS8utq1dfPYPu5egKHJXsIW+z2Jxgy9WB8emWYa7mn5D0KPXlsmWUkHo9011+FwosUMCc710p3nmjpmDMOZ1ZN/TMpCy9n733xDuvFQRlq6kTQldGmP8EIQaSPQ5ObKu0EWLJZDlYPszh4Nw7nTk4uVghm+Hp9Qv4a5Ytf+N1UMUJxtPxwGxU+5+hvAGgnvQdQj8nizy0Ggund60H78uwPkAdibVy3OsaQjfOWicuZHLvxBcqu3QdKIX1ovABI2ZqRPKZHiJXB1RvQp8fRACqnlFdSiLIm2K+nwHkpiJUVhc0CUBUhM/kEh1VemS6LxjObAmg2d48b75gOACY0uYJvCDqun73oIo1Kya7xZfUO1MwDcooJYOtx3OzbsmUWlXZk+TccYYzcyp30+otZeAJXD+8vBR6kmVX9iudLGzwyAcQyeuItvQZohQiO4Lvbkr7ZMqtfJzkQIggaJOknhQnbjrl9ThAfuNPYuSKwufw5VywnP41GCY3UMXzpAKs36viAAAAAA==');
