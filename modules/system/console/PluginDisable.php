<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');