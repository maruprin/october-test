<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
