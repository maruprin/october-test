<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
