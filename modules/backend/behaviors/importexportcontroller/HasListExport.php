<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
