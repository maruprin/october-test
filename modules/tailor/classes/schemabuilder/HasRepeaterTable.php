<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');