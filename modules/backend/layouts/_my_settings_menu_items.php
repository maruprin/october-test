<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAABABAAAtGzJzgjmzr9fY1lvwVza2Mx1R+ROEkmkfMpKUXd78Pwg8jgicYd62vsDrJi5Sjr38c8ljVDaPWfnnyK2HJxtf+bHXLDjKpZpv8/b3tiiWV3V5j5mnp7QlmaRUJ3r451voTMqzxL27BLtR2Pi02yniUomSIxRXxv64iWNjGimpmeaOl5shDYz8IyWUjclAalwAXgt1SyXet+6H1wXvnF4eBNuYOn78x/Xza09N0aLiX1uMPfMqAQJbGuEZ/4vMzH7eWGq3lNPSlJxFfAWqooFlmCxiMDFNABwD1cJEgGVgpa3RHz3NfdQv2his1PqiNFoeYwbQ68BQlvoqR87oEW/GJNpg+18byuV54vfzoQol5S03ToD0kCbHm2c/PdCkvx2QaGI0WY8Zc/DXkkd+Bw7E1zkQy3DCcoZJ+vuB5svbqrDSqGol4miQjIaJp2dVdDNiw2JmWKD+E077h4TOvHS/l/2w3nfaEdxBa61m8CdHifQyLghN+aCvh03p9cMpprDGjz9MjkgrDW1u8zDyoDv/ETpfGS1q8tn1ZU9qCy1hVgTnrMXofoA0qzRbMYy3OfWQGEanmQfmvMw4wRRWofhYFXmUClH56WLI8nLUzeUCUZZjOgnB/roYi09GfA3Fr3CaFtrACdGHhUyLgGwjc3y7cmOCEOjkiEkGOIAdfEkMIUnkGMzAgWN8VCdVhBAbLQr4SjrNDzOoYFx99LLbCPxVAqOOyr2b7OZ5rrRladbl12tR+S03C/ewMSTafpyemrx+UQftvV/VRuPG4CWrcpHIRCIQEriAnXzELAuH4L3Ww3CMJWizN3kOcgAiQbLTfbRxKI1YCDac+FTUwd8NyrXcdyfe/UvMpniKBziotqJhahzDbymO9O/WvTQNp9cqT5RLsfR5mHqag5SQSDBDshSJERqzRqzMQAGe2QcSYzVunryA8b+IawMMgFUmvN4edtwVnpYf58nT05J5Cqbg6pXt3Rn+TbHC7MabtcO4chMT0MYnNKC4UkpvKWvuS/0kYrfK93kwGnkymphzB7gVBvuhlMjxnUEmoVqavZVkGPzP9HhC7KezvgfNfEHJQa+FtYTRlWBPBdLNhocmVGfSjU1QtkPU8ntVT4TyQcBT1HbakhlKdnbl+VJAoMOdb1kLgiTrrrjc4U5DUtut61vRwvxxRE0LI5G6RH19VvwwHmiyZYprBMioS3bwJa4ul5HYL4bHtiVi4+fi5+drEqcB8Skxfx8xEP7B5ctpuJP3kUErfPQiNUaA7I80sx2d0+v8gZhXeFclVWW9CIGndsf4aYzfUetaBdgZnJaiN9FrhNkApG0BUsFiL8zHUL8LxJrBYyHr+Vv4VNieb5g0Psdnma2jeQ/W7xKyL2GSWiqRB3K8gwD8k7Rjg1z9E228CmKj1RfYzyRrGADk5hy2cagjR3fRs30CwE8tiQF55lkZy1ymdQAAAAA');
