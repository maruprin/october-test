<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
