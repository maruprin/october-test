<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
