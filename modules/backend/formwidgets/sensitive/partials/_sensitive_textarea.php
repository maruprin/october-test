<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
