<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
