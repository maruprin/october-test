<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');