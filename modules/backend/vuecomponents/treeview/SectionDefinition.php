<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');