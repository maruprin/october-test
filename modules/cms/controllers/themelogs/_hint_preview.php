<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABgAwAAvPMeqxihwTU2BzYgXEm+BUJQvSRKA3NxUhGbUvoyfKer6lW4Btf3T4/07a334PEy6uQGkt8s5yDlPg3EFws4F6GNAgHa7tHMPWYAyZp7K/dV0LLEOl6J8VOFsA9fUGNIKnE33Mmx4+30gO/qMR1qZM82pPBCGu4IRughN1uJTcTau4y3RqsWNQoOa/3WgXM1T8sucmlpIcq9qfU3cv3Ljc40bhQXqTN0GgrKLqjSt79IF60zM3FVcjF4juBhjBLwvWbSxj+P1k4tkRkE5syO7+PMjbBpgLGM3NqHTDQo1hZ/INjGUjDFfyWK8m0lMaUTp4ZKNzX58WhnY0NjRwmETNoWnnhz8U6Gps1xsJH9Hc7fPD/2YBtGbhLg9f4C0xGeunsketZYCAyIkgpRhZYkMVqYsA6w3seJVjW6v/Z5tDiIeSYZF7u35sQ+G4e3aV7H4mBnDXFL+HFKdGcBFiMryKsz/ax6Gd0/D1TaQit5E4AFSTMKCkjvixhLdGpUOFbI19rjxq+YzBcG8pX7nm3nB1mE3kmewJ+/WOXQLnPiVoTquuYZAHPeDwlwN6KunNICCGAAolTQw1ExovDAZ90I5/MXMYUdkDi2emvypXAjP3U/yBpM+/XwKMEoNqKBsghk1l4NCbkSTt+iQMToMK9JglRKSoyXGlKcxg6JYbS/HHWxwMz07zohTJRnK6vGCN1XqNuAWz018jbmsA0ZpJfCidwUHrZjMKAz+32sBxZu5TYnChmipFkYKlUSNBsJ4PK7lSZwVrIfpQLgF9CsR8v0PY63keP1j2fnimUvIG0hbqgMZt90j3QxazvSwZgkR0lN1eQ7qWhtzLrvIicf281l/Tr+kSkD0PsslN+eL5QsU4tog+K2qBGnmfMHVoYGXtuZ3DPKUDsaOjwBhd2e2KGIs/MezLfW6Kpgp8SmjTxgSgE5g4nDmtScnAqe8WSVCRCMzlmuLNbvy50O8NPerLvqcWX5YvP32UGpirGrEf+V2pjHjWDZPdDm6p1oit/Ka/S1GURdpGaW6/qA2SR6AHbJ4bmfSpWYnkSepWI2dTp1QJMn5dgNLOamesXTxEDBSWOZJiNYNvEKArbQ/RJneGxDeIeqMlJcLKPUHCUlp/KlO9Af19JzRT0jtndJKARSbWw0AAAAAA==');
