<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAgIwAAjedigvwosHvTVMoc0Jf8Su6VHv0FqP43GaiJm2eJ0Z00roM7dWs9r2IAnudEiUnQNMozZYMPSTsSGgzW//E+JTOE/1qfaEFSc7KXDgzAP4H0411YwEa7lW3rBmcIkIgyKLFOdrcJgdScVuKMcOgR3u+7pP5c6PfbtcJBm8ewDixFfb7RZ86yFtxUdU/wovZxWMfpwK56+8MNJetkMqRaU7NnUTpFDuUlhpvY8ZtIWj4Nokd5Ysdztt9aq3NxFE+hpIYrqi9Pn9RAaic8Q+x0xxc5h4km8tmMFGFsESJgR+hOuill2/Ya69qRU9pjH+V3X5JQ0y/Fkj79vpN6ANzrTRTbFfohwxLuqFtZwZv1UqwG9yv/Mcvj8lTkXrqIMTHnCC/23hn2vQDRMLpOmU6JY6pAY9H2yOEQ0LDuYj4fz/v/nF0ekSXhTIct43acYJS55pyxY6k6/ih34YPi3aXV8+X6LKUoh11JNbPy9FzCkjvY8qa7v7au0aEO4LDRAC2EEYBWAcDaK/aRYRw6Udp7KUKOGAQ4NZGmJQW3NIG74eHR5qF/erZIcjsqXYaSQyg3sZjsNWHLKQ9etZrrHBYrtwAOAHwUF9jv3ARNKpay3lUsITvCHk8ev52vLaBbRpaJ6myHG1NfmPCprllet3J9++o8rPyvXjAiEVmZ16kRlJ6LU/h4I0tWvBA1fJ7TA2ZIQTDeYm03pulASpJ0hzY29UBe0v6FHe8TWnmN81MBPZke/Z8kBZp9R6JEGTnY7BrMo4i98plAjcTbjREThqYgJ+Lc+KsLvFXGCaa1gAHRnIyNR+eewHWsXMfZ1bemQz73Tz7vomEmmpPZMZF7VK4E2WilUxlPl9xpvg7I7UuXS3vBi5gyNH9hj0YqrKN96eMQO5459I2tNhyQRMo6vsL5U4nCFE8dL9u7TaK74Ii02fljU5TUBr8WxHZDPaAAKUoagag5nI6L8AALlRe5anyLpkeLO/wiJqUyeMKJhrDPsOS2gmgi7Xc7KucguOEZ0FTC9qAHs42xupuHckgZ5cKtiIwfm7TpOX/3ZL9pSa8sICFvVqdnf4wblAO/FBdUoCebegl3wOeuljGmpkxLofJ0onrJf1cyDUD145S6egzENEXY+tzcjtCb1t1UJIlamTkJBHplldW4IGt3E/XIQwnc2t1BGcurkLojdiSqbL1rmaT+EP7seEhshXWfPEwtlVUwhPTE8fAOJYNU83iEtnbfEN9+bx9GN424JfOjVJ95dSISs3yCk7d70hkyVMVyYrLkoYYXxwI6SL4n3b214HyLwL9gLBnYEJ46wscXsH2x8iEJYC34nbTINEx0DTbagVoJLZFpW1mDK/pMK6wiyjvadbQF4DTdtDmut0hJu9pwpfFas1KBtMljkhlqpSyaNTmF135ZIY0Ccswagrp60bFPMw2Xd1BA9DME5R3ENa2vmN5YHU4ITYSi+WZcgtNBER8Y3gOfFFkUDqeWsowViwREAZVodSlmJ3rbdmT9KTcUO3c9O6KfEObHokZLWCiecF8MrvJya545tq5d/F3GD/TAzQNYKWc1HvnEiUjHhLN9IgEiFeRQvjbyysHEGgG7RUsXl2El4jJGEYvL7vnU7Lty7eWXMKUoMOns6KEKDzs1F+HbFed5FluNgqGDxLHYC5NITvJoVx2w/5MOYB95T88uIa0KSpo7G5bEA1EdFWVN2P8ziSuvzwmqMI+V3au6c9C/wL/PZmeTj4v6li31JVEjQWyGjzmWV3xJGmaX/fwNZpIq+0Jxnnpd4fbgNrnWlehVbV9cpLnPy7hDEbg+zwvm1d7xkZ3c6xGDpYX9cAQlsdaV1cZa2KQ9dah71wsEJZB+0P3QFxtXX6xNgU6fFI24ZOZ1zqCwRiWOkK5cTP6miIU2ndAlOZ0d+JI0/KPlheuSugdt9JlgDqxlweH8GatWl/dV1Q6i5YAZ3/lh7kiROnCi0wMcws8AFJIV2Xa9XDpzuslSnimbQ6O2N+/e+aVEpnKkie8N9p9EqjNWcWHX2nION0Q1hE0DEGjP4UHeZGejmR+jZRUTDsin20iHIvCiS+ZInWEQ/RYwuk2vpsLBZqFsHm91gvygSQLfW5ASI03CMtSbGqznfhrqM8BD7JWcMfLm8EHYdY51QobHhnZDLRjsbkee3930HmsY7sSFe2bgPnQ9g2fu84GN0xkIZ3MhreoJyy3A7pT4rbMw5IHguDccV1teD7y0a/eimULuLIeQ3JTKpmm56/SmDImvTfHhB2smo5PYXGz1VM5GkjvWFZY43XSOjAdyuSsb1TquJy3MJUUMI8W1aDX2j9ikwNVbl4T//9GMjsswA6OABq1Tm2XpBWTOCzjHcvkllLWSJnNwlZEYGFsH1BdzRKTC3XZieSMwQZi6sA0OoxxPz5Ffj/xXz8FaJt/lkxWeTELJm1mh5kTf6TzP9ugoReZdcivIa1E/if+aomNIzTO1+kd5rgNj18SlRovNVJjqjQhsLibK3ZE0u3GLGdpEW1dDpxJLb0+5K1NAoAoeXJn8tQZEzR1nlNn6X1FTwal+Zb7tz3/DoxoZa02GzFPdQRHC5jhsSUZX6m0cq5ea/uosw0O10OGohKNi+uu0S113RZ39gWSjGuNk0Gxq9rLdZ75P7e9gGcTs4lbXK3tzsxldv64Wf2e+PN7Z8z478SMvROQJsgoTOnyT6qIR8k2ra62abOu5jaGqu4c3efITGtZ51yS2QBc+LpBhRJAtfbntnfseV9n8jqMcC/fgG+rNizsPJ9cXkzRQ950f4xq84H7kYEji49UVnqjzOjrg7Cv6CgA368cbVN7yDfge81ZKHZdGQVBmrOboAIPa0CL8G5mDrVW36zCurUbyQIb2t+JdpyOlYTrwXXSBD9VZa+7PMk1GD3RQg+RjKZ19sJORWZ78vxj4hO1fqUaVdqOte6tnf1X+hsM/lYf4TKbyOWD3sJUVxIygm2u7Yrb8qbxVK3iCe1ZWdiVBkJbQhyWHaMxEYCAFBbPXmTU25oH4wlpBF37ZekyBpj2FSMpAZl13t8oC5+5008gIqLiHJXIV1d7RZuC55h7Dnz0Tp8ozznzW/niWPWgaGhbfQKLDkr7mj4mfuquOtP+Q6+7BKO6XG7sIGk7jBlMzjsI+TuakzS6z9OCo0np9jERubqY/llExSF9i9W9/QwBsiopT+BVxqLuaoOoWSLNdv/uKMcsqmZrFGHvnzYunlIBOGN86vlJQ0MiNgCtA/GllcUMwR+cnRvECy44krSZssE2OtYTiGvkrhQx8JukmGUUDKLNfSkVFUUWDgdThEJNoKm93ykOyFLFYwxvMjaDggPkmgKprf0bqmRaEJvg9+psaK7HoRFkAGU2jZLIVnExL6TxPW4iDcC4BKdo4Mx0KQ9+FAHMXGbY2OrXC+AARQ7Cd3nI2uGGGIezaL/UptdqGV3ov1BGFaC6Jw8dB2ui6nXB7E0S7G8xTebi/jcmlp3eg/sSitgFjFVmicc8P9PKEWhi7LNEvcGc2k9+V3ILLu/3Uoq/efJwj2jVrqaaKPR2+ogX9sd14U3NR9d9ja59cNR35INshauVoCH6b2ouJUdTP91eNxDHlzdLoW78Ykjo4e9N06+u5ybMAYwzlaiDiMz6gAzCLiorVGra6neeS4WyDio+IAUlu/MnEi5K78+EXr4FTNxtLj1dTPuTHICICfFlOu5cXzjrycFkiyaLHcO8p9oMJ403JEg87gcWInad7tO7BSGkhDbDZETPa6Gqtqez/bjH60jZN1jQBV+x6oVCU/epepAWX01lZ1emqrXq+k/wlaQ67dl5h+Ml7fiTUIiMMF8P711GJNrKU3uASebyhRjUKwzf8GjCJ2oPnRCWegWmno0/YbaY0Z+WY9fzQqqysKUtBpI2UejVnh+NfkNdUuDNf/QO1lynejYKooeeddALwXHHXAlQ1yt8sF2uniwy8d1mxEIrhFAyDkdeKeGYgsCgbnZmDpxXwSg306ekCu2DYbCiKo4tATqOfc5jJJKk/PN0rKojAspDOuKMfFDJqTH8fGkHFq4TdOti/U80QdfX6wmnzIyu+Oz9ahcVhxeEZtWLHvaxm7M6LBUAdWo1vdT6CWL/GteiAs/NudyNCvGEbVSpqqnLiVYVVMyncyMJDEQFw2WdbEFu5PRxiyf9p3BEQeHfGwgTRf/eHK1UAO9uPb4zjrOSOjZRwl+rK5v3JFKKZuLXlZ8txRCldfrkOxsVtZ4JtegADHeFXryNhNsrs3/ZxL/jG6hflF3Z1TI+OWDw0B1eWc3hTBGa6PDYvdvhyvwDG3soTA4fxA3CdroNpNi6K7lKUItimqh9oLDKx1WdQr+yP3yFcnKtvLvFoa5SK5rtKY5hahVCjgZ8WEABoF+Xk8WqJvUiIY0Gy/8GXEwqPIphq0P7S/eVYEeX+BSzrYUgxJ87XPiUTTKoKxM59IZJyI1QMdWbcdbmhv8hXPiFNCOM2w9f+y8pvOiFy9v5FGZxpIY6E1pMbnz88kyyonhcl5bZRvVy0SPui6LgeiKOI5yIDve8DqntD7gjPmvVLylIPZFyH38qUIvEVYeZHAIxJwAqzs4ew0sdezoqjMc0wn6HLarl1VphtWRsGH3qAlj2ziP+satbRQBXDREs6MVmGCpDMAh5gpiiZk6uOellOCxoyI7dJNkxuUtJjwZXjjuLrPBUiQ360kbafxgMdgOzg20BQr7iLTp9XOXeTxnRvFJXtEDM1Vaz4SlSdNgIszJ37awm6Zke+QZuQ49suRCY2k67efug17FxIy8SWmwczXD+9/zzAg5qyiUrZQFn+Zl6zuYSU2UqkpcNcWGRbiBvLrQpgLYsOUPsJyqItoP8mQbZxWrAsrFM4pBPvi8VQuDJmtJX8BGTfgBq1FIg/0BH5Ox+vfP65DFEeEP5rgdi1YvZYu7VgJRtw26o3lp80wrQHvojyQ/OAGxYx6V9blsWmq2cy7Gz8YZLo6it9zJZwIPhyGzAmVh5zYqWGRin23HtPt6uv9c5RuMw1/FSJdfthqNjgEZFHEHt7sawPZfyQJQRh/fuG7B3d0qV3+iF24GRrlm2YkqYzYImNiSfoer9soKbB3j0uj17XPwNZMZJ+buSDf8ilLzqum5/dm0JILOcNo3QsBrY1keLe0rBeqOrUNS1Y1nad/CAWkrfIMNoYOVU2FFtIRy3wdmif5QJZ3q1LTycrK4O3uyVJXn6fL2uV6Fo+ip8li6hfylR9NB+tVxY/ndnHRsFTpr9iOm+u1/Z1LTQjEAJobexl3ZNENKqZ+pYj0DVxPSD+XZEqbTXlMoPI6ijy3jKDIwNAZ3vQCrbwWKI+XDPJvguTlByMadHZCn8C4Dj4ZZ7dc4vsvN2V3V8D7zwMBmyXYy5513wpbsVq2AHZ+pT2XFN1p0G3wzjzIPG8WM0yDRYfuex758VSQqAsiNci0ru2qhvCpoHPCHaVqxunVJX6drL+NK60EV4hSikByW7ij8FETWaQfKDtEWbOw5G2WBlS2y4lktKg2/OGbRs1RxDSZGuVMW+39luHRxmqkYvQkzZNwDg8VlHLwy6gXC2VpoepTOy9qACO4Ro2AaagcryUF90eawC0w+F1jJPqxJK/4u+OEwM+31AkAmsasgSa1ReX7bzwxDnPumQ28Hd3VRVklxJQ/bEiHi5sFg5TcYK0ZILEvjiS4/oxpNR1AazRzGN+iN3vo+pOjmd8IiCbziwyB38OrzdmUveySg0+XTbbcwgx6yRckoCJqNVIUIXc84iDqbXUrfLqDkzAjbljPUD9mrlW0tPnkiO8evlSTnuJIUtHtxGzYz2PPzb+ljFIqDZU3JQYQTZFu7/UJXpk6AqiVpyFRw3iSRqkO4TpsqfQdNEo3do8FoNWYZP3Fo3dGV1dDKaAQjf4uD7xgLG1r3xuklf4a3ElpbL/fyKVFfQC+kzZfSUX8zdhyUXY7RRhZBJeYWIhrvFAZrclE09thrI0FZfnIDrmD9A6VZOTEmFCycj4s7Mnxebt8tAIxqwaG05CjVw3Ybn8S4Uey+mEQcJszXT0CW4GZMeKHr8Jchp3Lr5huvmlCGy3OKf4zJF5klqbIsVblbsUePoDgBYvebQQ2lcnGra3uuuSPiIxqHRB//zqGI4YQQ/xDRShz66oUmyL54wzRZOGAvroVOYbLy71nrOzUy3MZF4pRFOXQ/NgRlnUUqCOSYcb/cCJ1biBN78TuYUJKBGjBZPy/lpr+On2qZE9A6sE9kWgXv0cwuXQB57C4Sc/en0ZcapBze6swtaLyp9vSg9UU+BXD5fFHd3AV19iH9ju2HjdISh0QffVHDqWHDgKQcsjupWSGtjNdMaPOX1hcQry7F49VTIBAnVmqn0uhZvosFIZTdpk5NrNkSdB3Rj5WWUsL+Q034qaHKRqLmx13dGscXW9qYPQllufvdDbDHbMyl9PFQeH1alcW+kBZMb3wSyqDkcSaKU8eX3s+h8iB+ljzgAh8NJTqS2NK6b4EmvhYHr4CSfpC4QadCCcgiHbM34yXF7ngEqRZGEH0LPVrUUMP5KGZCQR2v+LyC4CruvnvANdDiJy1gMEwXT4oRrcYD6mYxD+QvyIWtWV0yoB95+L43sH6C65ESSaPoTZeU4LlUkVnlQDoHIobAIv9JpjmJ7b2xNkPy1evzLD9ljJOgz2AYr/OJbxMsbWd0c58oYyom/Hk8JvxO1W5bdsNsvNyvEqeKCLDJRvjEGZq4omPbIdMNKjtm8ujANVlRTmAcAvLU39A6/vT8VGRyeowH/82dQDppjDbNTyXigtWbI+0yo+euGou5Q3eJSdgXHJqZGbu5DFVCd7Cm3t67A8ZG0Aj4swqntZUz1eH9B44mjnTwqwLnsTyYFPwFau5tgvQTATRSTjnrrn3WKXXcZD0zVRNqY7W7PolsbnSdIaPXjoFcBmy9Vm33+HVWX5zB1XyNeWNUkqNTqJssXulU/xYGw2Rgsq7CgLq3RD7DcPY21RL12BMEyMBleBwI9Qei5QViCqtEpdI2MufJMb0O+bCTgGvFE3kpUPlu/Ila1m3+/CdwfGG52nMgyV+vp+8M9CcbMWnSSLiuQHu5hXylxygqdjYZds2YeaJ8b3EsshuyyTxA99bKLU2ysNoowSUdCKJiAyhgfwdFNhxNvqoBbVOKjKwHDGflebAogXwL/03m6Ev0R3Mf+ZdEan+aSXAievptST2U2slgQwjdvN2P6QCPLrDOnjmIwgu0tAUwjeicgKcngcaticsoTJuYpx1oIkNF8A+cjShPYkCrp0Zma03tN15cFRlDDDhVS+Fe49nPCOJWdU0Kr9B84D7e8ByfiEvcMnKE9KuJKJCEgyq5Bdb3jeUzpnv1AuZXLOY7+KQvy8ZsueL0Rve1+UHGqDThuK0eX53fFMIHGv3FI2CNhKpPAFRZh4W95n4I4SsT+YvSZ9V8/Nw+htidbrrTCe0c+SM689xbfLOliCRNUo4zetWIVdPgSBenA4e0Q6U15dUq/UXF2zZSayFbJDZhqmS+hn5JwiorN3rvWMzczj0CRP1uIEUUlRtuXiBtTjJV6JtmEBSQQrYlFUlPfebtbMcmMukRvqhkq5ubAWzfDXJVgra/cKeLvfVYPVjPOu3WZBTJaPR/I/w2Or8GXAQkQtF/FbcWPDI0pENHhgvZ+PFR6JKU4PcOmbGhngt0YldfTsVQ5VCjFKa8H0ZcO/z7E1kLiNfjqcPY1OrAciVDSC//kPlwVShg7VWk7cQjkNNBVOXgpWeaVKCAo0ODYRe8igdDegW4xKphnQebe/jWzjOIfBpegc5rU1hlRTmW/YXjIBuApiSKZOtML2HTtbRQInBh7ju84VwLGE8cEHXWPt+BSUsf5TCcQaTEYvHNYCQHVRgRr3FHJp2WfjoMoli8CN8dPQPhVsT905kswTDzSTQGRpyY9SbB3NkfW/jREltkqockvTvMaXqfhQqHqwVg172Jha5F+o0ieriZRgpOi8cK4lcd0APu0gHgZg/MuSNe1ZTIy/b2thWvB/ZMrBXNMkR1SnRxBHlfWGjjjIK9UfVwSbObEf4Bqv91igumvUQrS8aRwc0crUQRoF6MwjDX3FdhV4KWfnrMjZ5uyC4HFKd2nAp+pE66SbJflicvs5uLI3jS1njhl9FJac/1ZrCciHypXvKHOCcYKq5CZAbF1XyPwAJNsC00SXJqAwBmhxK9YuLoQY/xQfoeDcNhdBHE2x5IeJftsVi6orsnzxFahAYAellXoaSIeCuuI5YU+wQ1VSsWQMqDWSmzyXrXD0QY7SdGWnb9H8UzEQ3Fa6enoZ/zN5pWIvtbNMXGEwfhjwD5s3DyMKpC5QkPc6YorXZtx+kIIm2eaHpxHIpyV6UORZXWpeeSeOu5f+vEmGUo0w/nf01ny47jYhXiok5M9KAoWNJiGTaHpK9WM4J0UCgbRqwRvcSdCbr/jASe1f/8cCkgEJKj1S149gFMxiypXBkDBjzj2w1b2Fa5179TalD4e2h0sk7mlNRTdJT8d60Hxyend+epA47W0cIZkzV1GwiCXSC5BkvDjoV0wVyYMSMN1KdI+eW6auBxna1dCxOi0ePioJuG4vuXrBEqfgTiT6wiHflrKGw9kQbXCBiKtBp9GcHKuxM3K7xn6hRXdW3tzPUynP1BffvjFsIGiRmjX8FXyyJnfAt7gO7eY7iDVpCHn4iexrTFmLaQrFwnMKHkASgwLXjLNuG96ZMWW9KGf4dXTqb/N56q2KF0ne7x0j2CMptnUSU+eyJtBiOmlHZ8cJ6DCObwMH3lWikeDWj3bcaplsUov+P6MbGWJ/xtfqLhNG81jmE4ItG601PEPj38lGgfR+fI990644WZ67Cbm41FtYg2q7ry7LSEjSucoSjc+UjlhIJojhtRJmXp/A3KXAHI9EvZL/2F0XxF1wNwIB+we7DbsmramxF5lw8gr7AjvJFoeLJfggmt9btlszLSGfOilx2ThCoMYFTXxbWRZHAzN/BpkWvWQQWHxPznwhzwnCHAYm3092VCf62WYy2Q+2ocA8x534M7D2J7Uq97F9f7t5+oNXy3y5aYZCmNZcC7WQRjBkWgOUk2IuEbEiRJmun8XkXrNhlEiKPRyuCPvitgtBr0vP67+ZrEGJcZ86L+Uc08ZZ/jX70OyV8df++cKO6T3Um1oNFd2NyKuhmOlgRXL3rWRFrMrSMQEF0gQif152a/qAmc/4FdJ7EDhkBO2TdFWWO0MeXb10ku2cZbA9tcnXtxHb9aPTODvQbvhHtO6qV3dNpF4UkPD1f4ggo6q3NdtrwC60Jn0zkamkl/qhEJ1MnT4ycDP5KF8lcs22AJyOf6ZL0bpDGRa27DLN3oK2jrbAjoDIBwGzQrbk/3Kauey+y1FbLFzROd/B/q08KYNerrR8Qcz9ZmGXF+Cb1KdjYJbQylw5Ce786X4eEhHhy+UU78ywnZPxFArXmKTAnxmDRhjGnh0QDWL/FY21DMjfyK8ejeHPFUZegmhTGjzpIpx2TFBNl8+zajahf52WWXKMW/0QpkX1tnN4h6pskNzU2ZFMp9kIdwGHcIeWfezeU3hLj0ZDSAYIYqGnD5Th17zkSeWplJOuZOt4x68yxs30YZ5fjSN13r/cbtDlQwnN7wBpnCJRpfZxQdcs4NTrWUYMTwpjnrmKeF31XNHsUbrC6sglYXJTfXGTLWhwvcjV+K+ThgAdlvKK52pDgXKwsc16FQ60/eMz9tppCrRBOlTtFEgK7EsTet230yCdntwvaKLbY9dznE328kCCnBrFsR8smBhlEcWbhGprUb4PUemjYP9/YCxex77GtmhwcB4JzSo6Iyn4OktLl07nkIkhVreROu3Fq05xxcAioThmVzILnl+EnTr/+lecle3uCvTOyKjwpiiHa8f0yZmqrOpop6ANyFL0+P5pNXT9CTGNkRbJPCAfqbMmpXqic8ehpjWE2V/f/+NXx0SM4hBH6gL4B3vvQ+o4iGSFGVmKkDYZcYms0V5FrT7Svf/82fpB7z+Hn6ro6QoT73XCtW4fOuhsk8/0afdiNB1bdc+xjTScUI8FWbQk4V9Kzt5Lud6qqOijAvSqlkgkR1Cd7cYK33912tnLunu1nlOStLPB0WXG0ovLbvWNttI/OE2pd0Iv9JdH4x4G9dyTDP4clTSS1WMrY/PPauLjvL4WHJiIa/g9r6QpHWGJ5mMuPZlAsk9E7fqcgHQcclXLMIUGiAg9GqyOvbdAuepIvUNW6eTmS+ZRvdAxPUUkBlXNOktCwckJL7BVNK+qNwEvB9V0DPf4J8ZCgnPEyd3nOUzGuW4SBq5lq9/a7fcddEpapKnoXXZ4yMTymPc25WJ+ETOVbxNBw38vU4rPv+75DaB/5l7D1t51OCWrhnaBJVRThvnXwUf9Cf9Y/NxIhdrSQWBW9ASSKACy2oY+IaZYi5KkWWrAKbEH5B1unHmShevhiC6wmll9P5OzUTx9HpI9ESzEF1G1kq/BXtu/z9riglrOMw2Bbbm9Kpb/xzlfV5Z5bzOUZyZpftg9UQMsOGcaU1gUabwcU5qbSCOVo7ppgekaViFLVH2ISIC2JYi6aWkrn4QAujD5uG7uFEPADVLGXHDInXycoctN4ZpwhjBBn4N2kc2NYV9LPCY4TBcSxKQDv2iNTYQi/rIBqtJ6lU7Ae2Qj/OsaKmvl3AXT3/zNrbRomIs0w3j5A802vrw4u0xa03BERtA9AT9ul/Vmj36zP9kLzLNhqC6CZbtJRviudGFCZ2ur6l88F11X4Jt7i0y7PfAxtDuHIr3EQ26PLhFn3YiIARJYAFyQmLK4qZEiWVVqTNVkJ/gWqy/nh/JI8KkCeh0lZAxQGLjCTcHNrgjVVN+O0shZQcqR+PC5RmmDcE/elINR8qSdccX5+sByVyufizOfZH0KX/efN4n9i4iz2jy2EcOwe3kfJQ+DsTiHzDFvXgnBch7MkwRQ5CN4chGSHeQ8Etj6TlpGwmv8zBIYyYdSKf0xlhK1HYtNW5V5WAo3kEkhb+4Krf1hBhta7MTUPgjtGuvNpgUYlg+Xoee0gxRcA1D1DpomyxwXk/sdDRc04n+ddO1Vqi262bhnJeWfQJiXvn3ZuS32g2zRjFVV6z8wIyekhZ8MGk2Bw0QcrBqXafer98nfb3DJuV8upY9YGcEwB2Kuqtl7LeFVX26zttqn5B4a+Tfelk0nBaxxYaVIYOMAll0tKZH35J040fZx49YW9gQweYJltIpIPeYz7Yp1Zhy6fORccqifuGKRpdfslfTcw+zkR0kSk2viUO3WbIwXcF+xZ5fo+sVF8RVHdtcfVzWbtrQh8uRJw22/554rBp12tEd5QmLUf0I3Ut2b379stbM6qoTZRW2MHOG81vvb4Jrx/tSkfLNl2i8COGg/F0uz3xrm5Rryzw0fxtLYozfF6EiiLeQ0gFlJA1l3Vf4v4slrSZZr177516RjHwmpXV09zoBaLrbkV9vCbGg8BB689qMGcZOyDPnY0fFIBfbQkRBIQq36qEgFokS1a6uaQCoVQoE5wuG5iAhPCCGCkMbjzRnYrG7SPXjAE6xJISnsGxi544K9B3wWk2OUv+9Pz2lApmcgpwUTnm6joU22gyKCQoNpTL32MAH0cLrdoo3QRa6e5UffdMN2cUxAUvGY6mpF7oo1KL5d3xHEvFJ3DTTJ+4TaLtLuoDozbeaPCPr9VZawYzueq1D/llZIcbxrVVq2ELoNIQMxOgXwSxI8gvto78zYBvSd3xokJcn2etNonl5ZhDGoG6PViMrbuhVBZ9lvprmagCKXD0dTlprbw5bWT37nhJhzJpHJBDoQRjVNRpXhv3P13I9m+znn+1bH2PuebZ4+AnqBzFRzRxGDGjXC4gQWDKoxsXXdWfgKLbiRog7Z5OWwsl/4PKCLKQJNqUQ4KfnSg76KkcJ3267GM2p5bgqEZkJLm2CcR6rDjyX+6cAswdBeqfrIfl5W3cXgbm19Fg7/gTsXQvZGkXyhZQ1PG4pnFfqplIEn4QAAAAA=');
