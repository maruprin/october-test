<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
