<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
