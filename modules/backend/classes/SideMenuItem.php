<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADQBAAAmBzkX2sZ5HPLG5M+q0TldMdN1zSciDMKm4ABFSz3COpGEwRZzfSvfStkilT8S31E5EG3M0r4I3qe61qCK3qU/8kSwIAVXbbS09Rjt2geJGG9JEAiZWydEJk3HcADsw9T3UO5oTT5g7ZyxZxtLxA02A+fhtud0DWHfZDVheMfBLSmIGGt3N+EsqTLpH44+J75eTaLlIW8vCv/K4z9QF9LLUJNyPEPZh0219DVrGx8B91qQJmGTELItCyZoWPlqDELWq5GyET3N33SdGfxaSxYZ4Si+KYiN5SY9CiZGwHFPVHbK4n+2aFocWGFgvDPvja3VzO056mG79h21U1cRbL+gqu+uE9xQw1eiz/Z+oMKEZhzXDzRvtmFVldcsqZPhzXZrlRWtijtA1jqV2uD78UQuIjXCKI2bOzld00YuBusCDUPV2qa0qbZEPP/4USdyPLNRaO48OxeW/q4iMFtYYdISjnwsP7wTCBmPuCoiYYdTpTqAAXwIkpRg3UmhZH/v6LJabk+DtNtsdCiwxkW9/cFH3vgf9KKOH9W00z8ihJoJ+u3FK/Q6Sz6HnjZzOibmRLMbRam8sSq9FR9WyASr13794u8QoFdGc5ftF8kGQMg+Z+8IZQ+u82ICCfRLj4G9G9wTTGVTp3fJ2PRtzIMxXbia0nzku0JTVqD+TswVE9gI84yUnhBubhJHaiIhZpTpB87la+o903Q61FnyfPTWeFh2HfDhtS1CBKzkru335trDCKOt5XZEHDNkfxwEN6FN1WOMSKYHxufJShCRMgPPsPM47izT5fGUE2tj/iDud9BhWu7cA2aCElSfi6jOIvRYr/gboAl7wJb+Z5v98T2nTMoRB+RvSk5c7ehoUP6SQAEKTBBurq8zLltOiQlryK+H3DeSBmtaIM25mF1sABThKNVYucoQpMPusYt/XnvY1338tnBb71q5lAMPZj34Arm/WYyFLk0BaZPKZyYfveCcQYCUQJ8BRfMdofsvKH51bhFBpT7XlTYXYmtUyekwVuUlLUnbizOlYSCUJMn3eMojvyNFCSPYI/W05G5IbHABOmZZljSItljcLG9EPcY0/G5T26fmlyDOrqMWVWXJdQyIWJZGho2vDXRAxH1P3hPa4YwhegcJHk8q86C5XPpLsZ5G1G0i9WTnXzwY+0n3+Xn7vxM4bNwerp6a5A0ZW/Q2Io0owwjxBiQ23gPJlsCnSasHjpl92ju9pm+sAHMkyz4A4Ema2UvwG5VwX1p+tozPVsSI41+ODRCkowHR2dw+5Sb67nM8fjIhfdOG2BNcSeNG6venj4DAerSaoxkRCbm95RHQQ2qKqt36CCEz5lQNIqYYq3Xa1DbNVvF2yRimYDp0+50lNSoyYxBToLktUA6qB6VQFDL1YUt6+i4PYFMTLKjj9zIh23TE9jF4QxuFD3GlOgqy0K3XD/iNMrWoyRGgp5PLbTE3oPWd3jlI+MPdUt2CWPSJ6+6lqrNyrIL8nEOO7qioqjoY8IUm4uQ8oP6QSqEAaRuNpbXil7bs00rQIzKjdnFiex1nHLqey3gIHA0r45uwtAcwjSpisv7ueocGNROSvluFVuSs/yBNAyhFoOu1tCLYN5ERLJbWrhS3Y4ml76XEKqo76PZFV0862QqibW6wfwAAAAA');