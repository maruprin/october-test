<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');