<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');