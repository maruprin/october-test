<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
