<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
