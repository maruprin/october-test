<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');