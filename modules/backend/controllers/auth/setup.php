<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
