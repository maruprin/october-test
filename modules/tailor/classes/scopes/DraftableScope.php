<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');