<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');