<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADACAAAzwBYrJClMjByDBDCeMNP73D7BkwfrhsC6F9nZZRfbX26gtJi1lLe2cfEm8cGs3yY7vKWpKkICK9aHQv5swWtXdNQJWe3HQfO/Oohb4JtSSOzqh1C0DmnS5cl7ZKB0QsKzRCCmOkqAqRs2vJxZfqsUm3l+sojSMd11RJk90/3I1BSeEASlDh2ai00mNtRJIk1Xf0EC5kum6LjkcQ+eVCpa2W6XGjVb6vIHniJa1P5hWzCqRxZdVFa0D8/HmKDc2ESr+hTifMpfPtLT8nx83rxtgnW2XLSBxFGXthO5lLkeYOtv3INr510DMuq8gvZhR74YRmUmYbBGBHchJLKoSgOlLKvFuQsaysI2AkmUesSrWhUYI3NplKY0NM5zoLPxCCpUZNhha03ihNwYQZb547xNHSrhYVQeHpsqELJB3frleTX5HEx2pmkcp9rJtzL5eShhe9bJYPQnPo82q5BRqRoBH8Y6W28vCre0mNpRyR/I4+NrQEMUZzjRWDTlGYL3YPr1iewi2wQi4ChdYz5CnypqWCS1d2FReBNDF5D8S72//JWcz+kbcpudcZKs+yHx1/yju81eBZb3JGYC88HTx22FIiYvMDNTyhOu7Sg/FnbIxUd/uvz54W8oiPkyilWQd0pWwxoSl9PpZVlVJsi3D1HSAm+2dKfoSZOB2sWWHH71zGLXt8+THpdPB2Wc2pZJMMMmMAgUPe+MzM4zPliiOitk3pO5tq6c3DJYSlR9iOJW0bybcaqlxKyt0xMPKzRTIu6qYUhN+bp85nNyvhQJGKLcfnkelRwc4hzh1Xj2zDCcKWe2qxStsTcdGn58IOs/5w+Cmrh5AvWv089dYZCgUUilHyu6XoJw2dqylx4tfyEKgT2BA/jwfIGHSL56CMh4My43Xf2EDO5mLat15dVuGOgKtLC05NzKovrYFLolQ+FN7zlx+P7bM4kZ9LLjoOGIc8vY3WWxuHU1f+ImzkiPenugES2TLhL47SOEu5xLjjmAyJocg4o9SF81F6xBgFDvUrnSuOpI5HxgxcILU2LBIybriOATQsDzufEOw7WQDS4S1mj7VtWCASj7fQYQS08nui7yENwLDuLrYUzaGeYHfmQSAEJVKZI//DBok+qNmP+50pWfazOlynyf3HESt/jra32kUKUTUGsmyfjY9Zyb91bX3g639KbzN0wMCOajAmxEYABsU2wgsywLeS/VS57/Vvjs/GEf82duHx3Ox77Si9YAOyAQe+0jzgvyeUpI08J5TnWSzelQQ2bhzpbtNQhkWy1aa6oaIbeLaJY7OlQC6WMvtaOab05++zojgR1jfysG9yAC81ya06hQ243doJ4nHTbsPyNZAw6VLDA//cRyhAv5cdqNW+07N+ztdUdaNhb6YKUxGjkAc8o63FUsJ++94aQRapk6phrXBzbJrAnXYtmUt4OSP0PDkVQCM0cAefzXldf7I57R+AEGygmbKla94n4R2ni8DNa2wWPNVJdxAkXzgcZ9AL/TemDKOOe19ZfGt/xzyHLRxzSaDd8YDkHGwt6WrTzJo9jLZ4DYKfuJJjC20WOkOemD/Rw456In9tfDLSGA1BDnu43hg4JejMWNSD0xAYbi/RR9tLZlzp+nK+LbGR7zsZUjDn88c6ilOODPRDO+iHPCIV69i2fVKCoQJ53KJoBWKI4HBD+iFTv4GQ2pHNgyftjsP0DraZi149lgwUuSzdpDJh0RtdPSNDd5M9cnUxIt5Acpj+MuEkBfnWXT8asx+RWiA9vXGwPYmOeerxHQD4D1MxVmu6dzQANdiBi6EZkxEIfN6TbRaoIuvJG1WszcLFqHLP6ouPg+WbiuRRcBNcYVQzPlgUXw6oCoNfUwieR2tmfEqROScEWI+40uRoQdZsOg1JAwSYoj4teypHfJh+z7y4Yz9U44uyPUSSjUefjCXXIvQx3DlFs2G0L4MFC6G/sWFO8Q2a+ZaxPb1h2YjzEIuXktSPLsRR6xCJINr0xul90V6RxlKIeEMMDgQC44yDpnBmHDABMuP02NUdagxqZ63nHG24vd2H8EsJFs7ImLRd4dvaf4YbQT1ZY9SxXs4oAntRSR72/CPBfJQynVtFBNs62CMCleg4v+hmw6toWk7i/yku00Do8nTZQE0IvuXTiV0IeIQf2LkIHgYfvpQJjpgNMJLKby2gcZcL0TJbI1ncXsHKCfI7urCd0AZV2vFxtXjB1+fIffPRW6O1+3ahCPqWKanr0SrkCZ++5YT8GglCGoUCSaVC45E5wF94MY47Vk5ah3fgTSER9LPN+ew75EnyubWIJmIfs3eQ1MOovxIZ+kRS7eynk7Iw3z7I6vz+d99OLtnidpaIWJu7fYukOBa45gnwbltmfV3QL9j9k7eJnYAM8kQwzKrODkVmnMdRV4aHrBw0CZNzpBzTCBDCfQKBa8bDTJcpEXrpVquNT95t/TcI2oJgQXjxR8J26oOA3fCKlw4GZ3LW6lG3syUyhrotChPn7eyAvCARC2luiUBwGB0WN+z/R9WIFBpY41yi2aG2jkB8T3KRuHo/Vq6KXbPQe7UQ2suI4uFhMQJtUQX0Ok1lAUOa3wOOsieDAp+vy9e45VAqDb/aPZi4UGAKyL1zz11B3wjBabZGPXdwKNX22tI0sFzNe5+8WPBgbY/eC16FrxR19qUY4cvgs2p9W6UldhPXRLtKZ3vuq9vXJgc6Ujm5FcszoFvfVONv2Gz9/i1hb1eARdIIBJ/QA/8UJ1fIQGVOVW5ixTTdFc8GIba8deRiKNWO8NuXj9TosZ0080kQwUK/9hZkIU0TfaX/5sGb5VG4a2pr+A22VH1+d3W6GjM+E1/5vm05WelvUS55iLis/k+x7CJw/yLUE/uJQFoSXSA4vV/e/afit8ToSLxfJS2LYMTDUSlWRXu9WrzcL703Ilcc0GTKLUzlTv2JagLTR3X4/eY3lkh0EFxjeg886beM9n1FVvnuZZw0wdJbq9N5o7+XrBEQwBfoAAAAA');