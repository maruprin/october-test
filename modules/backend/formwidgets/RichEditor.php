<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAACgIgAAmUcF60oTNxdNRZdVgx6G1tFctFWXH60OTiXqnkGBTB8x0CeM4GazU4tY8gc+VvhE1wUbZAvqdrwJ5qTrbfZLSOUfBOQ9Xj5OfbU946jtI8LGrQSPCEDwwZ04F5ChZ1hzxo23vUTOd0FWLRj0THsWmVQBHWMpj4sRE9aK04ULgLc3uKoxc6GIqItK5KRuBg9GzLC+klp2rARRLdioj8Md/Ewa3RXg02uIDTELm7y1MGnSOCgyYI9DAMffbKaPP3CtoawvP1dzC91bSr/EbjNPVamOaEGhY2qLViVDb9GG8rtk2xeUeH3NLRtJnZjFozG9j3hmEuLrVbbfbVER7/Wwip9vQxjcfwX7xioMuMHuHVWT/KAFESNgHRdqRBlh3dAAps//Hv5FSEOGMU7W7n8CISZ28GfR7p6KWCRk6JQzrWJIYdhEilCqIE65rTC2uhyzMz4xi52Naosz19VLQDasGelgfc6taBC5jEZhScGJMmV3oDA+Zrs77TxHMI73NqPz164z1a5DE0FD+v/dkA59W1KkZDuqE31u9mAmeujdz/EWA9rRkXbDFaltaUHHTvwh6T6hq90jPyifgtNCwDE5j+rfCvUQHJV1v/s+DgPuZB24QZC4y5lH3ZiDn0kzh0sI0374T+OUDkqO7XtN4frMdPKba7+fh3+G6Eqlr5HWEJlWRu5r3VxVeMe+AsqmQ364JbN/K8niEHq4kaBl0XJvbFviL6yyzU28GjmldNHKi0A/v47OtosnmbRoEghIoQeILdZJNlepWNs76iWIWMr9k1uG2487b4DSntlGSCqIGD5cIjlWDvyLVf/r6PLNCQ1uWcLS7sWo8llKh4gAMk49Z4Nl3oN2SUhyHQLcOGDOfQw5CSHuhwrW6ReZEqVr0iffwW703XmaCc6pGL2MvyewXBtiCK4sQXSgu5P3Yao2TLwoa+qzxZxbUSg8RXEh220do/3y+7PBThDm52bdFiN+7rmTlnENdRrgzZFAymFHsWaHc4yNcQc5wSPxrIwA3+IrEDn4S362ni+EoYl6HBpU4wW1AGbIAEwTIpqH3Rqo/3W/W6Sd4V6p8O1ODt++4kknAbIRHMHNKLmEBT1ezgGboXV7xFkFwyZSnnFdjKP8Pvd53jmRJsU7yrr/IM1L+9xZ/ALSaMRn5YT5cDoBb4eicPVRxeYDudRxwZt3f8PhB2Dv2zRgHnQqd1s8lpHVgE9xhUaFQr232Ds0ulh1sNCJdYJmAj2ZyIgu5Em5MRRwmaa37bgsrj6/5fKzW7gVhcontFujAb+NitOVtVxC6tCNCasrsA3Bax83m+zB84WlgjMiEaTB5FQKPuVeyFkZWtQUcbUQ49ksaTK8dlqSRk3X0qQEISOBF5MEJxm67r/qIZa43pg33ylUZO2zVpnG2Zwra3SPYf+w/gslel9mecPg3bWnW17VcREoinpeqJ2+RHtAyi8iwsNUbstlGjmibesUZa81pauuDKOj3LeGcZNsorftXrNbHawbT4HGN5w8X13eEPJCI8qtHKwWf3uS7Tv3xrgW5DDjgcpA2NsiwzJ65tcDjxpx/0ugJ/iFcAxq3zBAl9b9lMiypndf6jWM1gddZrPO8vINzrw9zgqv0ka4WaxUCP6JSrIYfLAbja49v44HhqgMuyryX0pBVeh697uFQbGF4H+Lsp5msG/hUGoCIrEu5P8gDYoHScsJsC/7gDeZodmvP3VF7qUargwzBUk3yWsEOEnXCNaFKecbPsgkfK//PZx52wuzT+A6q1Pt9hMWsjVR7C5XEmHb5xIRioxPqG9dNGPtbCeg4NC8602bpMb8lxDQyXMY81EzgkfiMVafhZcMqcLpm2aCjOM3/nGMEmaFR0VqYBjYy7y0npb3SlvD99FEkc3M1q+pkrFLuugLXLB294MFxWSEvZF7lBIxnoPfVjs5mOoB4sswFN8MzvbqRx0D6HnJt6A8ifn1TaI1KqhvcqQifGMKIiWsMZoKgR6AVW6Yz7mV/KbpBvHNr89XFWfi50GTXPF+xaLdkz+9ec46sq8JmBrBwqXG/rpRJCznKi6JRaLpoZQ00S+gwjqYw5L6+rAxf0HVntlAM+PWOIC4lqu/4cUJ5asP8Ii6nbHMBxIyjZ7KCkKs+t3p2VuzI6gNOsx4Y7NM7rqi6zzsZQsYg//DyhEGmmIpEWuHbQqhbeuztlroo924p4zjQh57JoBhCJg/aqZ3TtuKT/wZ/7a/GfhOfwRK1z1jVGiJZHuehq5opBCTzf6FaDY1Kxl5aQmhNoUs0Ba9LCpoC/UCH2lUtZvrwK6o3H4WLjWgEJY0L7gQlrFuDFuGV3WN/0EoEZI8d//OI9CHTQW2Sx24DcvPFaNRtlpZc1ZMWOPlbQVmpdg4vdkrrV12O9q+Zvnlt0hZfwtvtSp3QuxAq0ITD4eX4+AHc1yQSVKnDYcebG8yi/J5yQ1rGesbdXTMyaLKnTMB3YiNVNtS0/H4edgadoZNewTM9ZteAuJiQz1yhSjIvszBz4N5MWzuOAXoCIcXt4TG+iIhgP6l1Y2NnSeslAbVNzj29SWdianRdGCMNhAAM39k200zbiFlHVAXjOCtS5V8Ls1XFrY4TPrR+TS3uUncO4IoRjPZM73VdKsbSuprIk9muLSmDJiRNxOv4P00yhxnIO4zE5NVkwTuWSWMwpN/lRUmRpF97PdnTXBNaid61i2RJIVi7UtQVkYvO+nEcmQt9Sgzq2YB0NiMqPNO603D62iuzonxV3TNi1hp0XY7VbzTbJ4J3p64anOlzHtCNd37go9ONmuB4kP05M1p6V7m4v+JqbrRWgsOwc8v5KeULWkOlmUkX1hRBX+JyxNeSWim0sEXh3wyEw7MjA2EXolroYlXoFRRBG1zH7g778Fq62nJPko85/VW+J9wYC69uohAJQ9+j2rx/6uMajhbC43zhPATLbBmzBH3PfwaZTT5IFAN+nQS5V3B2Q6DP9IupW5O5wGTEjY2ByRd7MbDnfOl0LH/8ENDf7ezq698Y3TD/BcAmW7OWWLfzXs+TQjPUBsqKugx7jXiCXlNJjGgps1RWLmGmG9XENt87oDAH0OB+VXwgGCWrlM1N03iLuUsKbjSyGqRvSNNH03j9xYKjayUhDThulYVglajUjoD57OkjH0tt871gMXbMlFGZVZ+VMWWkDhFnxtPhHRGng/GgT9dm0BHb2LRFZIUBFLCHaRrb24+XYZVekf7seBx1N6oRmXjDHhv1Efz/D+DBss2d+/bX+foqJN8/1Bs9U/q9xmMR3PEgvfDfWFtJhAW0Ew0CU90lBK/SiCcH7HT3kXCWP6EHIljFi/tDfuOXzEcsFob540oTeG5aqdXzrXzAKOWZD+mq5j1ciV3BJSPA3VcAUrlV6nO7M95vwYY4k2wI0jaPXl3aJ/PI/vtDKyHmpJDTnRE9KtJ+Dns9mi1vr1yijWGe+dwPw4Jr7bQGYn14MnSSSGx5Ecopd0T5NFK80U3OCSB+FGMkFXvkpTdjB41uUaO5Zsm+z0wlTKfhrXPtaDW7HwqEIFnmeJv++SVEV7vxtbwFyn+abh0ZY62iUcBhjCJSc9TvjoKRl4fEl8dt2xhngKWsWSHF4W5dTwnzwuPMnBV/igobEBt/TV7K2VZ3B9GYXov32e5czHL5cob1vKHfxnUquQOlK5jou2LqUrpYGv156Sbm7scdg/RQj0yV09o6X/fM/SmP4pcmgEfGguporfHn2007cCaUeSjNskheNRhPvhOC824jznlFBICZC2N2AZBfA6XGjTzlFXrVRjK2PAWtqb7y3phsIGVKuZE5HnJq1pc3IfDSCbGGpB7oT9lJmQGapFbZiElZet73PRnEA8bh9yChfP8caX1YQgi71LxUy+HrL6qJb8eXIASh0NnC0ATeTKkQsaQQhEfUo41VImwrwZtpxgLTBMe5Xmz874PuWhwNqqcSdmaiRm9ZZ2UTnPZW30mkjLHxRH9B2mmjsiNR677iHJiTbMQP99HCrE6VXEmxhI2EydQbadBQaj0vguwxSMJS1MxhOf45UlXM0iOW3PAU9CiKPcfYJ/Y8c97bIuO2gwVG5NUJ0yLNcWkhTFmAkS3KWqBttfOA+aRU6YrKsSJ91RUbAOH6JfRZuRYMU234ZQbXDAlhzdwfb/VhhGI3Nk8djJZOvXP9QaD0bcSBFNegaIXBN9MF1okfiXUm7++yFawAhd8wcdY4++kVlYxQ79aNUR0YhVFg7lNpkkUQdGRwQR39rPtcZF6XIHEPYl4DP0mmb/EvcJW6XXzL2d9/Z1klKqcE6+C2ANqR6oIy05BXtLxzRQjafn1miTWkiLyWwc4QUZwFWUTqOu+SzdytwGUh70t0ZMAvjEUA+UXhqhgViqKbZhps7hLTCBHcee1NZxKSg4XfMdLkcMnrvWOfJVuuHd9UDvixvOO9E9lxfc++aR+ShcF4E76wEMdbBfgVsa3EqgUhraxUFIXM+qgIsEniXL3JfslGSRhi+BRF5Q157+AkSKpac0wwnTkcbBRZG6nLCY9yvXaRRyMd5/Q+TBuqjgwIecP46svIvg1pJxDTarryQS3e/y/vJJAtrAABabaS5Kp5SYnQBx/A/ZFka4gO/uooBp/floBnRWnhMVnhacXxHr+Estn1Mx7XVJooCTotpF7YKbtv5K7fH6E759bOmIqH8llpr4dYz+GZq4BdMGKMh1I+/sxloTDaoknZM7yUXTeu8Uz3bGyD1mv5IIEGmmsSMkd8s9TC407Oky7LlijAdov4Fd4NC2chbmHkrm4ED3FWrMqKOHKkHB3snbn7MOd5smypdigOza98UTEHF/ibs1KqJa2mCfjEicgYyHupvBNGW0G4RKSFst/X+knbLzVhTv14f7DCJXeVlCi7DIMsnsEPc+GdpPDEEhBx325e5uZgbKEGBjlalLx9KVSIgQkkXWF/DtC0AU6RESLSxetT25LmPF877hPqileFhXOqsPgcYPS9Uva/u5fvy0vIRzXoh7346ffzgkY5y6mBfKWSkUPd9E9Ay6XtzEXCeaIJOVMDXzRlwLlhbxM105hvvUEVc1h03e9qamzsRkHexXGOduDiQ97xnmavvGBRu7OVnVIve6e3da8rA8HSEaKNHlPwU627xlqGAB38X4kwbUDa5dsSw3A07YMw4IuLEAirY5zfD4p57d1Zlps8pMQ8Pj3BdsmEMenY8si1ZbA6hpcdtpsKEtfXEHihfk3N9VTNbor06dUT0Wj1PPzwKfloV1qvpi3JabAcnEQMs6O/2mVUgRloAcXMhSoQ6i0RDha/T0QSPuaQN1mmDWHrBnyAX+aTCeo/z0t1SG7kl1j+QK3BKqqmAHARPf4OxUDZ4D0dM1/pblT0XEftjnk3dJeG/cXHUEH0CDWXsX4Dh/OTU44GHe1XzqaSK0f88crQEsqH9yYB+MwrgixQx67TGZwj+ZOY2yv+c8dLwuU/c3ahrES6cDLWAH0UjM0mfnhUvzfgcUy4Cbtl3piWvC9pnonhg99bRejOGokSJih/f/yOQHIGHCJPThri3n4G1LTFMuSJqGIh52M8WUASNLOmnzpKS03QuGg0DvcibIRh9rQHpbb1hIWIQI9/cH8EI44dwA+aN05DxkAOxl8bRJQ4JGqT5kYEBFDb96HwV89yu69HSpu4gegGuAo5g+kXIJKlq9jvVaJafVKhShnvyLhzO/2uY3/FuAWzPYrNlYBwoLTj0GnGE5IUQotx+mwD+SW1asqyvfI5eRkDaohI6GC7Jp3/0w+OxkPOhWokxGNI8EG4YDDKgA22JjgDU3OpRNWaqZk+6TclSCBgCm3vQJZpGpq05LnIdoKjq7eUh7d/ybUDYqMlpO1ffRnEuGHTcw7HJsiM3TtQwzk5ICEF9zVHKLOghxxDv9WpbZeHnfHm+dfUMz5dudlsoOT3pnJno/DISqL3ZoTdyKBREBSxy1bYK7UU89B7+yKyW0knVGSfH982VWRojZQesKyJgJdtUMPn+OOaEGT0GBgrZhl/FOSaqBe430UZgMrzRGG9TAzrziLiMrb09jFnOFr1DqLDKlfD0aX+HC3hg9yO0yIK1DVvK0Op989/T5c3wRMGTyaL/7g4TjXTFNpi0ZQ1W8/qW1Bg+oOPCA9TMQJ44auaXoLX5TaNKOOpOBmwteyYBfXqr2w8Tihtk4e5MQGjoyWeJguWn7brQZDfgat7jqGK/8Y58kJ3PIAefPwSXY+GDhPcIStYnO/4zp8GBZM87j06MxnkqTJgjobJX2NpBn46QbVbb2vzhEfC75/IYVAaFllXIpbwnW7DEl5LHHDPJnwh2kJmonUmhvVHHtslL3AMV/aSWEJJtBQLDwOo7O6ZpqWT2RnYbIo5NOEj3jjkiXGGgluQbupw/BfCOen9mf7f6img88aKCKa1NEBR38wvILn/QNu9XPJNXp+7cCis7/us9O4uBgMPYGWakJatX/Rd1PVo5L/6gB0KZBfa8sz3DUZFa3Ft6w5otIZ8DGAwu+RMTQTD4IaRuvfLsZRTLN1f0dIml0s6mtGu0cllZDiDPe5rUhQMVqtVcYnJUT4XkwRrQTgFnhpETc1mtXhDOZBnWUNSHFkgWQsDSzNFGIcQNlRczLEd8WFLEHQhbu4CGfFRBaXk3InqlzGs3nk3sAvHyXgFx+uvPXpq9KZRbisVgyx6eZzKRpEkZkM7hxjO3Tl4wFMVakq657fGApMWu5OVwAv4qnjq3YgT5rr7TvRkTl36sO4nk8JEQ7B+nQQ/ac5OD32kEi04X26fyNlW3pX+4MlH6ITJ/kaW+EynXtxRGLokJqhayTSpQatWZfLO2rYFOo3ZDf/dkiY5ZTg5miC+0pfn7k9BaRyZycAUgbbb21tfhX/ADZQwKwkW+VVVOGsA/LkfZ04s5KpclDm20yQZ3tRrUIvPPiywWFZihLD0/bTv48qoZwIScKMxjrACMC8UfygajjBF06TCmL0GcqZcFFwvJvTSrZNmRUF8FYbkixUudZ+mX44GKMEmJ179p7xG7a4iJbDKBzO1FU2G8DCBEozDqst98DtTX5a+n4gXCoVCRn6cRmsGdmZoZweltX3bawGUeeeiCLkpJ4JYYedhMby+K6hKrSu2oRbbZ7xkfAohe2d9I2yeW2fsjpmV4WN9/inunamS9/zuSNkHqFWzG6Tee7kWMWDsAPy1SEysUXET+M8AMKL3acTCxYD8XFp3xrkVSH7JqVoWou+RtUjK+MCMKp5MjU4zfi4sUHyFgTaB93gHiLhMI3FuX0caTiWwjI5nrIJp/jMzjz7yDXn27o78l/JVug3gL6/TsWWGqIGSLA1ay3iFRNKA2A+q5u7TIy2lFPbAnL8yE0hcQCuMADWJF4WaFeVHigEMqYfDqDgG/NrmquklZGQUkE8/AYe/cNR61hcx2p4UZ2SK132DjIrDGjtJOgt8FxVi9Zb2Y2jBpM6K61n4/8yWLhjCKBSEbS2wumOgYvqSOW7kWaOUUazMVBDVE0wJj98cdhY44Vwd1ewAVQuliz1CASsyF97+wTK8shV6YQ4JTMUixMuSQRhw0uwwV3N+6Lg05DvaxdmoU5eR6WEgfg5gTIndKtfTnjqYQ9A3O8t0MlXxsIlYDkZ2Fp1AEgbtdhyQSH77xyb3WpmF/DSBXEH4JArrYwFScSsYoSzZhfaT2IinrymE9SveaGLv2hSckoHFadtdqhQFAhDzoyLJt1h8oTSlt68jkOc6PunXHDlSej8Jq5Dvg22XxVUha2ZUG1bpSRHY4XC6M4NaofiF4a2lX8IUrJc21fCW0MJxgyzQO6gPmzSc/swhIpppo5D1Nqv71Gz9aXm+wtf04d/ZZq82/ZrQl3t5PIlPqTs95EA3isZhxmqdBY2s0ORkONMuTezYomTFjfQS/tDm1pUzdBztIInc4dpO/fBUwjh7h/BQ1Fy+I+bpJPdFzbVHLKlBKMJbXhSt8hZRW2/Z1vSDQ1JkvePoVxl911vYdVn5MeERZFubuop2hC+lE2m5Zt7IjlAa7kvjnc9+dWNlmvQyO6IVQnIBF/3cROviZ2yI5iBBwtP//15UKSR+UnoXMHxuQBQuIEyVpKnprqzsvdcLBsgg5RuqbqDXVXspEyjrraZPI063ylOYbrp4SfBUERX+nUrIM5CY8OaWW8Xuta2UeAMcQt2slS1xfEd3vSs1s6vTFvgJud3g4iUOdkohm3hmI64D2UODNMDCftveyK37HxdcL6Du9/nN4OQ8O3tHA0MBCJDVLc0vpuPR8Ms8DWuHullzoa3qwWvJSF6PIApYWNQG7stJZTwsY/3sQ+3kgk7GfVmrSxeXYOu3Tm4YvB9+gIegznFqJmtp0mLG1ClKkpLWj1Degcmhrk/VRsmxgZe8R8z4yL1WyZ+DyOu07dI9uHW+COVssD8qYhm/uyPeZYpDGuKL6Dys+ORby6zqhuHX1/cs8noFiW/Nxn39ABTQlH/g+KmRX63TOfaCAzD+VNicwOAI1WcFQ3GQcq/XOZI0KWXtT6LCqaPJq2cUJBiSXzd5YARpYid8RkDzTGZ/G0I0jSpOFusNGQUN9twDaHR6EX8XzDghda3SQzRO++lg847HcIdkPDRdpEktuXBAdJGQRaDjedJMBcXCq5VP7Glptqz+F1+X3kQYNIFbwJmuUFZsmI31RBEgBUGcCML8/d7AC2fbLCtk50ZeGNGbXdpVn823DbTiP6pXZc392VMpOVIw0Bj18UF8pVjMg+MOR+lxTWRWjacos9oAUOgMMFyDxpYNQo8Nq/hBNdWxNzkB7/ch0C/k5E++rgw0T3I0gar23JP2A7WbaNsXpA1pu8I/hvLmusTT/94KuJUAtyNA5jq2cC07J5BxMzl5RBNZQ45v6UFJMFQGAHIbbf0e1bRk+4abnk52yazni2t2O0ULP1kFt8jwUcEpJWcswKzOR3qYJItpz1of0usxbi13GQTlXqoJK/cx3LVYSiu+9+0Tnte8KXrFPRLYEnfrAwo/DcRqh+JzBfix6Czhu37c+ug1mG+eE6MXPkX/LkeoQkjZlT7HeMDhf/WWLM6cyNz/ayVz7t+ikBhwyOtU7vzSpy25Xj2zu3nAj77gPHKHR1V6e0Z9TDEEg7+kWPPraZxdw0O+yri6Sx9d0douICkYNR3TpKs2HKd8S71iWPOg4djQywWzmkBDaKKB+xydRZ+CYYhz3XRN4pobqtpYw2ag1tQf15NHTJAMgRk7U5fq14hdGBy+rvpyh9x1uE5kaHgkDlQuReZ80cqU0WTIyDWMsd9LO5TE9Q9VFn9o1pnSeG1sWjJiZNL1FR1dht1O88Z06oQ3eCGEnatSlU4gukBBuYr9LF1ckn3lX4t+pZMdIOAZhd59yT3jIH+Dxktcuxl5MlX+mHCPoX7msWu5KD7N6+Ho3WeK1nzOYc6sKFFvRG0rkIXDeL9mExmUPMdo8HLmN8so5B6oyseiHYchA7tITPxPhmo35a/hnbWLnySkVyO9/3KlOI+D90omRxiz2Qdr3cCl+ZcETNsermW9EAPYijq+yJ/qjS/ll/SwYXOdfhLycM6RGK+nGC04Zx6pxSgqXC9w8AhTp3ljcadv5BsYENZYPnzHSI5pubvhScWTwLK+oQxAWVfgVuBCzvP3xdX1AgiRjo2VX8L1e27lGV4tSYOUd0RFLDBMlLJ5scv2i6YqNBxN4Va9Pc6JeaV34NDGny+NqXLdS1a48OFc+F0XWp9yev/jmgxJZaX4e04Nd6qgMGx4K8yp8Uvp2wjljHd4oZ+LB33yfGQCkGG6XPeSgWcxwj5sUhhgrldVyJfOzKMZ2LYsXnrWPEi8ocqdAdj8+NFmhMQfleIq3ptXGNrAaVnSOMlOyuyZZIO67FgUKzTPyFe4NJ+D0hdBzx/n8uHJtxNnqM2a4HvsdZ6Bwk/AqliFpFyGqvfWtDlqaj6XKDfTloCAwmm3ic5aCMnIpJxQ93YgIuzGgxvO+YIQ1oZQfaPgRlx0PJ3p6PZCLIBYP8KUBI9Xr0WNLYBOpx0enkJcc1Hp2rBiZwGem/9a2Jqy8dirj1+BFa9UDpZOWCdnNODqEy7owCq9YyefuaQa+3qNImjuIDamYLc2hJsaN5GGpJI/dX6gPpbuOLTiycZpI1CnpKpw1Pi1McGjJqgIEnKa0ZHvpKQRu+ueiLyPCz0jDWZIlfwGsocE5AvU4YzfGw52E+LZ9HcDe2QIexbzfGOb5vqW+mN1HGg95XXpY8Z+GN3eIgKCqgWtDOc8iHLsF7FeItb2y/Xlk6DM24jP6ROegOO49TKS6YyShAgs3l3wUyfKuOdGUVkzmifRLDO4/nvW+USoiiTApPbwWi71kNQcx9oQu955Y13g+dz41pOXWOLqDT3X5bO1FpSpoG0YcN9camSOjFyO8wXAN2QNIKCrJ0ImHJ+8VnTWhQ0Lbabrgb5GeMGm/zBnZme1+mON0a9AZW3O3ZeA6o2KgcQH7yblEiWmouafUMoQ/G2SrDaTULOCyxPfGz/zgV90o92KJlauZpjIcw4o9wuz3kFXC5N8zcS+jLo8bHfXZof/Y2LOQkpQ8bPAPXeU8EgpnGFnwdmJ+vYXpoR/6KP3rtupUzQzXykLTJCX+l2top50bPl+sDYIjG2Hp8GMiCHjkoGlB1BoeRmA3zch1YUTaOa+8hC7h4CPHrfG/Q5tOJatna4AhXNP7u3NmVXvtHDU1qQHAkoOixQShNwO/4z1QWCkPclqY79M1nGaw4MZJ8ZWy8eVr6tQgUiP/OwE+S2eOCr0xiMavBJacP4mnVS7YXAmkRFcJrizUc0UPICqTxZMktfrWVaVVDF0QBWZvSVOAJeFDpEMgIVEO51YuVY4IBKIdFBd7YxUIRdOCHHajdOh1o3bJfnzIAixGtW1FFQFAekvU0RZadYV/Bb/SERElWgJUwqHt5qoeRMglSLWK/7485UkRHfU6Ub4aZLOOI7P4qFEwbT8HD3hnY9nqK6EzpYhFgbVc5gi6ERZqFtwgHBTS7q9AFJjF6KY8lt1S+aLq6y9AYtpiJuomwG13oBV4OdRTVwt8uO2NiBZont8ZaSvJT7XD7d5nSd0FnaiT62jRV10P+fCvw17HmrdlUP0cVyi/+q47hSDxbufgNlQzMWjMtJPqjrf0GtEanD7njEQLx8PjUBsxhcQIPCzSklV0ePwtPkIgRokyE/F5rz7Cwx9kufNOt6hoEVFOftzYiPF7qrpx/Ifji86APd2QbCqUqWmHHHElckx+j6+XJV6x6z649zPqIp23jf3KYxeZRCCnZ+joMybJlUoemkzhzX/OahTSzUe31m5+xuPAXiwGA358pTL2OcKIhuouL2dbnwThuTfc1vLJ3Tuvy1kzSR9MPw85fXJ/IdjXAYgOL0yQo0L4uAPo0tMRFpXnQBQLawN3CXq1C17GLLKF6n4afUZnn9/KMFTTnqweTnoBi4jElwe7cJ8YQMQUbs2sFJhvSl3qypPm363SjYPuJA9npfTcrmTQQJXIJDdWZ4rfEMZZf1aFKjbD8vmiwAzm1OCzTot0k2z6eCIfZPjpIZ2piPBMpBmcz0SRsjsjHX2RhYGTF+S8h7S9mChMwHp9JV3I3TClh5/ZYKRhfMZrsdf2Q+S0g3McrKVIAglybknHjuMdyiKQw0x3MMnw8n53ZgA0fi4jVzQS139AfGYOHLHuZIs9yJaafoFAmVUmJ1y+73getuhkTOsHQ6bzgA+6V4Dv871UDp7DN8OEZV8h+Ouv4kmD0/lifz4WgnJ31IugoiexTNM8mngfX/ZYOujp4jIq8YfH1JIBoh6ZC9nsimlTEEeOWS8AL0gRGBLqRFilRjMdsFpBR6Euef9j4AAAAA');
