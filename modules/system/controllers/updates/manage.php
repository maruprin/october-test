<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADIAgAAiFICrQPFOhxy9UVjET2O5XAXCjXAujiu/sY2GUkeBqGQasr2oFJUyilrbS9OM/7LlQaJ0mlZScIzqaMJ8lBDdY1g1z62YN6psy4eBbkoaGxWM7JLotc9T4Mt6pp2pzRY4hMaKolu9P/MHthZR8WVnRQagJr3KvbVhrH0/EvZUeoksZUvWoeGBUqmzzvqY4FZYjjiawRIF5YHVgBf4SWfdrBXKILGRP3YutVMAhzpxP4iS/xgashwGhvpm95ycqlX9a2DJHjGJYpkMS2J04azQ1m6wXA4azHTBaHhqcvb8BSWCCUgyoPZ/IQQn8KfqmFO4squOgrsZsWtgoc7s1NSypiGT1P2PMKA6K9/yoRVpXrPCXb1wZhaMGH8/BkH2fVdtbbNY9wYYZAl7PMgIGu2US1m46bn0d84tXNLAt26OLWLON3lHp0l7McAv4eTxT9Z9lcoz0xB4PvwRiqOXhgz9Pm1VtG9YiH5XNDKhO72bgXKTZaTymKqwFKlVCgHTmICPvL68WlgSNGFmZrl/Oojg4y2loTlMtzIzyNg1zgIpiss2mgxgS2FpEnMhXfEM8vZSJ78uEcDjcntUITbuCkH0Ac9y32yQ/Rb90Zc7Ui0Jk0kFgIKbsOM0QNxlTVYIZLi9HeMf3spBXDaO35MJ/mZGeEsG1Xy+X5pU9WnTvEJSTXrtT9XrbGq4ubP7ETuHqRxBjtl9aJJVG4nIE9BmhZ22a2K302k9q0bKD1n99We8LAazbfJeQtBgh/tAtMFqNyCbIYCEj8gTALi2e4wV/fwm/zotnRRMD+a9cGBhH8Jqn2E0HIsK5G+v53BXzkAWYThGk1GfjQnfnnDtA9fW8/NNBZWGtCishIvuM4/echfgmIVIUHdDUKbZyJLGepTXPbFhdpFjzqyPFFhqV46HZeD9K6CMYAZVPa7brth5IGJiItyGRFXgZK25QAAAAA=');