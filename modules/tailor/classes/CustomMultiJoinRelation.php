<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');