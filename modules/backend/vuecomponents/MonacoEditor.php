<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');