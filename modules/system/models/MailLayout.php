<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');