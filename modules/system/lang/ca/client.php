<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
