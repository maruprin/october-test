<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADABAAA3rQ6N73rGpbHQC3GaU1yzTmRa8wPlz0c73iABsRELB091/ecSTV486oylzDeR614cgnq8G55Hbu2EX/eQYYpCDaafLBm/i6Ooc/3BVDNxWNXPBI0MXHDDCMfzGVIV9hxzSUVj/EtWcgMgJU8WtbC0O58d2E7wtxPe6JxkGPT6mk2Q9emMwBUbD5Q+Hqi1B8Rkx7MVf2iqtAqoPolPHmhTAOy2GX/uQCWQB04td0MZ/SQeRfVFjaFf6Z8k6kP/FuxBZfKIpdIS5N9hAMXuTZEMOy2TtdRfm3sX4vJA1qhOiVWsT+HgxOQ63o4/tco9jfFst+l68X5L4Kjkrq6IiJOibveSAu13aLNzyumN8uto2GbMxXxGrqoiHLcb116M69Yh29RMeoLzvT3Ls9V3KIDYrC99HimotxW+WFYJ4ceNj6LpmTNCsmeyL4s4BJM/H1SVKemmN/phECGjPxHRmMNcPMnZH0O2QViMCn3/0NJgZnTv62hB35qpEp3C5BJ/c0G21BosBAp0eG9MDqfrSGZ6CJNcLvEg0Fb1EGm1aWyTVbHLuJoM8FfTLSXAAGjP0XENJtyJp4IzhUmkSE9AYeD0jDj1+68KeWKwkHd1v8E6jALu30Mx5IqJEcCD94peA+UNQLjLCCr1ukpGsegxT/v0+odmDM2+wPd+Lp1vMyvqTMa5EoWXmWQFjNStJzhDPrf8D8vKBJ+/+nxD5c9vV4HFwEx+0yLg0dQuBRyaygvUvU9OcSSqweV8Z6wd3ogkR6ifYcAPX7hQpmEtBTjg1HWuqkW5OtxwRYmFPL0Q8yICtVUr/5HKkKbD6dmMltz8+5CoorwoFJAqvghO3rEtFgn+jHhovfPOFYoXFp3QtW9JjMkArXwLDQjYQs+rhzhe4Wl/TNplhufbHBn0yAZkYoV52bGhYJWKiohThcIdjivcwe9Qcb5awnoE34/j7J9AFSobvO3jPLNshaYrHW0GkoNHS9vaNz/t99hWzt/FMtiqgzLh2yZ2TuXujaBAtimlf+iYY5LRZRStljGknkB36fIWAhTaO/ieTAWIpRLEYBQCsEujXccwPpSNzRuDQXWXJ08gFJekTXXx1DZWRVkD63XABcytyeWBzoehM1LSB2qrLT28L+BJBMKiAV16aR/9b+GcRM1fiEzrSvLw2QGsuWYms9u6j7k1AbnkR9tQskYjIrpbOm8jKrVUOz6BqptlGME009stEsC0nkc8JF4ZkKJTxDr4KJFmYkedA3W+sAeQpu8i66hncqewKN2onFu3oYy3jaVh27eKhLLJeMWVVmgrRu2B96/7sxvwfjHWzv0bpo9DkIxCjDnjCYfm+5qN/mlTrpJ8cIP77QqDt8a4SNQbt4ss1jqVLP3C3pjvVPOSrjRhn1NMXjy4zVLuAeWh9nytWdelpiuMTXdhShbTXEzwR19Kng+brmG6g4Cm21T4Bg7v1ctIWUJr45zzjmpS+RmGn6j+LRIg5X10YU47qJDJCTKKDuEYQ9hz5GLrW/d2q8hTi3EiY7j28eqjpFBIaXJueenU3+5oMruiCpDeOXYBTFcgexysPDAm7OsabvfnJwozI1rix0DTq+wersEuOAh8VYefM6GwEBmHhKx4e16gAAAAAA=');