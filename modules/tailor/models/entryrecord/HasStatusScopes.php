<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');