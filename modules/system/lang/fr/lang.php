<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
