<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADQAwAAe2oEA21TmwG1DUAyvgQCvfvH4Te1PCBUZEMWdvSl71fOlcJN6VnQrNBT3BC6cMruMcAzuWZ6inx89KmldR2+HE7A/KHnWKk2QGbFrYWFXPHsFyUftEIcWihIMb4sgrb/SMaDngHPRUIe0Tr6DsJlyhkjcnc+BcKj344ePFUw88Vcattsq6hzd0m4dWHPT8mD9GKy8leiGjXoJTYU3Rmwasnpaa0dcM6nFTsdWE+QjsAXq40SjxmykFPQzbr/fnkrDo3PeIDaHdV8EqdOIMnCIqf3dx5YIdXFe8c7T3K5A8c1CZ3QMjvt4by3LvpFb4pz0GdqD+QgVKf903RcJolWiC+uopq/XW2UQTZV1MlJ92g97wh4VdAAho//wmppsmJrBYaXOki/UOqzZ6iFORyAEgCeFfaReM61Eonx9Ze6F1o/oBJTvyBgCffGnlfOh5v25i5t26+hfxITJOwbtQcysAXInFkPfCEYEIQfu5QARFaeqo1ljuVdUfNxf9S60MJdEw0wSCEPFLfFhwvDX0S2X34lYjoLGkqgbC6D5SqWw3OVQ6jqKbbiEEzZkEKX1j+ne0WQQStfYmcrisSQux9ScO7Uxxh458PoZt+1S9Hygx5iieycsLap9FeXkfJkx/z0AP+3MKBPQJbrKZXFr+F3YzW2u956UaBC5hIfKsc/Al4lBzcjM2C4c9ke6wo0t1Y511yu2aObPQkUlWaIf/R461qtzfOzioqJIrnBSRMc0Dy++Erc5aSFEstKA3Z3SVFEIdsqpRkVh15miGSSP53thy0EatVL0txNG9PXiQVQs7BjE7qAmSkZ6z20WtGQ60cn4ADmWcj7ARJuer8GRu1wVjX3/8XRTiWF5GGD/bzQL67PUhQQ6oNk4PHp+D16glL9O3ukPxHW4uJ1MTp6y8ovOCwelBdONmA0UnLUkcy020HQiMdaP8TDK+8IptgyGwrYO7CDPsnl00j4AKZm6yj7BTUvpj0Rkw4whhdSkhRJ7fEqmbzFB3cGQfAGB5eRcKMQMQHDfmgsgFGOVKunaKNse4Sw/k49e9SUZVRD+YYYTeoKEc5AmNBPvERGb5oJfPIjHHIwKOZaK2HN0oLMFirMe/HVLcJcEhp+n4Lov59uezaE2kZ1HCu/93JbleKaOAcYoNdO4AvNLjcIIyv2AHNXcirUD+7HSlpH5rAYBlD1WabWAEskayNc/DPsSjZ4mm1xVpJ3dZEo8VnkCuU1go4Dp+xjwmkMGwprhkOFTClv+uqTuGuXcc50AG2wrlHrOP6IPvEdG2i2SfDoYRMOa1GkSgAAAAA=');