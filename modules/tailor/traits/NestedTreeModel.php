<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');