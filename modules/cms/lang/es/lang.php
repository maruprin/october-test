<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
