<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
