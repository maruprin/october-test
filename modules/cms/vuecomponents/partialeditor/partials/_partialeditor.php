<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
