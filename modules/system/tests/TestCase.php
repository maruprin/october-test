<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
