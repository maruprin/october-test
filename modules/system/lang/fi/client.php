<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
