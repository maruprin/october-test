<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
