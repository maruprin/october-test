<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');