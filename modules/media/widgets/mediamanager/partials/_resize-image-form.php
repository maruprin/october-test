<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABABAAANZ39yHQgeqwemnRP1aePd911yegBiLyspsVAVa19TztnhdDO94mT5YTmSPyciD+vvsckgqYfNRhtdEbW5EpErVGg+F6+1oa3yLMEaDEv6F2dEA42iNZcx4CbPCpLuCPGo+TqUbgW0OArZjtS62r5krF5dLSSdby+A8GReeuoyp03WpxCSjz5U2THvTn69t20YOueolE81Qlfbfl7yaoZBlSs6+M3sJ2QRzFAyghdCuqXjZklwnpuP+Mp4nRd+qG+zAEXOx74Qe8yGrvh6vuYORDuxkuRCE72SNZM59GjcBcZkcfyen54jq6WUQY7dPdYyhxEJ9IjCXBEouG7U+lwoxIofU9mNZbV8lPKv+Er3dt5oG97c1PwhdY+4jRvAzJnZeAzCGhcKb8yR0yNjXBH5L0PDoyIJxdCONxNqk88bdAPMTVwVWXCs4n+3pxfDxly61zkK57QGaL5CP/RLEkI19EVEYmu4ID18mvuQ88h7Aqq0M+u0EDn2Fxd0WXR8U1dXCHLcC//64iKaY0afrnU39S73WNAuVHinjA4DFodYkus0IRv+iA3vlyuwgAQFfipTVpzwyANDIrODsz6Z5j8GaCwMggMbHL8FU5wntsfROcWACWWsN1+bd3xT87UFfljAmIw0S0UKnu0nxISTlzrxnRz6zCC8skDy1AVu34BmW7aoGsyGQOFgS8iVMqoDI/SFGkqBpneCzsMdw0unUquVB3zO4BJAiIToWJzmfa2mTZ7O8qInRb8QaHSA42DWWt2zKByCL2yUBMBv4YzI6N/XO/uPZfJRdOcFa0x8G9pIEHY9W8BL8oaS5NytqB0QjTviRuRkA5SmYv3fTbaUGc7pJKkMkCqy5e5+q6YmjfpFAuvzoErRLT2iKloFTFDzVBw5j/aV17O/zCGAchMwjMEZCnLfr74OqhAJEZcHOh1hlXCT6dooPmBiBXOHQSv/vhiUKL0WN4+Dxrf5xo8JsOuKyG2lYj+UlnN0r+7dPZltmNoA8FUryxIJIZGIWu02E7QtwSvZb2q2pF1ezc0Gau3fsyiz42RI6S6pN4OFXcDu8Nj4FZOUb5p64byguxowjZ6Mm0eW7kXSMcuGQo2ehKomxjuaEkng/d5SWL+2ftgiLjJN2pTRzFFJwmkLcb27cR5VM8o8KRzpYQfbQsGshhp8iIG9vGBbf31is6XqddcGPpOqa4j2QSVYp/eSLEgpbbCAo76j6lL+9Slm8nDz7pDtgNENIOMXWecxeMMMHmmE95YavWyraQRrP2R+nweRM52XY7XbzFQ2SvdqtCf9ljwZJZ4v5IHp2uax4FwRvf0osrAW3jqqn2UxpRcVFck9FIMmH/NDJzDv5JOSjIcJIR3x5DRD78X/zY1TdANYA4eQ39rrcX+TXoKUaCe5L3sGmNMcnS9DkXkBkcGCgD8lvSkIv56npHRtHKTEQjvGEOpvd0AAAAA');
