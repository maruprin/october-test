<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
