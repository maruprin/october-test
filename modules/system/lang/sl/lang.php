<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
