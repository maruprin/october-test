<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
