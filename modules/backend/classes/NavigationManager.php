<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
