<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
