<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
