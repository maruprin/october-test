<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
