<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');