<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
