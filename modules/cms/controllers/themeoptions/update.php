<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');