<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABgAwAA9HrXY+Z8GDAjP7hijPcIufQgCTs7em/2KV1M2Q1SA6vu0xv+sXPcR6479DrmgoSrl8WH6bA+h766/yU693FWgFfs4V2fhrgPcIbHlHJ6Ts0BnhcoGgvHikvHNgvm8APVsHmf1XBRU5wpETvuOwcOu2aQiX4eTGD5qcDR4K4yu+Cbot2BVSAWWZR6IuCt7y5/ujxWAoAcgK6IzOb8Y5s01qnq/Up/kwHtQYWubbjOljhmgcBxV8d3zNhsnpi1hbjZnnaAb+EQwmANjiFjMt4iFPCQ3tTL7K/8qhVJ3lf1YU09kSUqSqBu5JJ9BDAUT5rfXVA5iagW+4v/LQXbvWelXida7pVegtNnWapuT5v05hAFvEdPkfTS0Sb4/tUz/klyB1ENBbjSPnKAhHRmTfkS7jO1/D7EV1d7bp3ehIVxUkRl/Qzr/POVeek9ehcMgvb5NFzjBvVhOQAcde69KlH6ERiC92lOkMmA/9bB2OIkaQnh+CibcEe8xXhTwgebp9adLnuwxIpbm2DVTQcFt0/t5Cimv4vG+zbE/78AF642M2BIZuZeqfvG3A+YaadqMFXA6NF8B0RboOsWpFXqL+TFs2lb1sXIWUgWDxK2Ob4QuLPhZegJAfXSKi0gYBEm01oH9T0L2IMFAZRn5cofmaiJbL0++xOCBdIyBSKEDN5+XPkZ0NdIZDuT3+XQHn5pJh4Xs4GySRloeJSEsmRgNQm8uS5xDmFnIzg6zvPAnY+FHDhOhEzgxPcJDl98yyTTTfKr6j8TSp8L5sSUazt8+6U2I4bPz+5MiSJxnmZ9xTDnkrOoMsvXakSfVwrdkbL60y3AJipksD9yICqdGXdCU5nOyJ8DPEZSB4vIBqVjWFx4Ay0kW7FlPbIoXrmLP1LGkO3NC2C8JgpsSXsgIhJOB8FpUGm8LUJ/ZHuf877Qbj18hDauvJAuI2pzMdrGyorxRvFNi/NpofHQC/M090PwN8WOk6lhebDaz+di+MjoeArVZH3PZr96yw14Xuid+lGWoDZeuRS6lmac1k4+sr0pO17WuGQC6WdE41ZaqTrLch6B2X5+SS+FM5nQCDFk9jbP+ab7XfPhc04SVivr0dywwh7WOcHTLM2I58vLWyn29nkaMOK6RX39sqO9vDaaUFvrvLxrAAAAAA==');