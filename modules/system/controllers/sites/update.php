<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
