<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');