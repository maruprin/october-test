<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');