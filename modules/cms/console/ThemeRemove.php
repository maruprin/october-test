<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
