<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABYCgAAj7MyfEHJ43xAeTF3+kwSPrC1LGpta+r/3LxpXGniqiH8rkJhrHvuaJzYk7k2RX7/7Ijr68Iduv76YrJDtIV6wox4aA/H2sVIkdPev4XqMi/XeDBwAnqqGuZkF2W6mcxK6dwrQCArNajQwZH99IezYxpgnIvtT9adl2WQ6aXVRtl2oJT66NYHs9oIQ2Kqge6+WHpKTYcdhorJ361vF7nNowwSEzyMW4vConBSIsN8usqyOkLEjNAR4R640S/leP9TafliNyH19/sCNGSDINByNEjmm3eejX4HdEQ0+Reaj3If/bIIZXu3Xfy3jVDEzvpp0iiqkSNizhU/V+Qgf3h4UX1w6iDrdJ/O4sHqbwa4wMUNLok35YY4aiTxt9e1Ph3YDYmLHMm/m/aBpxRodiWN3Ikicaft6a1ArEN2UO5V3E8eGDgHVI3lYVvlzR2Js1fYrI7g9rDd2igBhGv6jC0+KKmSYvbnF2il3AAOHDVf83G9VrExrD4mDU4iGKz8BpQcBbdSDEXRVhrYKncPc9IiDVttkcEcXB7+ueFSbNt01u1wNL5e3RnvrSTdNVfcBFVJFVdzbxTTtVgmdI+oeVIuE7KYc1pwR9r7EE/vXqgsRsDII5Y3NvMENYMeZVqRNX4Cc3KHnUbTGoQg8O6hlof2YpEIuyn9oMLokHUqoltQuaHqkfGzEXCnP1syjMBPsqJy67I0gv6FHbjYJgH/NMG/LNQxHYzaEJ4iqh6FiC1ayfsgTlfrxEriIdMrWmFlWU4LQ5NGoE7bYnY8IJmOZ0h871/Hq+oaCJnz2b+sgDGGCmZ1ouwNsUn5Zulx+Ruzcpictc13xsMUNGTl5AgNPv/dS26eVAAfT1jtPlzD8Fz1b1fo35Hx/fSz6NW1/oxQtrAGtAuCLgd9duxnm4fSuCFPm/GxxuSiW0dH0mN2uQbhmcqI/AcU+d5lLpzZ+2InmwAD+84WGJ0V7Zfkh5l/TlTTu20DpxQg4zPIPpI9X6s+C0+hqCy0dHKgAmVSVvtF8plRiH55nOAMm2SLAiWlPzU1i7/nyGdAWzwHto061B8lAW8ehzuSzuchufCeui5t5ecmpsMWS86RISabiNIvmEG/G1A5KbI44COfVQHcCaAyx8vTfepSixYc6O+4AaOiYqfJQOxIID0IGEivrSQfczjlpwCCPufjIcY73g0+wXQ71ZGeVxk/Gn7D27jfMKifyPXxT8UYaxNuc9UdAcra9ns5Ivattw5s1kG8g0DpLUKBgf/CLO9PFUlb/weXLsKVmrcJ5JBPsKJyPu+T3XgfB3avqORuetJ4INvuA4dD2qhpYsJHX0vP3Cd91esbjU02X4CtJ2bHIXFdiH25fl2Fp42/Og+K4/UbARwafFhF9fYu1fmuzrxDOoFda4y+C+W9UDRo4R/eZn3gvkqfSzKs6NjvU8dUVWWJqUDkygxRcczbt+mi8sh05PcDcz7ob9krHXWL5cPIOHx9AaqCkjnzv/fgsdyt1D2COfpAfWNaQYgoBYPKE3TJdTRjYD+z4Qumd9pKhpj5S2u+YQqWO5316CdWZqvFu2YtMKClNhKRsq5mScz70yrMpsHIgmHstk38yExiL7YpragEDfkvhaZ18XjsreTpO8gJt2hggGyYsmh7hy3oat7xfY28gBskJCzgZuFnhCJ8neTU38G7Qw9G5e3uIePWr+1hdhGtsw183UPAErswQ0Rr+712QFtQwZfXFrgpQ2uGTizMlM5OXajeMwy6E5gOZUjdzYVhoflpq4yJ1YjpOJ6vh+o7iYGe2L+4Rbq+BkaS22GjafELZjQXdeCK43/E+T0WFfU0M4iO/LNQrIImG9ppDUTUkUg5lEi5sIqw7gcoWr42++XAgT3VxZqwLvw2Jy8TrBX+6jiVgbFrk5Y/mlykcTjjP6MDXUBhKxmyDClI/JFtg/LsoNeLz+KspjI+UObnHM+xBfYH6ENvShszjgXQE9383vqVzKTj5ISdeE4Vuh2SzLYB7+5Y4e3MAcCDd3gSla6ZmOosXoj8OHnZOmqSljWvOfiBal4jSD8tU/bh6Bm379PNblDSHUE/rg6jwzKKYk911p9rNasdb/jrkFU4/pY/Tv/5xTur+731+e8XMFhH2kI47C0hq1WV08CjL5peYzwLfA6dOcIikquaFCQki+ivZOaCUlPGqkXkiqFfpGbZZ7+sdQxMSRyECJvt/Mdod7TM0JvmcbNzKSijasyT2luneOIhiruYhptHVqfE6It5rfckT6O1v5QVQmCc3e//igPlc4mELO35xlSjb4y0pmyw0PwEY4UjNNLwXTJzWerP6pLtLG4OZ7cIH/mMuAOls/6nvWqrS+XzpYa3yHpWTYCUe0PsZm48FeZ9JZvDjoAo4WU3rjVV/YfUlWPPnBfGP27G7rIJJyoNbYcsws66EdDkyjL+vFovo4D9bxqIE+H+T64pfBUpBYqaWYBGcm32q+eVW34StTFYwESwEOiAeFN84BwGCC7cY8JBachPyKFHqYtCuEmS09Rqsoijs2q35cmUpPca09gssiD1xz7NIxATN2wHF518Z2absJn1l8mDiTkGEheWUVQ2Ht3QcTB7rFUV08mnzQs5RCGFZgbdB4fqyPN3eOLYcMCuMWyI/TxD6O1QgP+GvPocMhC7Z7s3BSNoM51bJ35TU/oauiJFGy6RavvIIBai3huC0ndaK2YSsNR3KlzrT0+58Maa9s0zzcV7CmUHkIopBKbya/XKKOD3QV2Nq30b80cTarn22JTLjaSs7h7vUmeLqDwDKl/R3gC0CpAipXLmHXnyOf0M6ojODe7oCYQ5EdrVLgMXPLxzvmegJ9e4YxQp7gO8vapM0brTXJ74emUKYPfhnuG6j6FDpUsEOIOiNNDGYC6aha4TuXbJxL5ghrcvdUZ6B9w008451Bk6xLZ15lJIlOrVJt7sUoY5thB5Hlpa0Drn0FQbbfUoZcrNsYAuupiDQ3tu0vdUsfyBSlHNBQujyAFomTaIqsOyVJAqbLl2Z2spN48E8o2aKDNikSCvT7teslnPhL6BRwMg51MG5xtEsEMio2W55VJDs7LblTZ6gV8NkWYCwYOP0vGMB55yr62yUjgXJkwM3avk0JbIaV+wRRtTvrjm47U5j5tcJ0S8j4AksyqWOCkVXfEy/5lwN37gnymL1zuZ9mqdsiqCdkmb8it177H8F4ahaiyDBXRZ2K9eudM4TZzD9bB2ptXKai8+6cee7n5Zd6nLd5nfXMNMZaAho3/qyah5Q3uXqFFsvLCpg5iNrm9AQsovyOQPkH3WVr82HoE0o2XZUEG6ZctNUoN+QAJSPpPdEyWyOl93+yvW5nBF1I5C3nq6qnI9ABPFq9m+A5P82TVgw1FMd4n83UOvllOHoSvip/XCroYP6jyHDcPsyOGJZ2RSBb3SJrOF8PouBXaT8JcGjATcROGFNS3zor5kHmXPXZj2t/qKh4g2KHR+HCwIvtXt1hByrVdEo7jVNx9VA2jgF5cc9bQWzuxLwKiHjgwWB0aiAaksFuhS4dOGIz8AAAAA');