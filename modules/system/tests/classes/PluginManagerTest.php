<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
