<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
