<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');