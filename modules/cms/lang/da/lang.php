<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');