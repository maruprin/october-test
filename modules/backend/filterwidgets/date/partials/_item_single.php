<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAIAwAA6fd7Um6LgVEnzg4kMSGDZfE23C2CmafeytsS9HNnXrnsTLnjJA2cMu78jaqWnE5OegF6WBhN2sEgZJ9WcjnVtZbgJ3oSZbPTDjgi6I5FQuEIedG4VOnxS5+xGI6nlaaSva+AiPNHh9R036rh/KuFlifOgptMi6iRLyDumc3zanc3oivHKwzZhzNGYkk+0/7QymtndPjh4FUXHifDq3LtcZj/98EmUe8zROX66ZD6zsWOEVHJUamluHDOvNE/Mo3Xj82KjIujuTXvdQdY/dfDOv7FvVplMfaYx6MJofoeHr9zSb3MXRp6x+hB294FQ050UJYnqgVkhKMa38m+jvXdLoUuBDMA8CmtttZjytCZboqK/jcs8Hor7tYKtQAaH0Zx+MJrQr+uwnG62bygcLyA3SH6UeRsYi3c+GWGz5VmwW8FelNG5XzAQcLrORTmPnPnHnjfi/OCEcDbk+4zM9VhlJuePKF6y0XKsfncngqvGPd2XlcrILWxqt7JaUSNUBYwp1uMs/4fkELwaXviNCvGj6IF5s0+6bXoImo5n3sJSYvCozY8STZSDv0JnCWL72HsCOiAauC0WGaS8e0dUpq4bTFc6nJ/2GwGEmaSDMo8HBoNL1e3Lxovvfj3BrcTH1DXDHpfrw+m6wE581lG7ONW08fAdNAr06lJlClUVi4zgyWXnyetUdLIwFsT9+2NoLnqwSg5kv2qnb4Jhi/2ytKZjATYXvDUof+jYUqlY6yawB637j6mTYB5vSudTW14ENM/sMxZS5Mtctnr+Gxo94G40LwsantD5ojQPWJ6/rC8cBIlac46C5kz/cgC8BVqKhd2ryEDtvXEoq7T0Wl7E7CtteDQbxS5arJPhFPRndLJpLL25mR/CzqVgASPw9BsNBhZzlahozAhAdHFbsM1Uwa/JUyauWB/UomIW71kwC7/1d9ca1kPO2aV44jkuKdN/qzqKqOY4VSoBQAA5kY9JUDsY42kNTmCpAqeHxsGaZGFJj9WDUH/jcTAgr+yOhoyXD1tu9saAKpxrJEAAAAA');