<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');