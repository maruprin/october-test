<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');