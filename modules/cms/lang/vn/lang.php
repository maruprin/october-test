<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
