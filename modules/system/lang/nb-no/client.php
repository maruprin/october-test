<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
