<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
