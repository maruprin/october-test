<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
