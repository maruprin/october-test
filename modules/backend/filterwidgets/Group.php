<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/XA0nB1Ih4Wr/0rRWthvim9m7om+BvulbI20bUxfGtlAZMj/nKui9QxAjhnLVis8O0mTYZagFwZzGX6nyZpE4qBV8KHWVCUSjNhefxxy/w9iqz/GRA6cJ5yrADtUzkgYQjGqkAQxej3ZZzBH6/5sdU1EAAAAgIQAAg1Es0lxZiNAhwZ+Psz95dDklHzvVOYmyK1tS788e7v25pGOfreO4QQ9JA0RM3YaAG4RM5fgffiNSkKyvSQs2rmULIUgG88XkkzbwhRm0xxNu3gOYbkxMChnp4YOiqNm9HKhRNBsFfiyOKOu0Bm71Kex2mZavEEF0rtX9EUtObmnQPoP9M4SKNsn65yIr5sYvudI2+zq9yMnNNXZAmD5FNEaGQfEpUnunWC228Fu4+XxMNfNA9QiWGgep0UGfN/kfdKBQXXNNWypzHBv8sXIOSECLopBnqllYrCXKYrXU4XRt/Y0IeActxSwAveNN1nBAE4VIUly7pUr7drn8Z35qDWzf5XkKTlPJ4uHKpjVFuzPKYsCPyjsFG+tzIrF5A0zMdCbXTcJetx5kiyVm70l5mevSlfHl0Iau42/fN2Mj7vLfsUmVcdWGcu5G9gVzfTr2IWtLDFG2i6wNep9E3xK/bvlExjNkSouEglLiWPuMB0esggDOF28RZNemdYeyrWHaHWS5D/3b5HrUaN94N4dcKxeUvrwALrmfnRv1z98RaaVJ9u7rr6ISAI6fRM7p9S5Uw06h6PLypPpOP4UANGOXE6KiBdJsTY8iGK1hzkNLY8TIq93NObKT+GS/9G91Zsr0Bzas8JCt/q0Kd3YtSnZtccwIFWSia21+AolP/On/kr3yIBaftO79cVXbiBkEO2pgVKugagSGhhS1y8oiQE9FwpqGBLex81EU8vtDG/+xcU9aHrxrP8sdrld7TGcz1hlxFrQ07PflQB+2ihDiJ8zHx4STYYbpDixnnm9YiuAKqP+19DdCYAsnpt65Z31/zMF1xZwsmHynnAlfsUc0A+fd3ATr6Zln+/AAyKu+cf8Zos5WzpPIUbIwzFX2+YxfcwYUJKIrEnWz6OTsCdZp31Clbw0TGUcxPdd6O7IA8o+yHAPWNEZGX0/4zi6ut4Kx9CvnVrYmIeG1evoBwMKlRVTZ9cBagJkUvyiLuBQ3i+Pv82TQA23oGmzY3jUIuqBvX3jRAAADQ9luG+S0wH6a8Y9NKjGtHyghEc4VUFaopS0r+1T6IkV7QtJZhZifJav6IojdgSmLgPPPppsnwDAOYYEnzkpTo9gXikAJHT58ivVryzu0EEDZOIiA9L8A5MJqkVhvG33R1PT7sA0leffUy+2BA708e2AkUTZ7JeuJ3TErf5TgelZ77E58h4NhXNmIF5d0fWYch19l8t3b2Xdkgem5fmYdizPIhUAED3f6Y2w4Fl+Ji0m4LJ8w7ezQOB0al+sIGSNXkG3ev7zYyTs/P2kMyVRUV81vcJEw5VXtheMNUi5yRWe4vzpy0KhNdF3ZMlDE6s8e0HfwrxfmDHpwFY3PXT3fMY1uT8PYKJ2clFrEO2vogcgnz7hyul9uB0r3Jss3tHBODFKGwMU/0sCc7456yRLte/Kkqazy7e1QjvocnudgwkiqVZLBR48R+pf/Fsu6ckjIDDBlYfMNZ4k658GS2FBQ07PsrE+Eaf0TnuJUn4tjMicI9YXJzu2OwSJNf7j97/6m3VRzb9VnFlyfCrgfpTZxHofhl1ZPFB1XPnUW4W5fpPhmkKLasADqvoh3RLAONZHbZWuW1LRVrM2RjmCsbZ4qL50hzvi2+gPfim1XOEcSn0l4wqchZOBy+hzMf6FXT50Hcq3HxMAwIscYOADQsaLwg+CdaoFlLMxrmogQgsVWvPZFTazCg/Q74NfphGEkMrcwR+tmJY7PD7PCpBbHnYm5J2S5df+KbgsvuzmKTb8c/Bst5qVcQe35Q1Zcw3/xmW/a55YDncSf0GpVsdFxWTJrFjpwgEIUFOGUvVgOfCivePsx8s+q+KARoxwbzKoXot8BnB+PBBZlkB4C3sgVf5Ajik/W7z87Zc6VvuY6ZoAd3JT1NCQ8O0K1MJctX7DckzlMWxv57HCXZZleMhUnEOY24gVce/iRD6z1LRYgIUTwbIe5jG5H9+D+xyFDlFBsiecj91FznZ2FhjRdJczxc6inuoReSi02LeQXZKmBGPoO/i88elKYRyGTRX18/fm1d+FZP2yrBV4axAW/dzPA1XUY3XC7SuBzqxelWu0veFYbKUQqNV5Mo8j4jxlonkRygtGRwSrgG4rnpPomzwr64x51FhBFWskmyQCToD3gWjcQfz2yk+AOiUVzoPVGoKxaQAHIQVlRyFpdbvDyjyCH7UwonbOlhQ/3+vnDVNHw0GRzQmDxu/sbxKeiK70qj4WIlUh7tfHhaX+JsAgqE6nUAHvM+f4w+rXiDCfT7RDXNYG9bshRp1RMsxmxYuTtTs9okVv58Ab2JorXh9+z1k25ODOgs0Qaqs/tDX6VBaC/dlXaDlAdZvw+v2aai75t8lz8S3hKjeTkcyPAQXuJTxhvOFUVSvMlhm187Yy77p53ke7KzrzLJgmZ6ne37NRifA/JYtYBhuzgOEQ7edJLANFBJgIn+QkdG8fFGoyzQn4lbDdGJV3bygqLcaKz2YlXziYuwZiBSj0GT2gdgsydPinOSdKb6UvEqI1D1JvGnE09pzCk33YaXOBXCuAaKrfoPaCIRnezrq0/FCu8GVuM/a6dpj8d3CyLct7eCITCPYeNPgNwyjv80Quy6WRyVqKKU/XxsJl8hW0ahvFNsLNCRiOST5lPwjDyquA9yMuJ3q4aP+FeA7zhLJ9jB0iqIM7MUnPUtK3wvTDQhi9o2O51ckC6pRzWrHQIOB2Fk3dT767Vm3aCrZwti5DwZB4+0kL5Qd/qwhzqEVdelBywSzLqlWYi1hBPIB2RR2VIqQK9I49KqCmRy5hfeYSR4aKgzog31yCUj0xWHXjkrWs8SPsBITbm2mwpcUc6aBR7CUdftDT0IInbT7UWYSECGJ/mGquzuRAsjew9ibbkCwDPQItFGron6CeUNBsuXMPjcejsUPw0/sMOS/FJaQ0UGs9sxS1TrFefpy+1ajEHRqc42Mi6XaK+wnBVcNBpO+Pe2gUobbl5vywTHepa1Z3aHC3/MV/F/TzLU/DtM0+Te4RwkuLsIBNiQ7rEuVVxIqU9wsKPvEchp1MpFFw8wA9BKo6+txp0F7Ftd9G10+eo5hJ3Y376sTs18m+ElssVPr/SMwBrZJIEMKdc9AdT1+ELPUTsEWurcQKtHM4uH23ul8xhPRZfkxOgJBb3OUo5pcHdPRg6od5+Np/+1EXVAh6rIw5QudgaDLYprhErQ678Pi19sKTRgz+/t7/qWB3BEMGbaAZKhwNjFy7MiBdfBcq+64YstU1Er+jdHSFFVED4HXdr0Y4yCwzZvLA9CGVQULy7KWN4WJKiLxvplOjTYoWyVT2UQ8FGx1px1vgHusORz1HazSlXBzuzkYoGlMwUsZMxNr30fZNS2WZzAZPPwc+yzSIGk+xRnlracRMobriqp0Si07Od43hjSB7aJvKTLo1ZAyq5NjLgyyp9MngbaxZtXuuNMUfQ5x+EKHPIprWhpJ/67F9WyzF0+HLJi3fgdCpZ+2M1K7KQZ7J96zjj54DVdPBcCyz4QAqjLCOGNeyNQqF0oZ4LOgDxLhBGPsiVZ+jK+DVcRsGe1pDwCusDQvdHnwT0Pf9QWG76zL/k3CEUOrAiZfDEYw5oGJNnxBJyWc5wk4/J9Exs4uoS32XTFeieUvx/eS7WfsZBnTUKu3yUmXZuDp7f67//Cu25dajHRza8CXy15nrZcDTmUIJvqqJnHvrH4UpPRJxy6F+UBY9zB3kqvqvljehCvnltaeSb9u3AyVzNMtC9XST5jx4kLqMDmOBn+09Jsb424r0F2c6nZyuA65O+ufd149WLYGV8TQ7wVPQGCM6j48hHBJXRkwtwCVG9nC/f6JxxlV1YhWClmgCXnpMRs/iyVCHVnZInTB0rXlo5dlEfIk+jpJ239X2us+pT7Fyrd38mJ4c/mSGgL1b2xuXadiCgtiSgceW/ZUXgYkk2T2eWjiFTRVDZ01nI4QoZcrvOuVW8ImKpiRbv0ms2jJX6TA7RpNfDN7tP7WCCEbuVAZfxNYMpA19WFSyZtGyW1LY0g/5V8QbhDLusjHeHl/ewR5D5fccVsRP6MGLeyYC4y77Y27tmEvIHfLEuXa5ZAcBnWEc7KeEBZZ7I73tp4xeEWVb0pUa+VFBgojmLKSmAcoRz4/tOKzLF5g5MfJpxm7cXPzzS8WSoVJFWcg7n9TvQzQNdt5G9YBwSSGGt9coZY3hJb272e+h9a4vAbKt1Xy/Z9pObBLN1+AuzytGXvBarqcAhJeehq9gyedK0QFFDSAP5/EW6VR7IfIrtSvfDtfd/ZAoHIK5Y4EkWBnrGvPufrALF6qSRARxMDSFmKr/sA7fKHi05AasHVWPZcK4AVh9laFRsXNHkC53LxmD7VdOnrledA/7FDi/wTu8T/+HyPuMdd+5dXji/aWMz+eOtgxCCLYVJ8zm33Vh61MKOCeH2pz9zJAK4DR1BCMUBY+wQ9b+Y1FAHopzLK0WIklXHJjyiqWSR8l5VLD0qVG5J2ZQ5wWkCtAfy61TMH7C4CWBQQ9OI5ipAV0lziHmTKgOwUyxMoPEiS3tfhy+HVsTDxbEFD2bZcpY5ArBcNPOSEF/vRjtt39N/yR84w/A7gTFjyGmDt7lYsuzHBaJ8CalDR1LRo9o2M4IMSgGz9V6LSLq79wLjqTuXINc/o9jvQgZaZkX6Vg7a2JhGkB7ETmuZGgJPvlAXnrDihEIf0GpY/L7Q8UScbC7OdNoKf755s4L2gVTZSNZd2e0KVQDd5gwPEVhXT8/Qq3HF3ZH+N166gGSFtHGk850llPf+YnUPMgsOEC46Knr+2nUaV8RxsS4uQMV3GxoUdPcGg2RGPQ8kJqNCUW0dbiXhpBtHEsjyT8PLLq8K8Ym1E4VyOCnjeeiz42WvoiZ3B5Bnlriqt3racw9mZuw9upHv2zXpPEmQ9JP5rRurPSNq0ZoCEIsXVqLk7KE3Hb/A/eUjUrYP6vbWkalY+G+YbnAIwkMxYY44mFMPQ3BlUhLqeOM4/ICC1NXBZPdPDGBzQcjspvtmLxYa//WWBk8Mt1tUJbpsiNGDNKxtYkJzCTYVQv6zh7eEPQ4oYWEBSzUG5ZotZMBznElDzyUodbxptdBAtrWayyQUdVUvevqi2xynBtDZfxF+kO61etrQJ0d1XEw5I2YJmsPfAywK1G3thEu8DbPD2kgqnxkBfX0IPU77pJGxZKROekg9/4bNMON3YRGDgQ4FNjGmYq6EYzbHK1LAW0/dXfBUoVBSHyrj5x574wIiYfnbCAGNVNa/fB9Ky+ebPI1gXEcT9SCkaSJaE8bL+ultt5I4bgclb6JQPwjy8VbdR93DsnsEbtpNZXsMqQL2hMhGvs7c0JQJHWPufukhOrV4KMdjHYG1+1AnezMzNtKPdVD2QGHwAXC2K0oowKPBhuLBD8RxwTKgmYqRvBQMCvRTwO4rfnpwa5dqyH17pAadgt6x1qKQi1R3EVGeQhlPDONACoyGunIgi7JX8+7npCsMEbmRPfWNaW/S0wgSs84iGaH6XwiJZMcN8OoqaHb22HnoyDhIJSfXFHIbb/Ydn/0S5xGLgErropvJd8bNag8vxNeOsIxX2NRJdmYwnWXlrCLY8Ku04Gu1vI5viBRni8DlyrfME+DcD+KsEG7Hf2FxG8ekVApgRxBL3L5MP79dQ1PZK2JRmyAIb4qHsQN1H/3Rqbl9El0DOtOzNbP5Og6lnr0KhDPmbPLCVTdGzYBxoaBALtXlih680SJKlHYXs0bzEV9FV6wytYUbs2XGpVfu+ZVNZUkDi+FgJywxLSyIHuGqtMuNcR4h3HqC+EjlVwgyk+tz56He0eNlYF2yBReuZ28BqBZq5lSbi7cCDaPAPnaRFgx90o8ypkubjfX7CxJdetTSGZ4UZMz6taZ1kDx8AIZufV+cJHsL8jZ5CJl+5M82ElHMkHgGRWuEp9qmlaLUlVFfa/ijHX5kIhd9aWQIQmL36CvNfVSoE6TLONoCuR3oMCljO9laImLy1GJtdlRPyEGZgZS5uwBf7r8n2amcxxcr39M0F/dgXG5kWRzbE+L69Cae5IJNngeSRGP0tyaqgZROTeM4fDi5TFVKDDDydxKetudfqRkhsw+HapfqzgL43vzg9FU6lQzlILj6LGKQ/SxaKfGofiTsbAHq3iB90Z9o2L1WJUGijK3RpsVnkWCsaOINQ1ctL7oSDHqpZ7l86CLO0oeez6p/82PBPX81AFsp7fxb0BBzVAIhfuohOKfQuIPt8SHLequ+eyJrWakvLMu07DEY3Kuh9p8w5u8JShRjCb7Tj7j+EE99oNmAhdfTOwL2CbYmmdQxUTJTegtKvDGAerBpZaAa1uMGvqASRybfexyuMMpxcqW4englXAmkAfp+oaP2cL4BwTNn/8itLlU5mgFArja+WgKdXAJZjRI3DHBqi/L/G4xx09um/wM2R3pqj7rPJRzhDWf83/n1cFrUBiF9KquQTyBsIWEx9AQ89y6r2qV3A6lX9lqEmwBcCwjR/X2qlFBwc/aNiasz40uCV+H4T86Xmh0hmZtoKTi0RrE0WrOVb6u1qdJ0kDta1UOrapSOW/7xVy6MVhIPSEEAvUSie5idCzS7IKJqdicOwubD2TZpYrn3uNafe75wbkHUltuZadhm+hUjjlEzo+tBEd4VgFiOycdD1YnQEHUxp79Q5f9oEdLwaV8LRgcnta1h7MakJygA3UPk4lJP2ZDRodA5Mq826s5B1PyY21TAK9ay4s+dx7UwP9RsfXqUTLEDFTyDi8606ijJIr83ez6orh5t6akc/cWrtZBN54xQnji15F0RKVn5shsxX50SN81JzXZAxIu07vozGl0GpxIQDGAG3kkbFECD3QNR2pCV+jwSyS939eexCRouusXh58R/nmWBD36hgE4uOTkixYRxJpoOXWWfrP9nGIXJfO9ZhG176NHSpDrrF7NCjfh8EVSQ2CukcMXVHFY/tfB9Lk4YSnDlN0Id7ht/BrFX2tlNsr+r7KBsuEE1HYdPb9BXhV24Qzbcee2WhqH79qaroMHS6pG3nXFQ0Wl6XAf/FZP/5DObz/JJA7k3eiJRDXvsEyEZwc+xbrTBNeXlrKL1+wpxCxw+0qQq+fMc+HL8qa43m0gnr53dySCGocCjQ1iqzmx4MYyxO7MWBnuvZoFYeT4gh2dS0JjTrZ/rJYkDuV/kIEwNU1BWjNx34rEIlm6PuVlYMi3fCWHWkSux4jp4JRP153Jw+onSwAAFiON+8WiCxzfY1klv1CCEz7JcaWeIJRVSVoMTnIt4pOTc6BmqyyYotW0byssqtgdd18vkG/KNeh6a7fSPeFpbl6yhqDvW/25xwx5E6tKYysQp//Raj6OG9ES3nvVYn3ffrCvt8x0HHUQROHeQBm9L5qCYeogQ89k9gthQpil5hWucwojOAi0+UsL6IAgNhJ/jp4UMK9MnJMIQEUVu3ho4HJudV8k0ZXjomHsYy8lUKrfCYBRT8yj9FJud7659JmOMVOXH3eLI+lSGHhf80bFrbb8fzRqooLuR5aPodLuFayFdCPY4xxFla9tK9qqf6KHEYEd2J73Y1Q46CP+QHQ9ALLbOxInznoFEqpzxZI1eM6PR396zwEWCRZRm2m/UMHXeuz9jKZO+SYLeiSDarjeKWHvgHStuVa/9tvQMkeRqHIHuEwGsEgK0Kci7KLKODuv4bMSN0dQ4KC8IkleZW+6TfXrNGtPWcxMMeuXRe3yocvoVieAEH3XoTuS5/pPAFpGiXlIG4m1c6KqX6xCwj3CK0Ra5Iw6Fxz0dhINqRnu8+RQsn2BP6ZDp6BJpQHctGEDTEbLIIh7BZJ7vg/QEfRuGRVMoiTHE4fzRnzOTk3iqXf/qeP4/ATgUFQIa+jdyhfscDBHZD0JlgKueYVpDBMyBBEJ4QbHuVfgyRyaEAUIva/ofTdFoWqtHD3xffslfX8T/p/xZPFYC9Yk6XEGZ12BR4qkwYJmHh9XFDleSoJKW0y4vhBHIPvO75qbdOQ23a3nYAmVyqwj7XEHX0jBZXSaFu1OSUlTL7FRm5qsdL1/HwcBNVhrSWizkdhFpeMB6i2SRD384YSXd1svMMSJUg/MHji/uSf2nYTlXousOjWvbxG+wUpV2htolm2oenydTc+yP47bQrP3wHzeTT9RuN5Bfm8wvGbLmHW9mhES0VGK+Wn01vtLz0T92MG7nwWnctx12y+WKTcVzrKd8z7PqpPvveCRpfpFGKnqHAvtLBq+lrjLeIOXMYX0tQVjOv2wRdjI07wt+Y/2rM/XDhsrX1cQx3mceoLvUiZeA6UXWztqqORptOLbZL/fDtMg+QOsizgorFEhoSuFGvNtvrp1/kDx7Yhd7Ro2znzzoGSJtfGGTH9WFNH/En3x422lxkVNq+C/x0t5T+PClmA7XjfMxwzBfNlyGsrtgIRaDUf6+ypmORntuq57Kt+Z0z/NbfwJOyTFRQznLCZzUnbz5T3akHpgDZqFmc+R/N832JWgMN1tM2EsPWAiyNVPilFsILT1sYcBEaWE9wfs3U5d6YDoWIl3VzWPgsYgOdp1K27pZH4PdjSdIkH1t4AG9s/fpVh9ZUEgAx3/4NdNpRPCJrKiWIXeP+Lc6nSDOQnjzm0ShiWJaoZDiFL1LaY2GDZu72jsH+eIErEWPK5PZ7FbYYgsmbtm3hcjlsDlCDIfLN9vlqFDPWHnrgBaoo2TNiCAFTo0Hm0LDuv7Jk85kEBQO7ZbysTBhY3TFtKk8iBS3Xh5qbepBg/GkNE92qe7ecL7YV6zVAuT+xOz8TD+GUXNEw47NFTahOJgPmc86iRd4t4cdzgZiO2thmRdPBqj5/KvxtI3XdhJ1tesGZ1XtEUFIXDjr19jnEcpV1M5sdhLNAJkn7TLYbuYDjXiUpGnfBAkPKDWwA6+WFvKRgZepexttyi2eXEri2p7tAOk53vljhY/G5gT+XZOaBKToD9MnDQMzJyrm+IIr3UaGGLM5XVXH6g6ERK2Krxgs9ezE894rMJi06rRLBXu9onqdSye19WNaD9QcY9z4qQgBiKG6n6nMbBaistx9NnqepomVZEGqxvrBiqxXyg5YAhY8Uv2NsuBeXRCMQeNuZ5+QUdLSDJ0y9TuRM2jDcBbPISkxkmTVluIoVZsBvrhSHj3QV6ixTMvXjXWqXgK+qRFnw3zVBeh07xzNga0XF4SBIk+8aTDdoMyEo3+EAcfI+6u+VseqDFoBv9Emx9YF6ORzAoiE9L5BEPUiyS1j/mgheqq3M8RXj3uWYkXWV+gr251O9vC2pZ9Tc03HYL8+BRD78HhbA0t2A3f8jOXguas0hBQSUiD0LwFqLlU87K094GvD4yM/8kBjStDdWOqYZKR92FDt+rEtkp0HBiDW6SiBKrcCMwUPh4GJ/bHhyypFxg0S9jLAo95nArmlgOHuVxV+nrCfwNgm22Zvpwt35t6oGsReL5mmXLyZlos7zejEKwoe8zAjqinzs0peW8XeW6btWF9oph9WmgoYNr+XAHUoWcmo1Y+CJy+5aEHybgdmTfABLYy4hxAshlOw1kqHwr5AELB/aB1p6OQiq+WDVvejvPJLCSgVKi7kJpa0HQ2jr+1Or/lTDMyk23Zx/yynnLZpGbhMY9XKA8+/j4+lSRRIwM3TUj7Cgx6MH/hMppIwGYTbP2inbjrRqUTWqeVJa+96wtWqAKMvT0a5F32KdsAftC2k+SgZsgvvDNAf8BnWyIDE4LpcLLEqlVXC43rVopN/fLhuaptzTQvWzviECx7j9SoWZIMLNLmLg7SKjwQYcgYUcaSFiAL9aOaP3kWXU0uXzVI4aE8difju38uk3svSNFIlNtyVMi3u2j2WrUi5h1UOE/c0jQ2vflWSrDcgKSN98KHgYEZ7OI8U8vh3EE6tRToJ2Dvrtuq7Op6grpAFOBduXNgR6jnDjzGUCR5hDUDA34dNqA+fWr2BZJrhcZao075Q+lrQrUbDLrAIzchAwtWtSqlmjoTXGBX0Y67cV7TBMRA/7fnZkR45aBm8WdyT9lSMheNNYss5CDXjTDf2F2ccTbUsA07YrIxhvIaDsDkDgrNlguCkgw/y2xWAHJhL9oOpkMSODEIAMcrFR99VxWguXYuOzy3ZF6Z1BLrh4dIqMNTOW2OsjiKZ9cVK89g8iShZQGaS+Lo6yqmyNVDqp5ns5/eHMByU9tQH7ku7Q5FXqyjHBi9xBTU4ZN0sK2k9eA5LXy+IAxV+EC3NYi2vMUnRX34WUO0zd8/vSgYvJ1dihsDYNOJ76TID8NjLkFnGuNinPIjlx5Ru/bC4YYVR2Vn3RdRHxBoFPJchMZFmwsgwsZzfwf8PeLA7CmbDsrjdaya8N/DVu/ZpLhid7rOh3gKeSB2UgWBheanv8ZJ4e8hv17QxlLZM4JXhzGUXsLCibAqRy4W4JmrPfZkJe/lLEztfFn+R7JdLKMOtz30BhHO68jJItmMRYUIfJeJIIdvVj43rYyvTgmfJBsY2Dv0waySx5VYZEPEakHJk3IiCCjmuGYEp6jkliamBdCTDCKkgCxgRduAgt7FOuOAY9Qb0NdBpKhFC2rq3ov10WCy8Xd7yos276Bk/7t0MImfZ6I+GUxhlN00Kfkq6iBA3gSwzfmMX/WeUgfLXVtTX6FDuOc1pHHCXHJbHJQ5kO+hCQs2CmbybCHJ/soGRZEBYa1PSVJAKS9BwZGvNsqgKBeMysa11hrlLqKOkX9HwScbcHzIii6KwalgLvdvKDlCAN3iXH33YJPfic6SQinpmY9soat/4+WgXU4XYBHqLw1XzGE2PtlABwk7RlnUeIpBhKDa8su67wizeFpB9eUdLm0llaTaUuN3z7sCxs4KEe6mACN1Frl/i+TZpePRFLyn3PhJ6dY3/ua+7oafOeVXjbUeYPrhMSWkgaI6Sn0qRfYFrViuZXY9sjJ2Zp9x0L5WjKQRN4hV7ATESvRO6nGJEAaOdYRrOMGJozNZmEQrpvCUfsWyGxZuOJDOF9vxEi0FcghVqFEI8caa8QbwlT+ygqldK9K/gG5cR2a/E6p5HNrtuaVKoz9OjuklGVv+/GXwknQOTxpcWDvjSgO5WOOKwfaG+kFgKQeitaSX1S443icK08f8hwLzXAVlOeEbB++NYpz6IDfsVZL/w07vVdpgty2k3Y9Dys7GFql/5G0YMt3yiGmFzo5i+dtvQjdXK9O4eUchnOsxVWmmQKIuKCC7vXkz3d2tTLozz9VA4CQ9Ob+xOpHJGX0a1hAD56IaYpM0/nBAxkUs4eYR9pcu5HTFPn2xWSa35O+TZtDUU4Oo7L4bso8lVITa+l2fclfMnq7wzb2kAAAAA');
