<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAACIBgAA2hhummgX0pXpRkWtwe+rG2Zce9HgBPjmuOEkamdiFd77bkBfx4dZReTIRohD0H6u7FvUYmgYevHKzyrITNiWmsXbW+qHpl5iQIlKmQLIiQbbfR1W2I/FnXr5W0mw6onOU6kP3ZOE2Joi/vMKgSNQlklhPDfFyB3QpMAP0uFbPooCw931BU7QfHcSShiKwYYa3EEfMS10WWLAvwI6yPgt5xHtcHeMNdS6SKCsVzyqS8m/2YdyaPNs+GEMH6g0+jBZ1QyQi2RXop0nRytAk6u2ltjBOw0fPLAAzjqym7or0kTr9wIysLw1+S+SkU0tjNOyx/4kkDgD45mvYD0wvvzoKqRY+VQPvE15xqffY3+2WwVHHVAPa0kV15TRcjkrw5V01CSw85gUFgLS4cDUYQFosrWt8pfm63BWsVy1kkt+L9R2bSHrWU1Ip5lBcdeeZa9XEq7FEivx2X3cXbeje1G60dOIfCDj0C33FEiAPCR+JQGHNVLLYGwmcPxjZhAfC+eb+NmFf7PdrlXr3dNWU4ROKLeWf1D4narvjjEE8ca3D5rAP6+9Fhr6Ebo+DMbUDbwZaXXj88CSLWDnhxLvk19VbQ0rlGFMrENvDgnZ1whSAz5caZtZ1+y7stk3JfcVTgtF39HxM+sGXCJRYzJ0L/yPLJDq8p42meJhvO2svRg2gBWzlsCAhMorZLO3F+rBPqKnvlNzOIUHfJ+R226EQubJCU8KEoIFy+xu04zfh81JbgXh59RElqn7GBx4edBHv0/wIYk5LW+7pbZHPfSkzVYkJntBNLtePvZVL2RsueSjR6ahU1zvNns79yuvRP8nGRwIQKIQorUBrl3FTTfKqiW66ozcNisb5ipRorTC+k22C0r//bE7BmL6MV+FjnPBCLKpFl5dfXx1PUXR5IB1Dj7pmla2api8yAzAVRxYuGnbOxAo1VrxOQV0GTnJL4fA3RHiGPSi3bMNKXQyvxpCYmuHTefEQccZva9Da13wcyRV77UPL2weIc/DJ5Vph1D+nVjYy3/X1BXZQvtdyaWuXZKdEdPe/O2bT/ze16IBvf9ZWa+ukyQHDOWPKz5GUxjxxYJPn+vbjPJCjP8Ph+JxNGXDE6X/hYYzMbI8c5yXWcYHUYr+5gdTgowcFvvp5uERbDSF7FmbfVF+WApEWb2bEEQ2NZKZ3aq8jpxaANnXo9/RjjbN6Lh2PGv8ckkWQZTOH8KJBlhE4A1Sip6Hup3Uquudiap3E89WMvHDKOfpcECHwmLocgrAFHujgMhGWi6HhuTzvdZ3NKIpoBCNjzrmvQX5ZpHF6Z5QPL8Jy4beinUxtb3F3gsmL/gv00Pjqu4MyOEurvUFMH+GO/yAEkXhcy+ctFe2V7nNUutPJ/dTospeEm3T6OtqPCt0HoYxiHLKD3XLl2Z6pKwBydmTIxEywQqj/OW7ewiJ6MxSBfXL6ouYuBIQl8NPGdGoVyD56LKoe3ApcdVBcZfSzC7CK85C+13hApnU49n73ppluTNz6xmnfo97YTcc5hJ2FPRObXqsU44D3o+4NGGPbVnoVErQm0gglTt2Rl0IU4vy8xFkWZwuKIVlKtsrkjiNpBSeidK6NugD7txApNpT0IhIIGGTEuvbHl7PlNU+N3uejfvJ6MNDmI+qKhimOEJw9SYNVZG4/P6Q/71L+HI71vZBe5vSmMXGL3GdWb6UnwyYLiV3ncYOlAcAqZLH5nno7J7lH18zO3sTy8U8hYDiCvgQv7QXA3bP1Hngjim45QQ53AuVsOxLH7LkeM0cMRLKAWm9ovtSDA7K6qoHX7BGg2KVl8EZcC7tBi9x7/eebGejHaOLsDZbGmz8+6l9iMT3JNewMFHVkgiX5m+XuinYAZ7cMWAFxiADRI3J8gjQ9xFPKRxh+W1S5EcomAGs2lsI1WWdbEeVpF0fj6YknzNPFCF6Iai5n81zaCJBC4Xdoo5DFFSM78l051TFYGLSLMsQi8Ww0c18EpVXDWw+Vcd7SQlDlD0ExXOUQJ862ak/EmEEr1eTgeE5crUglRbQHK3oLpLuXOdNZi6A6GY8qoI0RoWL/oFQm9i2cVYrsMy/zHCb4Qf40Cm0234fEGnyEi3VorR7N+1KPRjAOpLS2bvrLlUJ0JKOz0EMwiOG6Fg0Sx09UYOB0D/KkxcfoKzMErtdyc5p619TwOkacF8BotsjEEL5s/ubdjtjU7Xhp9Wal+qEjy0RIhU3zk06zYOwRHkUGAAAAAA=');