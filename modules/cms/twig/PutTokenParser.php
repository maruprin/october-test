<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
