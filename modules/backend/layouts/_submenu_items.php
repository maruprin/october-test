<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
