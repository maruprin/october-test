<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');