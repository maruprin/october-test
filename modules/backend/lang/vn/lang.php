<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');