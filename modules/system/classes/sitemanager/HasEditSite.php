<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');