<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
