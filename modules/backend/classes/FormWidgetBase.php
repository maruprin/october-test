<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');