<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAIBQAANWGzYh9z5ej1WZQPMr3pT5gX6P1vM/popSIRoO4PGJoO/qHbT9dDkTM3RXkfHmHoqjNrVwkRVVrqydF2CFvvK8Qm3rXAzlN6eiy/NCOAE8df9hqriHcEuaHjuFh2ns+OUtrenroV2Rh202wDxA2C3PVkkafGmpmzn54lfdSV8kQdxNc0hGwixptBe47jEenP3Nx+bhRPYY+Vk2JztKkdGdbFHER/KyZqhEfXtSfsIPIMuST/QRKwuSPHmD/o3QO3iyMBvKWKu2b46sZwjoU+37uDKl8dNXCFhj8RzyHDwi3yH7mxdQK7GU7PQ0x2tFLbVCyFiUrLUN+oy9y3ocvJycD+JVvePTHwZ50n9ebYYFi860RuHjTex/eX1VWptEK1/tqnR6AgYb0xKqCbw/1z9d6yh2cwyN58WEPH0kcjTfM/7H+/Y+DsYPC7W57qsqQO1B/tlnyie9OAYcYaWEfo5jGThRVJStDkbdPqoiuwiIg7ttxf4DHtM5RKvMOhmnY0EC0T1hzmE7lFGd9gtovJyYToPvD8DvH35dNlZ/5C2iFkFIxg21lRxVQ76+J4t0wwVc2er7Jj0TZ5Rz8Qeevoj2dsANArcL1BpSnfoOdZdffsCT1Bt6YLJ3y19Ya5OtlE0G0dyoejvnEp5tG0DMJHFmN4pia1mW9mzYjJTn1xSRjBX4N+MkmIVCly/odudgFCxIwzhGBOqs8itOJJVHIHYgsBF2sE31f1fHW9zy31GLFgM+g+k1a7W6YagTLUZYWlk7Mx5o0sDcW2jc9nSTBcADbkDPa+YzimB1EP8gzURmVoUhkBFYgyvfSWdpYBHwM36Wj3L0NFZZV5FoNaAhUcXd/EXhKODSZLHzoHbp+XwjnwSJhYoEGhKXJIcmrdm18FFlQpnuuUwNyC+lKcdXvICK52Oeiu3UDUTBRaOO0kDFk0oBKI4kQ429GA3CkFrV2rA8J+dxN8K53PlQbSa6rJwJyu2lCxvC/AvL/9P+s162XkBBxv3WcEXRnWvw0C92uMga7WNJ8GgA0L4vdWihAWZHoJ1BeuRrpMrItEWGk1b4Crbh0kW30xsZaq6RVzt/yZs13bYb53xyamJUzz8onAsW/VqdZPgqP0JhD6YoeS3lpD21V3sY0V6sUeqzy+tXSu40bBI8tIp9fwGFABBfxVYb19v2vmrw3iuXDUDgrZOR1ndT5Y5GX4/nTwjGzO4MRxwrgy1SwP3VJyM8wFYn2W0YgLfxBZiSsoFNX+hFDbhzjqa0AaZs6wSpD8pmlwUvJNXORwwuxijMxwFu1Hew+eutDG3r4BwSdiwg014YFODfuoaYm2IA4Dgdvj+timcbythCSx+w8/1+X1TUITYXuZabavY5ApYFOa6Njr5Xxk49dkKVDdSF5uH1ceaIexhMwLP6jB0g5TNGvmIz7vZPrGLZYkC7ciM1ihcnLJQgfeHSQp/hk749qnrNzNBnYKCO4J+fLrTN7wBOsCjMf1ZYOylAdPRbO4UfUS+Uno00qGQr6L47Xd/9wTnAZJ3N+Rmyt04+Lg2ECcv31iwOg69YOMcpCka30F3BchXMv48+rqy91UoOIImpD2tYGBXGXeJEePXsYqgWUL2HtgW8+huLwl7P6yXYl1AOStzJ+2TPxOZpIU9bf0mDYj5FUZV/2U3iUwXP5Pi/Vs3AIC0cHOLizjPuTaMLtE+pZybcwr+lLjxykeTlIwBLIXiAAAAAA=');
