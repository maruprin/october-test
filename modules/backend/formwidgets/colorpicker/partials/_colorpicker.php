<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');