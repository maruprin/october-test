<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');