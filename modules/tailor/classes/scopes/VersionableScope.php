<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');