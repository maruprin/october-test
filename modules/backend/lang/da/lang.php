<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAQMAAAoHXbjXXXT5o+8CQp54BrzX8r85LXK7PaDW7Y6b7LsBG7PqLsXnHMuloJwkTZNrUwhHSmCfcPwa3jlwFzvJLXLZn8yQ8Es5zoGPYEw4YrY0+ihVud+TJop7QFHWW2ebcymjH+OykXoq7kI71+4WZGiYbHS+BCgNK1TQxF2S1IgTht0wCHVZNnwvxb/e2+iqVTwKxmo2b5M/SkCCVQgyVd6AISuFrzqKBamHUz8a6E2wrxAxXkJuYMyUn+Om48c5f8NuB7fY2IjjRkx9a+ZMnI+aKYnIIj8JgFGYkcbkO02Mq2uo8SivGtAhUKgKUAY/lUnkZWJcqTt728xSvpD+04e4W1eYngf82iy0Ooq3/bhtFpz+OuW3BkuYAGiXPoNWQF+Dgnk4BcubUpf4cJzm0uZz5dh7rQDNqIEIYCjKGronNGQGLMf9IrEvzjaLznakJwyUf8ZlPPjf43r/VC548loElkZDIsDC8I/dhvn4knpmxSVy+TRchr5Q3sg9xBLlOvf3Z+02sw63WMlcs4riD79cZEH3NijK2PUVy34BIk0QrSQjhh7glR5NVlw/cVZuQJ98UQSSz/OY+h2qeysgJY+UsqBuUPHgUssx6fmgS236/EaP7LBzjtx1tZl+U+a/kZKXtleaT6o4QgBivUKUbucuQjStUhRhtyuwpcqAfpGGKqoKjA9ldc8Vrifwy+gXPhjWZ91U+pjVsexZNKdoBQHoQjpaUiZfOVIKk0Pup8RrlKmbRXsJjgoe4TH1jQriGyICyqEpzmJqZKKWqDTsN6Y0ihSyCo6swNFM8by4CzkucE5YBNa+PiuiIeUo0D7FiJ41rbl2Y0SOincymT6Eatkxt/5sN4DwN30g9Crf3RgErcKXyPW0CrrKTHJLTaFzZqV24A76IVQSvW1swx5kFzUOi+32Ofrv4Qlz4OndYKjH5WDn2fqfsNW7t8CVwrgwJzTlFTFchXSBCzviKcn3Mt+HMxSal+gLPL7gD3tExqNFF+1A7T6CIlSX1JkiEI0JRL2afh9JBQayI173dqJim54BeIGsWKrbEASbL9lF7dBv3hEPP8zjEDHMmujHU/ZlsM/p7zQh6Y4R8F6io7QIa5X6zLZBO+63SOASuu8/WnN9p9Wj1Nat1EGt50jkFYjuhB/SHSo+HFPLyoDMQbJRD9i8Cupi3r/z+b8N8hk8DI25kXj2Hrb4u0Sme7mR+NM4ZoRR8/PibfFnHI3UfNp0SXMEYCzAye09MKNo/VSdtFdHH4Z7+ChKRtAe2W3AW27DYF8RvEIQGfoxCca7zn8pIwr7QsT9JdoHsLLA7IKYMxZoEuImQkWQcOI1ljbIEPfJVcBcxhCvIlBKXmh/jbf78qpEBcpQ56HnvXeCpOnINzrgr6U6WanG5MroIQZK0Pta/J9AYUR70Vhr1xUavflskKZwpydyAGT1jc9IgfoS7Iexo/m+ILDfRk+hdSU2ZU6w42MSIJaeixK8mN4Cs4ozuDJpMPQ9/VlDo/0BWtaOuAaoGO3cVhUQWrlgNZYX4oEA31ndXgIyy28ff0dRW0Kc0Ji/wF5t/4K5rZeuEYo9mdt70NxNbvFcfCt+AcTGfsQXSQRlQ4kjdE4+8X2/v9BB82rA1hWnKHDa4dlIaL/Eyvmwe+fz5OJJ4Jbc23LQ7XXeZSYZBGEzaqf5sJkQIgVI8hWvWiCm/dfYt/mket3hq1m32qGrswuDOy1F2zuTUYS2rWqN0Hjs7+64PDsd53R77GghHYks1u19EP0O4AFyB5b+PCgMByV4paA7fR2RLwNaECe6ce5Wuon8gRWLiUPzSpiATjzhIhhUdeVUW5qH7imagfWxKfzEIGyBNUuiciuGS6+BHUv4igvHBb4u+/ocb9XL665WBB1g67876TtoJm0MLLq+PGGtWM+H+E1q2wW5MocbZZZVGK9VSMUMwGvGEQx6k36cBAl8EQsHcwHuF89hswj8FHs8F+rNxxxSjfDNXp7o0E0Hp2xPjUN8NuWC1oyrosO6LGXYr9HsQKyJqIyWkL2JOHTO90iRFAbBbP+FucOKYlVm6QhxW9vbmAtVdFW9lsv5mHSfhWixskNSq1PGxFakP/W8d6MqRCDzOit5DKfHjEMuF/vF6fA5pjxNJXaV69vV7soc0EDw2/8WSFDA1IGTUQ5sdfJ7r61VMO/66I3DQMJ7cBOe37HjdL7eCSS5NQASNEfi4Gj0uC7lnQZVatFHstRGUBl3LW2DfdAI/3GzYKExyBJo2Cy+0JL957R5Kdnz3e1o4lAVyQD0hYUX9s+/CWqmDS2r17zXO33LH6L3oUiEBDVcU0ocb3TRPk1jhZv4Js3ok934+cHMi+Jlty6mfT9/6gUiwKRA/rrl+QZP0f1EDdLQHq1bIKK2c+NvRWRWXzP1YQPkEHHddmD6Yf3Xykztyvi19Aihk5OT3nZmPB1EboGqQu/RjdMftzrTUJzLVehxA2v1g8tEzkMd30W938owUwvLgzO2RxTB1z6NqOkd0t+dNzluReSKyzDLoNU35Icax1dUQt3YaR4BGzN4J4b410M6sYB/512Be3JxVADMhiAAGuTdOh+uNeYQHnOSvEhC/buS7XBA4KJd9o1X5o1ZZWKfXloF1NRytsTbmjLDANkF/zYvMlZsc7O1gPZmmJ7DGmTqvzeGzgiSOXlnvsu/iXAoP7eg3Z9YQK/+RyadiR1/KnHps0BnQlDsUjquPg5z1/qziaEmRcXg8QwwyievhTnNOrOwvkHHubI4Axa5gbIwZSGodOMGfwAExyjia7kqjwpYWLrWEcv2tzdA5z7VGoz0vCfxF+payWlZm29B2Fl3C1QZClSYkRiYC08FXlHu+t1q6a/DnFzsbYPlmO1lqXlLdaR1k4SdOQh/mGcBGFYqAJ22qerHu38e3I4/U4NZbcw3bUupAlfD0eDALvNnktBZPK/PiptYRDt1M+sexQvfGa4owI50Lt8SEeZYBkXHVERhZ3h/z1VxwR9u0i824s1o4wASwAqSK8vcudeZpsGF3yjgdL7C3GjNxIYHOB1RRQtBfekI7b6hmaBpCR1zpo+t0wdVkv3R+NLl9PNwnSr00pBZxye0Fvo8Q6V1jyvwinisrc+Gcer192wshrli7bvavYVjZrheGeqEIDDmTjXDnUp7p6/O1waAFKuZ7MiJWHY6M0ekTxOjUmD5tpGatfD7x1qB8zpzXZAMpbRQ/n2xCa1Ss2SrEfAdFsoTvViJzc8Mu4AoBuM+yFtekKJwapXenTVr+hr95b4+TfaMxK+u+uVbF/nlsEBVQqR+sXR+I97Qpw2O0vkcijuKuSGkW9hZomqrO9D82UjycJs+1hDE+31WKhGgJSzXG8OojbZJUN9P7Px18hLbT3BxaMyT2cbDKPib4j7zpuP+u6I+iyp5nubMNlIU9/2GuLzndy0g6urb51stFIFjfzSKa1FyfemPHv/8h+3kOk+yqkceBSjo0ffTFwv7eSUKELSmWFv5eYknPqczKgq1u89KgpC7d+QzUqP+hDZ2z1OZr7h0Q05zLPj2REPq+GOwLfsO24XimA8vjRHgST9UVyFY8X3+lxPD/YQtaUNkyYCgrvq84f7k147+ZwDONN+xWWQT1c3evO1cPguis1UCXTI36QQFQeqbcu1K0wKV+dh0BM7rtJSzkgkb4Tk7gAzwge7/i4nE4XVGxqm3YeOphJA9DGVvB8aPjUn4Z+SfOmNCGjOz5ZV0myhSL4QhjhN4SQBkGxumdjeYqOgSjer50ghGn4YBXVWuIiWdgmMe2AldUJqWgrAHPNWBplTRNWwje3kBPiOkYexm1NpXgkamrvtGmK8Y05QvWmnb12/9c9zG6wrtirNsHwgmqOWHfAeAKCuAgrH0+8TBzwCa9bDOTMyzMZsPkRHGW25J0dj4g/w6iD+Lfs74rU+Vl4NqjSd+dopfHyO3v+IljvQLjRh6wIrGt3I+i34BJ5PgiFfCC4hZ2TTF6kMcnFAniJ5Z5Ty33Vvbtq22yIz0FIWkrhRe2cH63l4mmmuXgRuhdHQmZJ7gz398tNnz2et2ulARRvF20P9BCSYJvK1BoFosbOeXKYb/CE/GOfKpLyQM6JYUQdImtXU6LPE409pKNPTLIIpF6cX3OiY95FViUoVVFYN/Ka7MQbiNj6Ut/06d2lV9RSoUykmdkEqVsJl0EcUukJWM+IPdRP1jozdh7oJLyz22i9kZkMhgh6ouJnVxY+8+uDrcO6NS/ycwfM4HwvpgrUkiy57Tq6obIYVvat6jOi14MkQNTjTJpJyTXJ2PnpuWsZKUgOUC6zhs+cvx68ea9yTwNYLdPURkEq+4K9gVfpc15utlZpzLR0aModMwQ1VyRlIzwsxrlf5ASTdoOXutseJaQ3X0m2K6nsqAdza0P9Y+sOURybfT4IF1cVn6akwjHrLpGcgEIOVJAw1BjJ1QY787ptD3xymK95iSwc+dYNSvoQcXLHT6ut1BaUkjMfVPnEO6lVBdmoz6ruNO2/o0LIXzH4IzbfojuCPty79XMcLaOxMT/4hJRmT1u5K+LLyWq5tl/tegw/o4eDoYfg06AoMsjXxRV+1WDQ9IMES6BKMxQcySp2OycEU4pKftlcwdACSAdGZ1n5tvNeK/Ap8aAJm+1URc6c/z3i+1V0Bl7g4qOxkhBx5/Ml/j5wpDkf0gEUbhqawTIoWLXlnASXYFNbeVVI2hlnmgQhN2yYoOwiTL7RWCA3jVhxhW4IIHZ6bEDFS/lT4y8Gf3fzL6KoBTr+w++WrCPol808DwIIiGzgmA7Kz6x4gyMP8f2mKnrQxXdpzYiB347JUE9OuH6szpjNioLjwY6OTfhBUcBPAnwlkMEyX8FU9QLBi9gZSDYJdp15vVqgvvrTlV71fiarnPufjKFeY0SW+2nmnKGeriKAvY54iDSn4e0i1sFSIG5nB0AZS6NmCIU2XiwW8K5p+r1bsE8VW43N0BIsjsKbYEjLVqDgGR+7RK/7E82ICFQA5ELJPlOtayv49fcsh5epj0iRm47NSB5eUvnSpNvXclVArXefeXyOub8qVa3xbwyQdyKLoBDYMnOiChXJtGwSXAgxBYml3+xiNx/iuwxn/gmc4ydR28OY4zbinrJfyDPS1uwnIH1AbTUvhd68zKPpYdZdHfLJeWC3f1sf0qCqqdXfX+Uj+JXkqpIioochfMwqpYIt9BB/sMe6hlmMbSTgq4H6RHNms2sBr8j6yDDffN5CNPYGJf5NWAIs5IlHmnv74tgw9+qwYqtO+YmBSHa6ji1UWWkVDp/D6Cq8pygJ7MLXe8l/LG8tp5mk1u66zhwFWGaAVNWrEfHb6TUwoAVzTjGZkw1lO7iCmgL16hCsPv5nsFFy8E2kYrOWmql3iq4KTYDPiQN6lJ00HuZSlu7O42FETLhKZaFtUj2tRGJHxDixVJO/OVMaEjWIdHJLXrusE2Z7hpS8p1J3XnSVnzzAvbJL1FcxNfuoY+KawfF6fU7JJi3gksYsU35OIxEJa08Ijj4G2kc5rjBYda0V2+7SjpQCv7mp/+/G9ZxVNh7u5ZNcUvW/fLlTlTY7RQnLraoDu6ddsKWg5Z/ijUM+oCAAWbHZ2WiywZGcNSXF+pjLvTSeXJ8WoAymzi6ySdHF3ny87Z7cj+pIlsamjUDLMy0Lv805ToX/6joJwe+VnOGPTmxhq9UGTnKbM3UY1EENRUlfDg4uNoCd/XNErJF7CR3AknW1NTK3AhUyn0/TzrZ9dJUQIbWK3MtJ73o5iiKrk3Q1/yfQyzgtbv9598dBmpSqBS1fDB38DQLSFYKNK9MXYWYDx5Vz8/jybGOvmKD89i++VACZdX1u+6HNXdJq1+EmzxG0jjhfVI/nvRcMzT8Rmd8ELqI5urnwvAxJQB6Sd2IxictvZMqPEAhhbfYfbwPOHLKCPrw7jajgNDsGRhI1JmIO4pxv5Hx3husxlR7r8A9wjm1xGihbv3ImsPz6ia7BvCVS4ofaz53+nM/bwCrejifktbKJZ/xZuITKXgupgU/gKkM+t+BDjAs9E2jEDvwA1lagMUZdxDSJzWZsGM5+i+jqQRmMsxJaQsQ6rbVRH8eMhYd9itxDwRxCAFqvBOJziKu30f2pajoFInCVwr2nwfxfNG56D0CpX9EvkunSpl3vxEtkF7bm9CpUcZ9FQoYigXeayKF85bbY+wU2zDChSta7AVZAgdI0XuMzN7ZRNXfJ9XUsXagDaDX0rl9qa4npjpzxo2ZWxVZNlDR+g+MVeRHs5pU77rGo2hxinYR7yrCeNZqbvruO2mD3iaUoNzyzsoWjs5ZwaHdwXjqZWgmhbQS2hB37iaqj0vVl7mWZG0gQQdzJLilF4SHE3uORfNfTZv7wvpOkMT9eHyg8N0lTvwblAAy/7vecV+eubtrI42708g4F5gKALhkZdiN+NGMXZzDsU6fvylTZfGJvwjTE+GlxeJc71nESdbp6xjSDvpJbexPWwBnKIkyEw21g9aWT8Coqwt6uTrM6d838aM1mh2EVBzpTDVA0MN2YQPTOiaZHP/BLPrcZIAacgXD9OIhpZJADthrrWwpgrCW1e3soLW4XskNZfccFjcasuHQVNxPKltPO46mklx5YnXbjSnMDSwpsi/rIvtDiLvQfecyV8LZCFOXkZUciWH5hkBHaXb02F+Mvk3KPczksAnhXHMWH9zBW7L30Bt4hCuV+Q/WLESwZL9F/gOn0Z2dA3DjMti9ox4SXwaPcvLouBEiVD2BxFiAHFAiT6FA1mrOHfGtdSvsDs2ogVUGe2i+Pu6JYimL51vrrPIe3LJOZ3npNG4O8HvFLv2WUluywSkKoceMiA+ORbkV/62KvIwu55BqoiLoYk1QcSXnuJ3bjKSnZ3HeC+p8/KcdeveQpUn8MG/Cy5FiAWmOLE7KVHLr5oo6mGaXBhPz57ebQoXask136uGSUMWGV6+SIMnbJbMZ9gFQ0v+v5tQ16hefcUq16qn98gJuuXmVNoYelJzJyWRbyGTUm1xncAavueOjatSgNLJKcqaOidMqey+r1oY6ey21Nmf7pm6XgJcVxbs4lxfyoutXx/9hqb9AJFyTraJyXs7h4ETS3Pwrz4QcZFU24HtStjbLU0Cq7Be+lrlrWdQNzXELM5qMJieQgArxtMvlVV3P7Px1NnZyjH0Ckf1g4d7eZcyTFuNLZBhTQExP1DUnSImP60V4YMDUTKegOdO8y/jpktzVTKt7n9Y4l80aMR02y+lKePQdMp5dLjiUyAOsns3GyT8XW/6MIGlb02Djd2KzGQFTc1+DdML4ujGK6pKqbIsjfvQ868nmhx3SZx7P0JoyDjPvBGIJ+R0JxrV2tlT+YPQ+rhHN9JZ+kEcHwv6i2L3GI75wrnmhbe3hO/AnweTvg0Lcul8U7Naz1GVMWXOB4zSgWv5+HxMYN7T9JiqlD/mBx+leaVdcxCIKRUzHp8XbfyaO70lWrgO5kESssct0LY3oJEpyG0BenP/EQrXR6VPyZkj3LVhUJa7ME1YPQnk1rlKOQqZshyFrKy4xNTxucbG6rWV86Av1ffGVfrzEJKZGKogIy6s2dlxF9LOlhgjoTzVrSKCfFmK5PKuZC2SHCvxSCZci+krW/9tUJ1joRKN8Jp2RlhruzEwsWqZgoK/Z0/Zz3x8whPjYXnk/LHzm+qtJUhXOsiGHtQg8ol1pG1ITl//YCObTcI1rSpmwyEhkV7yDNrB0kWIjYDHyNYmJk427XwQ79hoLaT5Exw024tZWFt2YyhBCfvBgJOOiTHcFcGPBWmnG2+d+23YZoQaR0KLNTKKScmPIlFRrxV2xFAXCyDm9rONgAm/tOnBtr72WeFjs0IY2h4EA5JQswsPQ8ru5QSJag/Ab113axJu/jGgWw8RuTWty6/gUK6bEoB7FODDYypxLZoXVxKpy3ROEaTH/uTGWg3rFL0WbvSbNGSbPZ4Rh0oPaNeqm02FHxlv7ZQIP+vRBmVdDAXYndxOihL/AfRfgzUTGqKU2OnfrMWNWTOG2Xp3x77B/Nwo2w8A/ney4UTAFyqwKUm/ofZUHxXzNsfexzQ/JO+S9LX3tb1obY9DP7bnKlxxlNGIzYzN1HOENiAi7zbQB5WeQzlywKVU325aP2K23ocfO9vUWeAkvxfDtEE8m3gNp1Mh25AnvQ9bXZXlmf8paLk99nl50CEAdW/rXAoi1NnIXHVfrRSSr99RsYUB9eOLQneJaCpsbE2UkPBC59ftDIo+CxFzuoj0ZZYAuEe1upPI7s66cmjjvnDLZO0ZxTHzR4lOuk2vFXwR4CcyOc0Jm57MQ5S+e203xYF1UtKKUE5T39XnKgkHbc8RcwDbTKffm72neZR3DQoJQfZpGTwclm2tJx3QTrqYp8H+xglBalK6S3K6YlUgm40bni16BFSo+YC4/rXfwGfvckjhMAIH3D1k6jI2fBQZ2SA7RPOZR8r8xOeM03aWhnm46O7pSRtO6exdyCsdp9tvc8Ces477qO9xmPrBLXVrtDremRrkhtLg6MXvWGFf5lihe/xngHJ25/+nQcyfNmj9ZCPHO3qgbGRCSXTLJRS1qiV3dJO86Y0mnz5qDjPlR9Fz4YPVLdIgE/zfhvAoAzKXqyPugM8jS5qPmqHWsBkSgO16+Ophf2NhMyLvds87FJs/xPVQVwRb373F7Hx8QFFe4pRJ/hj5sWybvJjTIXqSGjJMxfJgPbnBRggmVFeW7cGFSUSOUPAXBYJdxHmr0pl5KuLFBif6eYCQBXxpbfUPOs3uc0LmIDG/Tkmr5nx5E5b2jyuTFHn7iJmP253lXBJMn9JjpyXcQ/P2DwESb1bnM2L0s3YIHH1WscbkVdqEGPKDfgKzAp4ERSParBuNqaehRsDD1E/u/Ih9hghEadHdEhv9lDQalzCsS7vFPNS1KrD6P957ADNsFsFzQocoShtllxNqdfrWXB1gzs3p9ZctPgyEZsKi0WdiPbX5F1Zg71WrY4K1k58vGjyjeEZyvhdziLrFFiCBHJw50pgHP5vBByuZ7urVI3yzA5mETWFqeSE1nxbvIpB6oRAzSGZGcwOn7VggzOdVUZg7R1wW1FUxBAcDnpxrfSEUEBYICZ+62HGRUbczg8R+yYCz+vZ3Z21VfNHI3SvDNCAdmgmu/R3sEo6S1iDAJIfLuUHhvRhiVdRVkLjvuGYV251E2XxsQ725zlbiiIWj/tDSw3W87VkQgj/QBI9wjepQjip4peIli0lIMvwwo9e8kakyA8F8B/+71iTzf+i8pM3LYroa6JQynstdMFUyluLvkhKMg+UVCqrWdqudUHB25wc9CPJDHQvWjSdAtdAIfcpV55jKAChLfvNvL0c80nlSdffBnEUCti+zc5ZlW2gq6bLGtVp31TJ28kJg9lpcdI3iVkn/cQKR6I7xGs/sxmbpwobPhT+F2zMdOE1EIadyRwWVz4XTjPuXHwYwmLW1lEPCsTDWerBcc/8eAM29YrUkp2ofggyqv+pQ9P6wQ60O0ZEQfTBmIYQ+OWaY+9Gfk3jN+t7zi89u7XbWUJh1ZPAmQ+WhcJj/Z2W3Pvqx4g2WrKInAskR9u+hRKfqnT8Fx7U1bGOajlnnGRoK/q9BZtQT9t/d/Hrz2KbHfSASzRmY+r0zFCovauceNuuJOuoVZ42uo6KyPsM2yEkVFpsxqWsSxPCHH1c1bSdd384FzzZjeQTNea0UjcHdAMuK5Qpp7rDHwYn1zCJ5sTjODXZcXpJrJuyFituDlJssNeBiJ08W53ma8WbNOL8XuYV1fIbe4fUgt2q4c+0syQfELq5HwtERoI9rhCKcR+/15BEm71+J7d1cgS6/T1iIdM3kJKf6vqSg96I3VU00sYEAHk/NizvWur3JZ4ezXc+S8my+vdBpDqu7tsNSL90vdM3ghO+plbbGItIyJ0eQF7BppVuE4dF76dVJK5jfKtlkPurhCvsalIdi1Rtq5rsl4bblYyBnQVLyk58AnovTqhdQnQOBQqguNvmHJE9MIcK5fNL+8KaK/pOWc3smOZthMSwFpLcr2LgqdAEjAQqs/62pui61bOKC3Ro/sVXImn4d496UgRTGazuglThPpXMunM6W4WGLW0h/3qwc8M79OpxyyKJtVPSSPg8Ob54CfkJ9hxJr6G57S2BXA1n/ZMemUoRvounBJVtpi40Diump/nX+G9rK0ugi/PrdSsZA4SjaPrmy9Q9DWGiiRY+9cKBQ+2bdTGu2xdSqnRRdCrx8UgaoOQeCJRKwHlNiMcujsG1vUANiICqPx2sEr+skHRNk2OgTcqrVu1eCx+ENc/DqCcDbxSd1keFpfxqjCwKDTBeqLcK/kGzysHhiSRN1KSTSWQMTg11WP/6NuITI/UN9+Ow2jtOJK+Zl5eHtmKvqJASm20p5hkbPZLeleWVF3b1B2qtEbPAGVfoPqQzE6cdu5Ja/ageEsbDOCFR/ZEKzmHcelUOPmzk8xcURFQXfgwEBa/QvpKj2JopVhuLUolnkl6XDcsH19GHH2VWwhAJbhiOz+9BxvZvMYCuytPq4sXZUFxBkvAkxRbbzSewZI5ScK8s5mG0yteukUOW/MKWzfBIQcwNtzFKV1aaEo9z6PhSFrkjE0gBNcxIyECeAXELLZRxh9b6uUG2CzsLrM4cnFhlcYbn8T1gL5cHVJLY0KP23VpvbDjk28sXFxgGcFdYeHve/KVI2Y05DXYfpvItcCtzuJ7b1DPJUD4ujwWJ4tV6GOs8aQzZFv2rf4MNTTFUPjTsQoTwXB8X4lpaWpJSJ6Aozcaa871OgPCn2TgRrqbsIPnxfxXgT4iFrPp2yChhVg6tEeAZLmueMu5ptTF/idiOD4hBhSPo6cDuPS7qxwETAthaJIzqSCMzqi12+zOnpYjfOQWY7CGC71aYGMYpdJyHo4vZzbxbElcscEFf8YZc5u+15dnAVfeKN469vv0vjOtxw1iiuOrNPyhyLRk5VFmHWJD90gLPsIs1aqrYcftUCEjo/bauDeIUIIdulpHmA3OO6DbZSOrKlpdN/Uz2MSMgt9ZwyvjJi8/ju27ohIrNZ02KAZd9sDj1og376ICpn8sz97l5OTSqRV4Svva8LD0BaJUM3q0fVKFjEmHjWorPXDU5u15GaNoGNrJQAgW8nh3fgeavpdz1GGimhxKBAzUwyEP765anksFMg5HofRDNHsxGabZnFMhFIZ9d4j4HvoJZneNzG2Qbk/LYBE49xCDWpalV/+JLuGiX4e4P6xotELbUmUhn8m2zCXOxAs98CtLhKgQVLVyjx3a0PMZ/XQLL80hADh27rRRsoFBRd6WCnYaK2rdBFwvPxsbx/qXwuG6BdFuULipVuU2+QUleTMAnSaqbaPb17b8/40rxDJTcUkpvTF14Q/AR0b/G189IMJCKA77auuVXwzuuBPR8VcHac0EEqrmPf/xWryBOaxRdQ4QqAdUQ0HGN0u1t5YKISXXd9qyXyPZ6e3mIF4ajMLn24PO+m8nte73dWhcQdhblbT5jawosN04ms8Fl6sPKdDEl+6xAQckP0h/pOQk0r5D1Wx/D0MlC3ioIur6PrGGICG/e2vPsIozgQA2QLlSbBQlmonqJO0EL+TQnDwSBslGnjyYKc+P/uQbGCD4ftmoq7y1M8uj+PtzJrGAuefsselqcqnXCR03tBV0bd/7Wzqqqre7b/SXQll4KYLBTLGJ4vbxODljuPAl440BsmdMaL6x7URPI+rNJsTDEdLGOnGg/QNx3/3MzQTR8KLIbCYtpfy2b6cGUUNQybFURdKQKwXIbCdvknq9CssiAHyXqx6Bc9JHtb+tGbQKOKNAxQaZBY6DCqhiNw4YxJaTPy8hSPLh1fkQR/rsdwwn4eMNPuf/UnryxrlsQvZLq4b5VmwENnowDXiUNTpQQdlDFWPM5m5rUSa6ElnCqo6Xwa/z82ghS3Vnd/Ua09gLIoP2LVSk7Nme8YWSiBb2XJ/oOiciEdbB1KUDQftogHBbsbyWHCl86AuJTFfn2G4kJB2oWlCa3Yx2pNtaXzLrjt0iNIRpLZaNxTJaolYXgagx2AdEHdJIbLbQAalryNidkH6ZxG2l1O75kndcdAc5kpKe4ta7/hwu6LEmARleEFcrusLTdtS+YC+2yjRtoz1URskRnltcmb8IEWNYKUsK6DIXBNfzE0iL8kTNUQ/eaZSY4Ebow0wC7Zvii4VS4qLINFQf94wrx9W3bQ8qoiL79T9ZDjUDx7S7iSu70RJkyNDu1LZloJjhpEZ1ghKvtzHDGobQjTvGmJVt8HP5PIQyjP9euzrgfw2Qa5RLao359Y/PJbad05EXIJGEvQEXvQNSqI0n6ZfXzZdO4O6HCkqdpjxFaqnCSMcXgZhD+FcOqzJA4IetS4d0+P/g0M45HK65aRT42gnuSm9m4M7Ez8kCL4yZF0j3rbkE0igrHy30Qvog30Ug3dIwtUQOnVBjKZQDwEkXfms3GiwXB6HTv2n+1hvJ/RE9IWNyK+xRk9NWvMFLsgKwI7EBMUvc9sh9FXlt+WUWZ1XiNBxdHLx6pTckftqsGJpMJu7zhqdCjZBcctAWBBYtwra9a35yh7TqmRl+8dlgwh5BP/eSp582PrlPoMeoOUeVoh0XHjhrhoUaseZsKQVxcjcKU5c+udqbSBp2GiEbirW3qFa/h1MOfv2zb2eCF9WiVXy711r6717Q3PY16dEznb+L3WAPcgDxUfE9E9iuL/z1fsdXbrTK7m2PXtmfsJLr59GL0+nI6hzzW+LOu+/cAqKcZnPOwJxOr5iToRo6rdcUTka+P8FZmSlIKk/apOIarBfflA5vTnvK3g4IgGpgcSXnPszDRC18ALRjYSUUUuLkWjnudhCyC/RNzy4lkN6qy9UUVU0RFH70ivCMi5yS/vWpsNS2AeEQHXKPHiRGCMv+ZC75X7fjTna5dNuhcrF/aK3H8jD1+BM72wMjCXUj3Tox9RI6SUEvxjKlJgMunQHInt5GrxWeTgiLPAuMbDsG5+rW4Dyy7fWm3KLkISwFSqv9J2B4VB6dJGA1DM8Oj7NSpbGCkKIWxNng0rzm3RgbY1HmB1EW4vB3MWn4OsTDP5TjWeClBHdKsltmcuwRmFLCZUZQtVS7dl9hFXJ5goRszgoBt7rYIGq8/+45YTLDe2yimNe0kvISMTsGr6YlR9rcF5K26V0CHV1n6SvlD281sr4kc5GqGxNgUTdu8lQuAMRwKH10w6CYPXrJxAyILuBchQ7+F9pWx4y8c15NSsGHB1na16WQ5ZzetfFEhWuqd9j++DVNsq3oXMTtD8qUt0ZSLso995sb5pFDf/UL3TZV0ghE94SueI7uh8E/BKcdLdW7JfKVXMj4dYs+Ne8Jpwa8JvAXROqYnN90fwbMhxoz8YKvQYavpzYoLV69b8rKiWV3jvZoKqErodzowvyj1EU2ml4+a0AEZVRiD8B1f7fjbvY/fI2bnLwkHn/57uCIeYqjGmYzTgpQyaFAAhaBYizNWdy9YQN6SxHxokHzaM3lJ1p3k+D0PSpVTbMwShkr72Jmdwo4+w/CUcMmeYITk/89KySx4yY1iBU2pQY1iPsAzWtujMqY+ocJeCIRWKI8z9LXxywdF4px4+dKYpYNlo93C0MZyOdl1RekICFqNUAD9Z1Jx0DHxYJhqPd/J6NzeT6OdW0jBNjgMcV/n66R0o6W+4QNaBNaj+fa/65NJQDxZEjtzHmAymylkSFMqN6AT/Z5cX6JscVqTrXrB5rj48EycG31H3Jp+luksSs8mhC8i2LHrf85cdV1/ALE1WkD8expPODyxpvXoUi3Y4wBaBlkfUxsutdCe9RdZDh/Z9Kv0sBcD8/1hd+r7BLbvutjv70pX3jK4N7VJ50sjqRHgv5ipJUIVQK9SDz3A8JZIUaDA+nyxGiLM134w8SR0sRFUnC5+b0TEauMGMlYeCUncnyKdnaFya8iA6P4cA2sI/7DHQZDxha/9t4i7XKk/ZppbZPOBZVfn6TyqWQkIgeOPXaWBAFZWouwRAubZTJmmocPdKIfavq1E7LK4TbvIgBjGZqDSlwdVWiZHmi5QYjr34YT6Gvq94AbeYwxS9YRB18RafA3Qv+/0DkZWS5sG5G0yuB60b+4HXgt+cFSuBk+i1dyZcP4VRrNKJcxrNAOYM6tOjc+/49xIR4kSih9wglpSxADeNueW62QJrpSfJ2WT3yD4i0+JLK7yZf/H/n2PxgOcgeZaA7INHlKBX+R2GYTWjApGdXiiZ0BuuqtwWJeymfcQNJF8h0l16J79H2E9+3DZW69gCoGckXVcqllhOcj5I8rShLOypbiFBmGkTqQndfh2yC95wQmHUSB5/biV5R3CEj/RbUuZaY3lrnSrO6foEDhZBOcHgThT9DfyM+l0ReJR+KTY+X7QtId3gYNaSDQEsrIHEF6dWE654dPWhT2Qau3DyVUKaZcNf/K39zvjMJ6Lsx34TwptKXjB1USGwAtpIiKEuPuVyhauiBIipIFmtTLxsYLpDT6Fgme8j4GdiTV3Uv1hwsjQ/tpvImdv+sqk+rK0PJFdLPhbDzCenqwIeu8OVP4QFWRvMDY16//XmL5oB3Dqi8q/ywhgpStf/s5hjc3lqZTwGiltzSj2NoLjqba77KthH8SV3Y7jn9dgy/LtfPrUTVvBCPDyB6K0iCB5AWzG87o8CDpMD/TM61K1vxS23pWf+tiqFmkklzJ9tOb0Oz9KDUJRzYFxSfSVAWhwVlhKZIeHduHrkhYgN51mJCQqTJqMmHJtNaJ/Ps14Lipes1BrHVAsdVkXwVEDD9psOTzh80njRico7+HMWAG0hvdjoM9unRXUbOiLgxrO6ysYIGaq7ttIT7xrFaPptvvkne4BpGl/Sax7Kv506pTQdlPSwppbvQtLRY7WcNA4yk3R1/7Rjtt8HLO6fd10qVwVSPOkMGiUIktQ42kRGzUwX5iAHXb0qELyRnN/c1EWrHbrrtbOrJVUOhS/N3rfCkl89q+nW6sht5Qm+UcrMoe/68k/6++JpOBSYb88quTQzIlNK8mhGqrRbCjXN4x1kmV/SbdYIJBbwTzXQjJxSV6qdeLnz1y8PNzHdXkZ89AV0mNgLrQh2pxbZEnpxN8LFfZLMQPrNbw/HlR7PS6C3LJvB1HX3BRXOCR3Z7iXgKjnX84+WSjYse7/EiOLiVt+55v8l1T4JGqshOPO9nwlPUT1A6Dt5pn+mHT26yRbH/KIanRpGUOmf+BgeBqPQCWom8UdhLh0cKXKGRupXs1DfJO/fu8sTAZsN1rWlH4KS9uOasJy0Re7jq8FLHdJrdhl0eQqbrHZAjx9LNW+alRavnTIMDQYRzHDBF5ahTNo4BLGnkKRiQiCVQzrKw5HTqaJaIUznwUcjcwchW8XfhvJR001VvQhnoX/RjDGfv8FK4T3Ne5QWEtuR0E+eUKi1N+xewmcCFZKm+CHammaXmw1q2r69XWK5hU2mh+fb846/42LyPlj+wLsRKwRP3/JQukjyilqrBERHOnBkk7+5VBU+ZpB5u5v05jruyqWuMg3zNH+YjT0j1sIXYm3iAeGCXP5SaAjR9ypOoWDyAq8SF8d8jg8OmWVUUAucCABdUOrwjYQOvokjxJYQJPMMUTODltesi/wzYVN4PfV/BO2AHgp79L/noery/2lYeuyOMrk0nJHL0Yd6u/SQtzQZrGBDAq6qQxUH9XzXBToLlENWgSe21zyVktHKlw5w3u9gh9nafc9OTDh/CcUNwOkvBEyY009LlyVOe5+OBpv+GnU5XtQxTBsLLbGOxRjws8UIzh2+lfQDJ6gmo3WT1eKu8/hdwlJvU5xxnAA6fgloQY8cDNY1LQx41WKdVOFA1XRNy6DOnNgq7TRcOBE+d2Jn63RIG/4M93KrswNnwA890y7LmFz+noQKjGY4UdixiTl6ToI2GA7xP6eXR8EpORr0HFGLZGITnY8vSafgrSQMeMGczAgxQCRv8hbEfvcZPzX0ib/UQzGW3romdrwH0GH13xfRHZTeYhi1vi5Tuiig6P4Wf47FPlZsXEsubJLNhA5wXQomH1ANjUsOrQstQxfKCx8+vNlCPOEtFwnMWj0782PreTYEQW5xrOtXf5S8PiHI0xUxIAv98jD0GU1mdneEZOntX04L2MhbgfPuREEmuVs2rspQlVrPn29xUTlzsXs0x/C1nF+vWyWRMlhmsBp0MrGZctzMSzlorTyQvHnvRlrxZDrwGOil+uMsSEo/XMn/mBvATn4vKrrRjPvnnmcqs5VlzvTuB+rTcVokDIsYa3/MneKMKcr0ETKCANnGIdKRjp+jsXCoJnIaTcVoF3dN533cs8mZRMoj/e3JGbzTx7/HaRgwtlXyQzhaEqa57f4KunM2UFXY6901FfMh/hfNgUr7kbqBcK0FiUjvtjzWtQlon/H6aWLT66IjW+Raq58kTp616+Bvf9QpbxawAAAAA=');