<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
