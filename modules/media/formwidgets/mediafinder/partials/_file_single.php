<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
