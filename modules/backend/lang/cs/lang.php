<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
