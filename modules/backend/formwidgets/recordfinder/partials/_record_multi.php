<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
