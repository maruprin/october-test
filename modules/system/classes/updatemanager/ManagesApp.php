<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');