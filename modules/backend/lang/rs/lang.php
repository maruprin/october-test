<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');