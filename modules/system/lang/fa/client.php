<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
