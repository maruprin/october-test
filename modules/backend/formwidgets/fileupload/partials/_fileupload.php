<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
