<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');