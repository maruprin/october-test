<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');