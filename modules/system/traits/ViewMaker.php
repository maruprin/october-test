<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');