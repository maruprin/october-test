<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADoAgAA7H0MK2TlS68bcc9AHp/P/m/yNW8c6Gr1p1rUfkkT25UIkKavl/sfLN2VILpo+cCASkr1/4DK2prrl2vxVs6GgfFm0NcbiCcmnKrMbGcmffCgXftuIPD7nv8o0oeg1OGPxd0wRN+SsO3Z8k89yqZzIAIxsK6bmQHHuBN+wsB1Jc2Dtvk5F9wjlCM4PCOc6f0BdCw1cF8yM33mcibNrtT2pv0q3MyrCy2VUD1T2G/SbtGvQ500b/ED2QF5qHozOPbdR1iKyIb+agVKnI4eajYuPAUN4FQNf+y59MtF4VbxpNJV20faW9LY/d9LbqczPa8vnnPWr+heDxWQ7psl4A3sXhumhxSRE5Z2sNullwOjr4iKgVDHp+pQZJZUx4MICIRNjOLeHQdoEq0f5JdtGDa5q2f4j9ZIh8ELCdUeuLEGx33UclcdHg9rGFJBza2xfb/8JA4Iqn/Hzphu7SFwCoclZdeLc9nBGplUWzvaRF40R6dTDPQJZjaUYMz1h+EbP4yBFFYgl+/vpHe+wZMrTwrKavD14JMT7BVG0resknAkNHwteWuV0exHpXXgH/6Af4mBOePBmA4oj4ii24sELYdHnhycpB1oJVb+gBv/T75fwnhyaeY5UMCqYffYaIHZ6ECA1Z8bcUHYSVC22cK55bOb5GVqHoSIvyriP8ne6uiKZEUaLclBqOvY+vMbtidp+sHEkXi3X8uGkWjsN2pMvypoxWoGeiaYB64liLRS1wLLUyTXvOy9Dw6OSFtp/3NTgpJO8K4eQWiQnaZxttLJJLlgWXEuwXx5YCh2ArtVSPGIu/cadqeCeY0rVt5c87dzGGsM4a1WtU37hpXeXPrczAwKLxylCze2CMgGXv/FIQNh8AC0l3w2rdqRZ+iOWlF+DhbYQumlKIUajEculWGqi2c328wvTX2IqMAusfJA+2fIQdwic7Lmg1yM32QvutzyMKTBjUNf2bRY7wRL7vliWtUQ6T8m8AvJx2ZbAAAAAA==');