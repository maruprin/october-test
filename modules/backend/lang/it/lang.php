<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');