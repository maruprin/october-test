<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAADwBAAAk7QZT5u3uqUWqbOR6dGKaWtJ1WvKYDwp3NjIK3MdRTB6GhtZcbdzIxDmovP9mt5fHGuAPauBILjvHE8kj5pFj7spsruLhduF62jmE/eUOMNfbZk1/8GSLeWhJzFk7ugRbspZOiswv5zp4fQ2+X4ZEGXrZyVuwVTxp17M/dw3OaX8Jm+Nla/4wFqGMnlfqg5oqcyu6CqU53LJZG6hd5TTH4Krz2cuuL6HBibso6UEpZJx8nftj0ldHJF5yyn2+gI0PrzoZEEImKk6jHqqt+GHxXTtsrQUQvJh+nIrNKk+aS8HeP5UDyouAjE/xJ0AuDhykcJ1yDCDh7vc4Gj7NL9zA2SE6tf9OV4DElUW/XOJLMHuL5/Wrpltuj3+H7RXZARHXFHDWxKUAs/ow0chY8CXLqAemPU5b1dNSW9m9YU7IWC1scAGl0LKulZMIRJP/55iC2BAbqShXjuGjC2HFwhIjisRswVJ6nZ8g5tUg3pDIiqrmrB/jqvxs7Cl923DaIg2Ze3chlYZNQd/FYd3h12rws0G9VpSq3+gr7BUU4LKBjGyKWMtdOr3YGVDBlvBv9gImsBY8Hhz2wC2IjUUKYkPcm0+oJ9RFn15CNy+z/bIZFEZdqy5p5E/VS0JHKy949VlOMKSFaT/uzN1WziFeVgAT5VO/kWT4wAAFjxgHRHGzgwGcOAbOpaSqtIVI0BOkquCHRG/V0TAlBi5bkQY4WZ5o+6ojEr5iAVP6XavZ4CbUVqbOY8Hr33TOLun6lYYRUnlLltN/+QXxi9xOdZHYpegTYJsaUhg0m+dRwp9JmR3dhCK2lFgasX0Fp93hyNYHu11b4TSWAWfVYLVmJ47RmJ1abp5Kwc+IBLnEPIOew22WUXt2TLkGOf/lXeFq8AAuLa+fe34IUkCrFtqfQU3ANwtHDmmpGTkh+c1RL4CmalJ8jASiTBa+aUuq0Fs0DmRP1zMIomnDF1pLN/TzORO3vf8BWeK+d4+TVwn1vJ3W1GPHfphSf1bY2J1ijmbm8fwr51DQE9xwvXqeBBD6aYbhOR3CUNFhCzAXBuyemoQW7TGPkqlW3nsxgsjKbaEHyPrHcr7lVpGonnVb4s/QVa5A7hXETOiS1Wz4LpsMZIUBhKY4+L7bfIEh8/1NDsPSoJxhsZLEWUrQsZLsaptEMlC+rOagWGx+SvG+EIY0E1ztJqbN0iSo8tB75M5kxQ4hhcsyLFR3QMVQ6wdfQyn5XBI3i0GkdezX0ceh05w949JSinvipBQC0qsghqGAw6fsLK3RQHj1MvUXzl5uMVdEKvt3tw+zj0zxVrUWA83ADFDFzIXtChospi7JR+XVfuirbJMRKpVjIslfOPQTJ473mu2FdJdr7HO2nQd4GIYQymyitAgVAcdRA3wbVFWXeFS+RH9RhKN3V1BVPNKKDEh2rWm2p32lA/b5jmhVj5x41VoVeyO+Vid8Rem89FkJ6K0S6i27FZBlV++aR4ep1K6OeVqwzC2Sjw1SlfhFNLSTYSN7MiY5OWQdUxKBwVOAFmtFu6LPjquukZqjO1pdjTBq266qFS0hN+yA9cizu0OZW8CJl3CZgv1y+RxeXcfBkm86tCDvtA1TZknXUd3pSICSL+HCwfhPnO/69ZabXlP+Q2plBetkEFM8D3AQJr8ZWREfTiuSPYaGb5EKjP1tfLDiPtMTU/FRwAAAAA=');