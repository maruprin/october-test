<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');