<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABoAwAAjUQIZ0C6XfTi2GtnfzmGhKnE76A8LRPhttO2dD0MGDtvYTIc2EM9YHDWG2ywIoTqpG39fMN+SgEl5yoXLNii9geELsqybT2EBzhvPoAJ7O5ioxt9AEnQijzTBRP4MFzvHMm+hN5S2SYONtIQjhg5nc63kIPg0kntXhzL6XHlQTmUHrzg7olvFtv9TattT3drMyfRkPHX5Eoh8qW6vEdVp44SVLxp8OaHNeeK2/D2t0a6iyw43z1E2wKdQbywJRP5ymA0/RyKMBnGuCGYJDui/dHILMhZ4QW5qHQnSyAlBuJEVhE8u1srH8jgmfbj9Mn11dX8mMdN8l1Jg8c7VKTSSJXqW479ZI3DUFjdOFojWPVhwm8TeNjnUwSNApycXNqfN3AnNWvBkw++8DT0LgMACwDnYw8A3v9EUlERbBfLQYJ9IFCd6SyB6zMkPKHeZf2dq3qhW/PrqkLV6QguE4rcLtQ1akMWgslnV/jmZNpMJ4VuxxyM6CMbNtmJddrWpaQeNOb0ihTOxGktTAs6TiGEKVOnyMy6mcBTsDZmBFsp3ul+ZEe0kAjLXN7TFGwQLH90Cn8hvObs1qIVo+8n9q4XCVi2EvhD7/FwxlCPs3tHWbW6RV4kiyAKvFui2beLBePEaCvzNUH+UdnQVxvQ4LYSQfmJ8UwbPmm2MKzbYMT0FyZbGtWOhveXW6QtVtbyU9QdCoh3IYRfMq+iH4YcQArmNo7pHXgo5S3Dln5up9K740zr+cBaJXli4yE1YpD/2YVFa/IaNZF8SL8N16Y7EgQXWHipzMxd4TG7VbUpul+1xN8hPRHApSxN/GYvwLsZN+rYVkP4jobBEzQGgG+dT2mSucH6jdvtjvGQEsE43qr9lOpOswgnp1KPiTPm0oHMz4qKHGx9HO49NJYUlY4bJg4sTgCS9C41x7jOb6aB7OTJrEzpC+NRGwPizWqVZOegIVvBhxeCtzqqRnlof9cU9z8m6hOP164AJ2IiwBDFLwq8wV8EhKTtbZzhaoVqpJXPGSpvldIEtWl1u1qJzCrK1ZJI8TOxX/77N56Y9YLLxEic2gYkiKST8IELoW5HL8FXhmaU6UNRKluHHW2a8UW1CvJe7iEQT+OgSR0J0n4pe7aniRO3n7B9eCtY1TdzUXED9uFRrgTluCDn1rsAAAAA');
