<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABwBgAAWMi8ZXMK0ISt1ordmrxypAaYDHyjC9KIayOQEJQVWO2iHWjDQoYm04Ov9pZOYizLopfzIY5cX64X1R3o4gRiykbjL/xDtYnaoTN9ZC5O+4HFGGJXVJMnY88PyUi/MQU3G84vqDdmfawDjZxT2aX318A/F3W9//YccxdE/0Urun1RdePDQRpMltXp268VNsoAnYnJtwaHkthOTc/LOlUlfsTm65E8zEKZEsOHTVSxF7OKN9vmuf/aYI9j/vJM+zUtFQyGUw20Z1RQfYdd8KIHsyUNOPlHU0HA3zYgijQl2O3F387ye/+cG035Smq7GCg6209Ryrjl7uk6b0HZXa/bwlG6wQ10Q67lR9KKaMuVb4DZRiRAzZy9aOUeK4E5S+bHw0FMIcTqaS1TzXzqaze096Fm24mRTWpFvM4Gphz04Z8GY6JH7r0KGTmiRM0hJISmmg65M3syeVR3tyYHQUjWITs1+l6OdI9W4FXbtqR4F2YQHGXZegePUFrOxQAeWSYglUGuUVX05dIlxX2G8V2ZzG006C3R1EFMJ09amUkQ9hZnI3LXiTI7TDDqS1q/qH7frl4QpIbiiBHOlLJ6wonxxrl16aNwq4/MHBHyLKWEo2rjx9nItjAbV1COUac7WtMB8hr28XnkygbnHfCdQfm4ZlvrQwMZQytixSb05QvmuaF10J2DCUX9/ehHCc1YK++6ykqbeHViFaV649MRhxU0XM5uHYt8Ze40zwAzTdndBM5dWL5wsiRMpA0bViDkogdjtF88Nsbx3qNz62Sp8QVdwTMCVd7BdFtLJV/zV59ExWe9SZVj2VaPQIaXXrxeP84j+Q4g3+2T4dJXH5ICjCEtD16Mf9n/7Yrx5l/qVAW1QV6Y5DUWYY4t7VbcG2vwnyKmqC9a8W8GCdUqKmzy7hpdarPx2HQK33Y6oWqrS9UjGZmwTk8fuaQfUe4Zcw8XQnMRn5IY2X2NUVbfBIlILDWPBegXBDeIdxDwRts9FBenwb4zXB3FLECexr5WePZeqnJYLldWCWIC4aIubxaC9zLwXs0SByimXd3oKjdRRxRsqxgyf2MzRCwyRPaH3mtoH085Yax5J8jUpp2icPwnX2wWOBQchVMNP04aAJt7GCLjtpEg0Tlic5BlG7+HbG/KxGC5SVo73UIXf2pVPCh6Es6TGdzFuWsTE1G/brBaMJG0YJHh98PNt7Dtr/I3LTm0B2fw4mso0u4H9KrnoVrJr+A+nOZOtC3UCNld3yrx30lVgHsTCqpRwi11wCeDdKaxEjPdnRTsHNy2Ot8snu2HnxrzhSFM27GHNojV43NgLJEcYRH4Y1vY5aTxaSl/ASJFObvltFkfCzEQmxIYmZHpLn+/b9GnlKJVTvPMMNpKXM79JJpfY6I7B0wgT1zLt14JuA3I1PQyhDe5EGHIDYOBk9jrITpP9THsORZ7X6OjxHpJPFumrjHX9a7SuJ9ustnWg8AMOovZYyhlpiuBso86SMhMAUNiXqyaO7Z+lYd7Ky8XjN6E2HRmP3UU7DqZCrtwsP5ri3q5LnHwP9Wl/y2E1VG/HXQUd2Aj80tvOD3hfM5FvgppZF3FAd3D3TT8S3uRHX34okuTLfar4gTcEg/3s8BHkSUsLnCm+9Jr3/5jfl2V7pv8arPQgoPgVrgyL0aCtwahRGk+OIk1yo50UtAfdv6Cnf4lrNYFYdAQBzR9amW/sLH8l7mSwf5turNgOSXxaQQvYFT/A41MBdBUE5EAyf60iuDQHa8OscqnJhoXcWVBahtOgglM1T5YRDKvYAvDGThsMrkgI5/hfrHsi74me04M3M2I3w77Mn7WI9q0VPNn6TDVCKFhBMxR+0BwOWWzd+hSRKikz6gAsJJX0GvRaMIxVURQSr9mwymEHrCL+wkndvbR56dOEUAFDMnVtRG5Z2Iu9Vyqfce/jexweRsHUeUWUs7RKqhQLfLLzyKSK/mNng3FgDYWr4zq9/8pvWfVMsQk9yVZmsGHtLRj1hjtAKIfWpP9KvfeLel8FtV9uoCn4sM9g6R1p0IfWS3pnsoJq3+WikyYT2abXniASNxQl9NfSMnSNijcGKFPaFhb8MeuT9Z3BcvegmfjqV2D6GQOOg3FpWO7jYPg14aTXsJJTtTxdjQMY7WPJaKbw+dVe1IPOgDnSHqOdDjxCSPYqVgNwVrlcF8v0/aG4eTt/nEXkPPZdwAAAAA=');
