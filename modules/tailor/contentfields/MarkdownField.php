<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
