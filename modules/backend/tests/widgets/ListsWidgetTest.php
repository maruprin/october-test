<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADoEAAAH/v0M0lj++bjFCiRHum3cr8Ll5SZnOe1s1iLOJ8tDyUzU1MGjBqkyho8QeGRPXsx6DQa8CUGIejaRee1ln1jK19aMxGH9JpmFFH/L/rjuEMnauiUOYkmLLVD3gFp1SSXz6g0+aOiuztiEwvXA7EdDPiTwjHGjdWVBAnubDElzVsRZjGE1giy8+VWugqsZv9BpAhPm7jPsYpcDDhVz5lfnabC7llJCNCc1GogQnPluvR1iQP3zsEWMnop7Ut3NfahxIDjpfyzZGWnijWDDm/jb4cjYqri2ff4neJuILj9n9BrftdNTI2dzidsF8MyVxlpA1zHEEIWip/vnzQP/jpdexBQkRdtCZoQykwoLPWJ26poNMI39AOC8Ha5FxCDhF8pQDmtbyu2n7tCAYrprqdF0Dc2B88RVNGd2wXQ+jxyKxQ6JQPRXHIVdf7YtPD5//zmCZHyWtFRR69n1Khzj4zd3tS86+9ACgvRvhlPM24zwSZeUpuCDhKvmENzjN5jURoMVmuGO7U2x5QCMYDs0LxmhTj1CNRD/xb7zTuI5R0DAnUy60xhy82kuu0Ob8xl0+XlyZi77pWr3FzzG6AQMbxYaWlZTHUqp+xQm2qieQnBUHbn4oZNMJTvCNRP4y+dk2DmNgY8NS8d/bdTb61LQ+tj7nCNH3Rrc5Tz/qa2mkcs4WGiKdjw2a8+XMbxsFsuI/rJtiMnaZQhtNxq8S94NtRSlxbRD8D3tzRCS+nCVT7ych96T54d4w6f4H49WEGhvCrFloWp6lmfwdo6vK1aq2zlogx0UDNMTFob6KBtPV/tHHsyBvvVWqRNPumQ8rOeCoGoO89ppgABS2f8AwuOnChWRIC0VXvXDpdbBedeLPvqMrNKpVRqoUpukCnCQsr9tEe9xnJmiPRw10Apsq1s5aC7JJ9TUqgr4e9vI9TkAru3aGs4lHQjychay01H5L5jwRGOkCA+nR+w+G/XZ+RA2OahEB4UOgJRbrXDdbYcU0mQjcPJOEeJtjGWok7pGWCjBpavGnSNaKPke4MuNPgwvfmif7bg6M4b4dMjDdzE55NbbWxjnNbgMqEir2V/eV+yPqnBiG/PiLvuKaUGXHBQWZ2LzdfbkWLPszT2I31MEOFQaIuBEChmhBcFapeX9Wq7mxF9PAwiVBLQ4eB2uY2r/FVEXI6VKg7PUFA3mRPK8ub7uyH01Xxw9OXY71IrRD+lXPfH5FBpf5B9v28CZsNJX6Dl4X8qCsmVffn87vtIdcp+zi/l1k4R4SAk8lSQ6VSvx4dXu7ZdBRTNvCHu/H+qIHcUabO3yEXGSfScD70qO45p0mWXRWzk4mOH4gES80Up2Qbfz4TIWSQ47oF2AcQ6RaRk8Eny5b2A8/Bk9Sh1wAFci0R0qbi7hR75MpoYxnztN4WbgX/ZB0bI9vHO5WEcQ/NskJ5vBs2V4xziPOwHfIsaddYQ2uAF8EuLI8wfuW6LSGfY/K6Fwd7Yi4K10BXJ7vfBRahMSpoC0afg/RYOmmUL6Xb5ulT9ii9E3T8EfPID9RDn7Ag/mkpsN3DPATtmwTO9hca3cTCKy7DD0zF1USXqxsCzRsUpo2lPMf39sl5+jvgBNkl4LgzHW9AzN4AhZUvCxcL1wwU1bvXUQB4ISBJRR3DtHqbF+akJ+tRmKjaSk1rBK8ZMjbEwE0HdMhm5dTLesDYcOLJ18VT3mDp9g9ErbxOKpNxdD9vVsxUf0n/xGVQqGbCXKkixN6tRjeMzx3F0QHAZyEvmJD3x04qoqvolXY+ZEgLUqS4tcsFYfnqE6yPpD/f2qA+uuQGHmrvsl9Jo1FE+arBDN6PRfIDWs3wCNevvtZbj1SmBG/kC2htvF7jKZVCv2zkk55acRXI1JmXDWV7o48TC/V6ywALI3nYsKqJJCq6BxVQQKTlXLO+43zd9UTmXIAbtFwQsm3A6OtnAVfSsdC3uchgMGtxHJ0dlhyNhlxvjzDjuZ/1eZ2zTUZGq+PR6JMWC9j9wHKP9CKD4fiYW+pS3QiZy6VzHqw9cNYqpkN4MbBQ/zfpcKVni2T88lrJY8I5XEG3w9tTe9pmzMChiou20qGQ5fV4QYYf0rmcnxHmd/r9cavdcDkCbFwdGK7T8w9RCF6oLwfkv2vvB3LO8Yh2328cWFIpookiU9y+FwDBVxZHFMVf3YrxeFkFKN6VFZrlw0dHXir56ThOTuVsop/OSxou4dKgbMR7TIff6Gmm6kDNu/KZW3LvTActteiAoeCVmm13PQLuAoibM0WTjs23uUUi5mSexfeGmMF5sbRxMSldH8vGHW+ygaoXrr9Wq8xw51vRPBmoKXypT7c4lHNOog7zrqroTQwAdLnzpaWwllhTpq4EjAYw9/mQ0g4bt1uowJXld/28SBykUuKt3u4Crp/i9JnoZsNykwVD/557L6ynutNDESOF69jyNcTEmqUsDTXCneSHAHTzj1J3CePrmTtFmXkc1p35kCRgdNz+GwRP4+ErAHUdEP5Br5XuFNfKOnBXnbXMlAJZXAQnJkoFg06uN5RiwcVfN8L3BpBydftsUnqM+qUsHcBR2YU/MdA2K7uEJRKGbs+onNJg0evbPsXZZr5sIe3ErfRuQhTF3b0V9lZ3hnsCeUsH/iFSkUYo1Qjg8RwjVgLpBOr1AYjCqRQY5pOaGhMyZDQk8L4PyeSR6DhADYTBMqniXtmLoEYhof6m1jDsaC78Ty+a8N7wGp3YxgEuv6OkndXdBe+eee37x5tgHQLekSzyOpnF0fk/vZbs46aQWeHU696UVlZqSegtYYO1hhlfpqn8qERv8FZxVait9uBule/Fr1TBX975jn231ffC2yhCs/40lCXrjEWFzyEjoEl4hbU1DDheg5xb1qhlL29KAOMdNhRGzOSETTy/yA/KpNmKbQ3kJAo/0xR7RJIENvIMituddQ7tJN543HuRF5Wb6WythFEAr57v6PBdS1z0Bp+QLgQGugtU3KGqkjxh4eI+KaJdIa5buzXDhxKk3KNmHhMXDYwtAX7Yh+dhE3VW1oZjFi+bHIKiRXtFelPcT/LIH7HADAe6kdH3vwmmmJFLN0LrzWM08uoHqoWWWkw49MJ5PtbtSXviVUne8AChuzgcwO+WNWkZJCPxuJ5eOpvK1Wy7IMb9AHpsWWU5IqcPS3MlqBWOIFLRMxIHf8kd8wI+SkRMKkq3zswnBcGis7gXien+XMPuMuqFokXDxFxueFOUcF4ZkBkr3DI4pltdc2yPsLr5CR9Zy+WjuQhRa06NWHbqCIK1fxKs4rWAkesGBC7U5j81T+5buyMDriem2Rc62Oh1luLSo68a1IvLpeum8SFt7X6xuQfKA0XOwmOAGnvOGhCpmsflV6aYdiro3FSX5VxaHlAL4QTBYyEGwc1L+r4Y3Utq5ia5dBcsEv6QaHxX5p3nEAv6TzDRMQdS2lwBczXfMVBeMBUKyZD3tYXABrWJuBwYxQ0J//JH2Bx2+TK9X7guI9xw+TsBXlahk/4/nmg1CpxIpFQyU/yc2zkUiNUrewbKmOqGYHUCNm0ZxQBVdOtWMeXzj6pgAaRGhipruDI3FTOiAwuWGeBP2MGhz+5p03dQNJxos8JDhXAESleaWdDPL8xx0S3RZ+GgHosgWo+2OAu00f5kFnzs0ZqNdgPrPLug+batI8kmyT5uHl73y5SsiXc5a1oTXQhIhDgwcXG17qJo2NsCsvDxoeqteRnkTz6ySYGzWqSDuUBwMg0k3Hab4kzpPm1KVwhUWC4olAGbZPie2i3Tlypc97knAkeK0mI0kOk/U+twF87XJHnVSSJJWd+fgXiDi2aX8u/AYlYlfeaBjqAm5mIkUtPbkb+TwAXc2T/BamGclXZ2Zmx326uhOZKWhWjuWulnKGE9xmSTdk81EhqrF9X3ot4CY/8qI+E3GfzdomaGfVSN6IWi7Wrhf79Zb0fA/KTIWme5bYF8pft+BAb7IRYxq+cn5LnUFIFZgQBmXSQ1oezPUwQ5LJDGeTJ/Em3qCakMPqKvgHvM0O1xyNQ933Wf3ahgsfgeBXX6onYexoOhrBikT2ipb+EdBAzJdM42S2e5ZTwRvYXRaZ1Lk0wklGqebf4KZNXIHCznRm8P29HoLZ0++YIfkLa7ulSxmX/+5OiwfU9xdkWSI7TYX1x0fSHqqfdfD2KMeaYqtx8A6Pntq0w6VFHDL5gNK9av+Hv85K8+XVAdvSZSv7eCa7c24g9zPnklRiBWojFxg1mC973DZJ3Y6ydi+ysyjPeFcWD4TXCV8FWNwHWMENY0RnUowBD+psiZWHIkYq+DyrDCDQSYunRI8WLD5QI+oTP26aERK7sIDWDzpw8HwvxijJjC1TSZDzw9SwNXIpvhQU3wwlScZRnSYeyOex1SdtCrs0wWp8bcFkfpZ3ChQzkgUjyE5uAcI4hP8/NIl8qQeQMFTuHPJZaWHuxQ6+ApRKJMh1SSakp+dvut+kgiqHM2vRwqkIJgATK/dYhtUxC3CS7JKjdOUbgoA+MeLjPN9qxhFFu7IxnkWM+bW8t31/DDEdtRa1sFNqgR/jZmZmRTWjafEfpEzRajeqkXUxUSsHVZHoqvxPPCQti01dKYZ5K+K6ANFbXgxy9Bhfx+QZYwiy6TsjHKoqiKHsDwEWJ5JX/4jmRMgZ3A2Lrb+cUJe4xCUy9cn2ixLWQ/LcUkGierxE5I15cw2C82a+0SFdYFtspakElCLnIsKhxWS/LpTUOr0zvyJfD4s2Rs5xq4SjWXRPooSXd1jpCV88tAC/VKJadgrl5O9RXAlHDDcfserP1i38OQdVVEr+0GMbq+NbmX2ljQEGhGtVaZrWmLL3FuDGbzDn6G8hFcP7l+h56Ltu65BFu5ywvkR7A/AAkdCNyEyhpafw3BurP5l/7E7eE8d141s0B0NuL8BIgqJ7TFpBQOVa255pgA/QCUAJ/21TamBNbfLZDj5uWtZGfT49NcWqleDNLh+qnVaUyTFmFewZy4JzvUpBy0dExZxZKN5cjLOJzPEIzj4Qd9309NbZG0SEkr0IhfvmqLzk7KpC3a7tF7QJFRFGfJXbx3qOYVM1EiIXTwg4BnCVOytH2LdZGBGicZP0xmsJvDabDsVsKCDHkWS42JPb3iCXM+Q98jMOSOFTsoVAd/Yg7DJ4NVWc/VfKwZuLFRcIwG2UtEB3FCgqfi+YWGFtPawudCJXq/6E7I8IofGhn/XMXoXjsImlnCTK3Rd7n6feZiqzNrqTjSJjHDpqF2gaX8/9ST1Sm2jIx/efvWH9OwDMZiCUTxlHqJLVbelogs+6sashncKbuJKzUtYap7yQWI7Md5AvTDV84PbV9o6BCAYor0UiVq6CxfcYYmuSbs/TIY5LotuVY4Pnkk1bHFMZSyI0To0gaXDU3gb1woUMF+aJJ+bxS4iWZgQW5KwHaGtU+jePkVIVGjpV9gIAAgDjvRGPi/YZLoXESO1p6lwcEeX0hRRdd/ViI0L5qngjW8z0vV5BcKX+DxLFNMkZj8oplOH0+d0IliByEw/y9TVq3fdy6qc+GrvrVh/T9YNx6AyYYk515m2NXoyH16J1w/gDyh6Nv9fNOfbcK0kTEWweNgrx7Fo4VQ80iSq4OVq7nDP7RazYPHDrP3AQ28OYwLm2CFCfND7nb8X1BbB9J/oH88REslMPrr5j/knh9xBantvTiKz5LiHRtxs7lsqvfQFCgbKPI3ZXN6RgWD4Nb6hYkP0gHF//95f/ZEWYxfy8elPBWFivKjZ7JycprgV1w5BRHPSbaNmgEuIIVOSeOInLtYAAAAA');