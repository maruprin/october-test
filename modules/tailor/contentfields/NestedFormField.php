<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');