<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
