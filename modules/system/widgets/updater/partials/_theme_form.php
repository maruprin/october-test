<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
