<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAYCwAAWDgXdMMwHlnqgA9B4k7w3trqNFCPJhaHA2KjPxM7EsXu38EWDFNRRFofSZ5ITUuYZ7wqpQvc6B9Zxo6PooSNRroPwBYVFkrecfQTDIfX613bLaS48JsbNQo+iNGLAD01M3b9o6OMVy1+bCwZLy9lM57dS8yEiaBog2w170XsddmFioHIIXPLIFM3KEK+g5iwAtyBZoA8EDVgIzbD8Zmt2kRu13MyWot7X1eKsUb8QSPTjsYM+uu0Gi/PJU1AAe7JQ/TecX9UmW1YO9Mmg4fTQOs4dWpbHs+/dPREaMC1i8hfN0g8lUyk57IFVl4JKa1iBg/8mjW+T9kdGPXWi/oSoJKO4vwWkYTqsjH1CRrsmRCD5aGTRGxH2a8hxBuasJSLbpSy0memxx/sUk3ZxYTaB9OBLaTd5hHuIjHngKo6CohVVVFhlD7AJgCTASXq5PV+aHbayasbpUe/aty+a2Bab45o2e7HP4EXqebPkLBuc4ExRzduAVI1ZwRZj67r98J/XYKZ1iyE1KgZFzLHFLf47wFpZ4EiFOp7rgCh3w3KSpio+ipcvalN7xMh3BtMcXun3wNIib4W0Elo6DTrXmU8qz/Cj+jF5RMglbTITBTrEeH6H20oOXZwKJ3lbhwRk7m+LmEpP961fhUC3pf6PsO/RLbjXXSvKu+D6wxeucao8ChTY6scGFI2Cyc2TbOoLPxLgrPUMiXh8HVg+ShtAW0J9JQlcmmKeOj+9tRXRXPFhd7tlSfCm33302hPT1CEu/VuEpdrdUlEhPQfuAU01aykvt7h9g1IvvTVdLi4e6hpnhipKI4LPxnUwgpmp3R3dm/UJW+y2mWfXJZPZmO5h282m+qtPBL+gaQPz/emNXCl+PG+rI7Ge9Awtfy9zLEjnQHi5UY8LwGiHO8kb9wxlvBvVTTmlkiHsVZgijDim9RSpGjBxLch1wJypPYSmZQfXP2DcmfmPodzslML1gusF/TwyotigkLJyqAdmWNehzvHRcGQHOq+WK5W2HEXsfmv5BuHqMcNbJCyC8kZ0LJ051LQQngmx5JgA0Oha64Y1TMQ6JQtQTPYwh6fzSVYgwNrIdp+FUJ5wPS388CJ+ztmuyQaqCTt0cQSiPUjlSrnaR9VypIwsI2zajjATRK5VGw6D/PEphT3w0pZgVo/KspiCfzty8n76AFcss7C07YP4fvfHcrZosW3rxozEhd6CL5FIPOvLUOj1bLpJ3B3GufqSljaTTryiBZ5XE5IXgXO6slKYiS9578l2yd2MS4g6c5fe6tSPbX237BkD79V9nMzF+rK2uwhm5o7fgq2TIk/akxhMLQVdUJtlP2mB3nwurUBK1/3wSUuETpWtVucv6DeF0Xsb3MiST9GAW6KpKtLhgOp/YlTdaD4GNEs+dVVlnXf1j+cwpFc1SV6C5gMVYsc2WB2ujuysfLKkKvjIBZhsPVsAV0AUkbDbp1ddfIAd4PalD/9EGpQx0PaZMPyP4R443oK013kGxSibv5kgrUpzIK68FAJHwln+UdXGJyvq6yR/IBxruerHjhQDU71sGji0OzKuE2cpeTLujd2S/Zv/XYLiJgn9F8KT/DVn2ewBsedClK9OUIMZs0rn3EW4exhteAeBwTKN4DO8sIKuDyYYIIAB+kwvTgSl8GuvfFsHqsWPYjYmsypINF7ugOgiu4z7v0yqIUBCucNIaTdcaLuwsUYZldUSfxFVsne4gWqXlN3fzRzJyIRLFPuKMm05jRe/tMgKrNswKeO9SRxQr/6E8rIh5gAgJIsZQLxBfalNOLxryPAgtV/fjRwXkMroMEvARe5SNYLKq3JKZgv9/WRDKg1Bv7d8mgkBGbej+ljf38+pvYug7lxrkLrswiLXYNbCTO5z57OOibZgkLtPbWni/uAtyOydWGmw2jFwAipVL6E3pvVMz16lnRCVzY+rTrma9Mplf/uKMoM3BPZaQqxnm3AxFmg5tK7IoFteBUQZwk4jg+ORgYz1njnCWq/9x4GqpUiwx+VkXXroRYkMmNeR1H5nNSDn/Y2tuQKWYR0+3xChe15EvK6Yas+4oaDcR1wz1h5pwuwZih0lzGjY2QzBcci2mumztMFL9sEjUQ/pLvtBjLrZNMZgG+wc0P/JO56VkJWspwtPtWW+z4ZP8yB9pD3osImXFurp/+2P0ct+1G9kjf0BwNvNsQd9TmabMuZ1bB2enAgpCAdgpxLTJOtmbxO+gN0JN5dPYdSridHGlHIAGN9I9LSPrClqEJcDnJRxFEEH7DeDVtA9Xd5iaJ7PG5lW08MIC2Tou9l8rl9DeK0bORE7b016/80TWF6DnItgTFl1H1koNaZ5Mogrr4j/6k8KGLcN6lNC5lXxXW9hkUQRFAa27eo+f5ivir9jL3DBTuuUpnPDDTCtvs+ciVIwkA4K5ILLRdDaHNlz5N2iBtleOo4zz7c4JN87HRZsoAHqY02GRt2RNo1ETm0LZMZN6BeIp+qrniRoQ1v43MO8XySeRbnnnSTUokne6UVzANUw8yG0+l6WTbtpD96AMBjHOMCC47sYsPWwQ5H9cfWbhBF/znJhUZ5XIEczccCSIdrjxLeOgOqc3yXfYUMbztcmuJMJ/ZkpuqUIiRojwZTS5Z5RKvf3VTu78xX19RwrMRbvqGZsVhUGfBsGbO8MeZFe2/uRhz5lIi3uassWaQwKgqYZuEYDo4LmuQNWuRMUeUyU75rweR3wmlwZmw8RVzwZLTQrLo8hmCUPMk0NH/J5tIkRbuxQkBVCWsfK3lQ8Jo8qOzg0wf2XWEJQv7ab/DMFDAO9FQSejG+XZ6IiucZUIE/HpT1z0hD7FunJZDUQNBE17FQfwMNdRuSRMBtgUTFQstHUWiWWAfm0QFn1yv7OYH8mXd/o5ZX5m6UuYIpKN+YGq7XNlU9d5ZCn8nefsqzJz1YMYeVVX4xy+P4rFG9usVgT3klUJ9to1GMxs0gpIKn4RzeIy4n87zbgX5GM7iMGDdkzV6T3SuPB0FIwUI3E3g5ensaRTGGczMjUv2UBCfh9/6vYo1gEGJexHyvboHXXgHvBTFzvhHOuUnLzpKdui9yHDwpNVOf4r/XS4UkrqQzbwQzSN5cQKB6FZa5OMnLvD8AppKH5blwK6A1BANWCfMgszCObI+bWRNy0r7THLjUaZ9UkUNTTM76XH7UxoEyH/IWNM/8Ji99YoO8jconI7ZueJOtd0TpAGhNJqPuy3FZdzGGthGEgqLiaWgLppkibtePq0hSOwFl3Pie6H4sp458C2518xDgVqDqe7JcrO5m9fLJveJJUNTr25fon42nF67Blhvhp74PhlkChalNclZQOmVXPCDsMCBZg73q6ZpzjigsU6U3BIhKanriGGTX+z/vvQIARdcsMmJfAQ/G9RbAS6RjFDAKhXPwfytgygiAQrBX+MqIH9zql1YDj5g1CQAcVO2OITepmcdsLm7LlMqOv8wgvr83FJbgzfYNAR20uYAng/piuovRavZ8elSAMWas2S0HPpJXSh7icjwGp5O0+KtXEbn0ZR8mygzIh0apm9QEHcHIU1slf0rMdbW12ERPDkm6TUCNe/CA0Yt7dijc91XpQa2M3i2wxDft2d+MzchUHoW9dr1Fmxr+1IMMXzkNuc6SgRmm+WjnSI+nKRk0bvXfm7BWNOIEpm7Hgi5EpL70XdedEoHMLfu7m0ZK8dx1G1KFJiuKwKP8dfxIzHj+n7KI5O/Q9SY61diOHot7mT374iRn4OJnTAkIZcss5EaaHf1lj9FbDvNB0+tslCnJ9c9v0pS8JBoQWU4AAAAA');