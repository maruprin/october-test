<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');