<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADoAgAAKtB1B1Z4+UMlxnDgLgvAgrzX6aNHAmYQLsqrVo0DAR5DQ98GD1rfj//vv/d7V/RjmqN5HK1x31RjStsyXeMvI4N0KYErk/YzgjwqJNI0vlVic/jgG7xkXClAzLCHeba5BITXQXV7d0xawcdjJYbu+pUnMM9KL1piVUDgffdaQ7/meV9W1LTCbW/ACpIe/NQxqcl4VkJEt8f55f84EksdxqgS/ZLN+32vPHSTKyS0ow/PabXdjvCVHohavLIK/Jx68xzuOPl4y105UX+fJOkBwq3RqtiZnPO3bQ7Acz2OHBWk0u+0NEhl/UJU2m+ZELinQGxhOjfqbcbvXWVc79Cbvsb/svi1uQUqOYQtcVAOXT3q8cVCvGoAbp31TXZtcDUrsfWftKoozfvQmoB81CTKDygx2rl1alEg99dQnl/H9OkhbdGwgvQe75REIhS7xsouI/QfIqdpb4zTCPoUaRGU2R9Lx5/rTsDCWggeYUztEvdT3BZNyvsHE1lJThTQICHBk/NqlhPSRPiqYx3FekK0IMpn0xjVPaUam78ufcoWNItQnp/5shlP8BBo3HUEpnrOtjZwMfdn1cQrpUgwIzBZvFGNN9zTf16VgIsdoqTaZpOMwGmdA4GHdx0TcQ1/Hh0ya/PqYH0rbxkfmSDxLuNUIRpkw/k7MQPtzTr5B4IvseMYOclC3vNn5P/YuJ+SIDe5YB/71uC832aAmAQ/8NQE46+Df23geHyt9Q3h4tJQeNRxBJ07Klv6H0OKlEGWPO37wZKPAMgIZnWMRc9IGZhtTQ1iH98bxs1i6COzYxDi2AcL3SJ2yQ2Gmec83ZjDuhdRCYmTlpPWYkKi8jpkSU1KcV818lvHhlfaUzwp2UwT3RtDbnEVZbp77Gk5BdKoHgQb55cjtYtzotzVnAjJBlR8OlxTdSY+XGyoTq0cyRctz0O8MA7ahBRoVm2U2piYbaoJKOybkW8nhkjJYeDrseuTu9MJfhdKC3TrAAAAAA==');
