<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAIBAAAQPExBnBhqBiPftzt8igf1gcduKTuVels0TGtLyWnU3wuszn2Zw9TqVpSjsy2VUsSuuq2LXa8TO1czLfleiXaIC3HwKZipg5ft3H1zC5Aybh3DGTxenK1kk6ijb6cCKimS2Xv187Xp9pc9quCuI8VpScYtrfu75Wb8YSTyJT0OCyz975+za192xp/B2m6sMwokTkzMS5zziIj00RCi0OMBd5PxremdX4XVr2pJWTBDi3LaTQeqIFmbSmrnuWdIOsFkkUB3u3Kl2YgfQskZpRB66qxhdmt+6atZeh/c6GiD4L1nDt2Sp13a2NBo7Hm5KlpxYoLqwt4HdlhY8VXCRgrBGA7rC4PfCyrmPEnnlfam6VVJ1RpSxT2QdRsCqurJu10VxWEQrfe3gU+yDadVGDtk3HckA2/xS5xuSjU3Huh/xGle8W2t71hCJzORhC56XkBBDqcP8rEdZe6WtHtrdUD+InK2aMxL7T/Mu2rBjfHuHpD2jsCq5/w802A32gxCNkYJh2TiSm3rU0UaSFM3Cp4DGFO48y3fOUHVyrsCgdrXc1IBXgZ+XPRSSGvXr309Y1PkUWPd6vhb112aEq2yQgZrcs1uIZMHgcNLuQKIDGev+wEb90B+nr88lqWRt4hwWm5MieV6SdtO66aCm9cZOpZy3fBKi4D5BqB69Wnls2+sR7RxdqH86p058oT45EArDW8p0erGhU4pH3oBplAp6yNcfe0BhfLQRM/wNK39FKA0MBYKXbjpJdAFWkT7b4g4ZJAxz1Rcvq3pIshofD1DddnZLROxRwqJ7LE+Zdms6hdh8SI0cBOug2HxaiHjBKaFWzQsKpfX70c6Hc/XgAbfYSiJuCJW2FFXz1SE8OlUVGEk4B3sS/KU/fDmLVTEPTNl5ia4CVQ/Au8OEXL/gFGzrRcydusUiaAMJuo1moTm8DOhEp+0XTGoWdky6aMe56uIGP4hRognI5uMzpa2vDdQCUyJD62Vx6kdJ+awIGUId/ON3sonCGuCZyQMFMnto/PGy7JkLxHC04/lZONb27qev8wgykEMFWWsxKw/k59SAFzDG6DolGkxXNPtePkm0M9VVcEfOsRssm0WyEHKEZLbabihNUj226QNa1UQwz03zLVOR7ZJikzdw9ntk47deJiIeO/xU152DDhxONvwuTN1+rF0Yv1+OZpLBFT+b7noCjYsMlRVhMrRjDwS0KnNBjX39mOi1+68r7Nj8c0nYRIAkjshjMUVl1SbmYt5/ELyRQuPljMcIfYXWou6NvRh9qc2Nysq0GGzbvx0uifMfcrRfEnYMhGF6gn7YcT3KXFQV4fKg0xg5/cOqOUSGRU9BTGb9jT2FqVXucxYi7yjiodgNVyhd8mIqo3Mzv5AAAAAA==');
