<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
