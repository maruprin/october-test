<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
