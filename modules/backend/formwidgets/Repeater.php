<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');