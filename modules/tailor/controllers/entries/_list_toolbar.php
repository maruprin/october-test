<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
