<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
