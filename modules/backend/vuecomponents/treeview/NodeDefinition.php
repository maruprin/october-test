<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
