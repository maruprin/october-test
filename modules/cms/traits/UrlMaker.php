<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
