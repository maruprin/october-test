<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABgBwAA8vukIeFaoQQ85ZGG7i3+qjoV30jt/Yrga+N3p6ICIkfQ2Co+vxJD0xCqM1EPTJ11JpjTl7inukQmOX9NqXWRph6PTHlKLS5Ij8XER0DnUjrbBLDEfkuBW/DFV9ADHjWTh7BlcERaX9yJr6IsK2YZTjVVhRtp3IZiSVRH2HqEuW6sDaixKG8YtSDFm0ImvA1pl2J7sogWMFK1TTAWj+z8PZkeT/1ptvdymyFuo8vcVQaLGd0ix/KW4ytdeKXFUx3CFjzkKZDBCiZoCFw2sqEgHnGUfrnKATkRpMqBGs2+TkPSjKnueNPUZUAVNV4NycFdCV8P6UeMKBUkNNRaSO0/HrwXacBJZdTnOza0VTOPAMzBXJGV9tD+V77kw+WcIcqIxi8hEy/07khv52UhYvA+JwpqNpK0fygbTubVoqtorSuVkbeuM3A5OPndvgKGW/S1H/mULu/yRD3RWgm6hvccB7FBtlhKucX0+1uS9MsEeDZRDxyeDPVIrTDhdXfExPC1hmC136otjGSrzDYSLWSKXRixKv6KRvch8+AXkhJgA/D/7QAxJcC92O4D6xDKAHY9dowuXB853VtFM+YVP4d23hGSNomXkLSb7U6Dh7vO61GRre3zWxLwKuTVR5N0uqMxrIV/2F4PoRcyl7fcE8t3bpZ8HLbM5o+e3nnh0TkW1temRhhGh8lQH2bO2RfrizmpzQdGBhG1b4W4aXxqgnj356eVhqu4dwyfrvx978HUbRlzw+pjjahcm3kqecll286UBGZW0cIRqoP6BwXlS7uFDzsmUj9c9PDmdAVu+nvSkhgou3cWiXTxBxxzrzyXuTUx6WBMZ390gqBXMfPwcaeg1LPC50hBFGW3wgV/zBo4a51I0GeA8m9+z6H/h2wheVmqMap4SAnTTGwaJgJGlk6tAOtJdknWgEbn16Kq0Boq3qFvwUqmfyD5D2Y2JFqVGlFaV+DNHjZxpKwgWxIB2i7F4EjW9dPRmeuI1nws7ZcwTRgaMu1ME1kVeGoLC5DCbz0KHWi09WESZ3DthXiZeWDGUVFH9rf+Y3V8VTy6AoCw5MSZdURUegvwndUws5vyteGFUu7H7ORQdXDWeIdySgbALCtW6XzzZtd9oAwW0VOSrb/YHPT5avcbnjoobieCs8SGdOULS71VlO1qc/tWkQS51l6Eho1GLfCDv16aAuzD9ClzJWDo/DEIU+XtHXXxDo7dcwtOkPVKqXl3mPWxWzX67oxpSJVtuq7UCYmizzTpwlzGw52avvq9RYsXVrWU4Q9fnoGVueSPmZjWppB1PgZWnaHrw+YkcgjXTM7PnD2idXpVZMHuPGhWdEIi1IbOc223GKDXXoAJ1xdi6/SGMmDGq5IwQ+EmXyo/2rVsbYuRxKy/+uZbTEqvVhcCt8GeYs7MFfA0/tjU6QOjoXsWNLiCMtOBslH1wL8aFU4zxCZEe0eenwcGvx9iz0FSTQtqMWDhQiGgM1h1zIKBp5bOXxjMoBmDUs/tfWxBT54v+a6yD5/qKKzp0+Zyp/Apf1WzmH+07diICbwle1swkS51F8Talhgrl+mtxnKmpsD9mnkltGOXCh9Q2t+vM0PlzY7Kw70exzwovkWKT5A6AsyacOd+PXNL1a05pu6BRbyB+TmwuK0C9Nyk5tm/CbpllKJpNwo/+RuOzrXxcvNGhjMMopeuN25jDV+mPUydGnyiRXi+rnsdGxoEfHEEYzHozyFeEhjc3miDpMQGeNUv6gdcwMdYrafvE5z661/kGtC7WW8IUrKJCR9WbHUGCzmLnfw7PW9uqJk/78Fq6o6dlckGLGNFIDyPy5f5ea/GJkmb0/WU8jycNxyip0AyyXdpJWV8s2UOOHHC+h+oOHBAAhErb1fBg1fLFsXtNMyZ816Rvd2XWfCXwwq4npmyA0VNwiig9+5YUS9Fj0asSibNi7zXXPYgSJH3vgds4O285BITE4e930keo4AY2ZM/2aqHiZQvdUzWF6wO47Hw0WRQcwwRk4mWpCyAABphBVDyrhontSjk0KjGe2KdBt+nZoUhgx4Ad3LrAeZj1pqZTYCMwziPYQVyHaE6R/Yq1OyPLzDZXRQrTIMZ6k8h9UHTwatlLz60CVqrKeEnJh40tpaGm/OUlldo4GhlpbAU/QelM29CtRm2ufa2WuqFTpB/cfvZBoGO28vZ6iC5kNxL2KiI/m5WHI5+PN1OIS3/VuluHdUY4lhxQKgnZ8zWkjHRPgCWk0AJJh4lhFhWPNbw3yBjWqZM94NK461lAxH3FlxSpqPNx55O0FNS4IZGKMiYstIfgfvZw3B8Wm5OnAfHNk2ToaTc2tERmMcRuBhVce5Rz+/bl3lX65yUT6OnD8WLcTnVnwzo1v28Ovcjwm7vArDQGi05AEkyrB7lZSX+tjkwzSX09pQ3acqKWGEJrZq5Vezogu9h9L8nw/GSz3tzoNSHRrDTJ8mHSqVQF3sN0bwo31YaqRBtDL1P4h+kSueJdnHksQ78hXNg2nlWUFpROno8vLu8LjNelAAAAAA=');
