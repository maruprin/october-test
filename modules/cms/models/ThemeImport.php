<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
