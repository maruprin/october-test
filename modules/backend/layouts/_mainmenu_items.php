<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADAAwAArn0VjCrXVgYGxFSg4TxEIprjZObL4FiJT4kXKxv/IYSmkK7R/PWQO0Fo9JFowEFSTSo8j2iqIw6nXC3M/U7ug2QCM2DVPZomJBIvDSpJWziqPKK5GUXtCb6mAQN/UJ+ID5yBqVxRiadfw2nwr/g4JAJWrhIH8CwJuAAyfJ9NC/9EoMD7YopobWznXIk0L86QK8qsYY3eAYIfslZdPTrNHw9vs5yvVBkO0FA89Ck/W4+lNoto5igdhny4Eg2n5jzU8E5cUvrTLxJjr2Kd19Ik+SvalXPLdFFrJKyfUErtCpVZzG4ktju5O+xcTId/xe+GO05bQK3fTQDP2yWbDA8DC20hClDlLCymfMUcxuJZJShzaU45X4gXW5c2s6sTLLhKXhc1U3O0/mZ+/obJX1yL7qu/67doOdfYnA559Hyd0BQPftq7TzPJA5TdY+SYKP+3JwfufzzTLpvDZeDUVZfyfNt4p8G7YmJTRCyRdD0J/usq5f/ldRWh9k6jTuG9v4HOukfkQUyLMLKKI3cVKzJuNJQOW9bby1CzzLOiM9wcfnSn9czMuGzncEXdlLZvintohFE07kudHVzUePxWOrcLvabqx1MumqEShusNRKkVBWmaER91pwfNWO34P2a5nUkybxA6L2VfymDz9BJZP+ROeZSvpbx1NFQo/qgf4Cf4K7BRpgP5KSNQ5FsTQHtrKNp4isRdPi5Jyuazg5bW2nutjwQY6i/L2z4FEM59f9XXtFw0c/ByvQHqs0oA4MhwuiSgIRt4t7FLNC2eNQpDxKTOL/gnbRx46ce1uFCtR9nLaDfpPqK/JI6M0pt7EzhZJTZK/T62xHB5PqecaF260gmb+dM79tzT4yO4CEcOY9SqIA6AcqRrZMDqAHFIswmMSP9J1zoUZDHHPCpQ/rBMQ9WIVnP5Svq2Kfa9eWttRTR7Mn634pvM//ObK7pDuCuZu6YVr06pETG4sneiYitxTZqt67Yx5txA0VcDv/EqF74Jya4W9H0tWzY2/CF7zbcoszC0la81KyO4nKEOESrArQk198Yo0gESQ93g3C0woyygCNafVtyW5LEDGmwXCyM/D4fZUio3xk3MZVVJGyvNT5oVcjn0kNVfZrFI1jZNNKDE+ZEMUbX9VRjKO+EFOGo2vvgUQXIzLpHL8i8Cun5fWggBw39cwqk7sIhj0o5oM4o2w8hgoBA7oPgz2d64QGPR73HeDl9vsNcRvvBeamiX+ZopjEGnApQS7g02rrUEaJBIUituH9WNLPBImK45BdUm5FncAAAAAA==');