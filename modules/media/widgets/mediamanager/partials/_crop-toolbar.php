<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
