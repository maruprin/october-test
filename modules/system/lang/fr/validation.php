<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
