<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');