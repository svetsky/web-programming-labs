<?php

$str = 'dhb dcb deb deeb ddcb axeb dbbd ddcd dbed'; 
preg_match_all('/p..p/', $str, $matches);
print_r($matches[0]);

?>