<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAC4BAAAxLlj+fcg6xftWkUHK+cyQDE2Fur6NvOILpii0juZFTTeKw9RMcPECxErw6H85E1E/NMQvC8gfy4zpKfqMPngIIMLiWsY3b1+rGwO9Cd/uKqbRzwJFhuEcF5wzUemzdyWZ/vtwINeBdlSirh2TpIo7RiLndiwmpu9d2SWqaGhYFjB8Z0vPCOxQBSCCWN+IyciGrwp55QPXRwxSiN5v1M4W7GyyFf6UMSkO4g6u5B6ar1Ofkv8vsX/MYcM03ct1aHlllSQSOfW0WUMJGEO8Wu6rNa3Zm037NlNncflWJ2+bR47qJ9ogR6p2ZyAjVHPQ0Wh15srtNrQtk+C0EB7B/UA5r/F8ppg5gOQEBGx5z/j1ScR+zjVwDY6qAz3j6b+eFfzvwtsdez8Isgn5t6JgYNA7rAqg6bwKU5gyJL9vHI/XnAnvqg2uH1ooLGfAxDUxBV8wxjkCgkMzYXxyeGjkz0ubc2NZpiICb3Z1ZPlqx6IO3kMgR3pOLYugsSM5+8YZR5D3Czxj9CKlGLKL2xo0rDrzkiVdOcsa+TdiMgVfsNPFbfd8w1Yct1g57iJ0JaEII0kEXtU7+S3Xwmuwd+wRguXDhtMyKw7F+4IQ3lMtDPVugwpAF61QjQz16ROYaGcv4Wm6iTHgbfEWh/cIVlykPmiy5ggYqHWuHCGAhT+LHpfbC4pIC+FnC4M57ES1qd8lOUvp4Bi3BEYNiuqTcc3jII3h33XEZJvQwG/fRRmq80tRyuQMf8jNzG/rjUfdzNOH6UnQMzXukMsKr+fuQ+Tz6Sz3yVQ6+cZBIMrNMEMAJuRqlErgdMpRCnD0p8Om+AWlGwmhwmNQl7Ddc1VKuIX7sY5TBlfyYFErGIANgTdwMwk6BRfg50WIQzFYm4GkbPpiUtl+X87a0/AJFkRa0oxD2XC+T26qGwEVmZHUH9NUGJ47gAc0FCRIWfD63vG3PJdP9wrnREOIwfmISyHTPRITutnHm7hiUsh68dOOypiqTLen/8w794sh9Eh9CCc2ObnzO5TyX3NO376SR/DBN9tY+AQCmrO7Ex/lg2pvqKZlvAJbnRxQs3vph6G17FEZLKzANdwDPCGCvGAX0Q5uCaGvDBdHOtMU7AjQyEjoZU1XHGR57ebT2NPjb4AbHP5EKUi5+11V8VDZKsxwomwIhbRjNQJ7C5EuV9+0ZJxCbAbyNyt0TeEwsRLtRBwqR1RS7ZnzTESfghzMYwj8AZzJDYLCQf6HRFOsNOi+D/1gEADoU5PCWjZaBh8a1ENHB8dNRePETKcK9ZgzL9b/Prk/e2S2Ai6R6puRoi27uw0MxhedqX2ouiOWe2RWE3PO0lI6M/7MUlRx3F56eLa16pdbGXm6BD7qEgOAJrS8lAVNYrhywLpRNSs9UQk5BiAZNgyNSGSymxf/fpgaKzqxFB1VFSe8DfprTTaLaeP0mZPZqg4mAtOxPZV+amvrtyqYR3qKmo4Q/ivEzkFuD5BuK2W6+QvLEsQ2v/5EkzEZYnZ5CpCtsNLNnZcLLGIime2Z8q5bh/AwKdKupH+sVM2eC7daJ0XOBPvqKESrLFZNLfrIzHwtW37wT2ln5bkqM18Dn32noSI7U5Zl6KR+yHcB6AAAAAA');
