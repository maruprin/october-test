<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');