<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
