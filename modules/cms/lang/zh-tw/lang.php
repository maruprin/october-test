<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');