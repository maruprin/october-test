<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
