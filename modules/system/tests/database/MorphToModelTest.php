<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
