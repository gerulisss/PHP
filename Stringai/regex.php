<?php

$re = '/[A-Z]+ [0-9]+/m';
$str1 = 'AAA 123';
$str2 = 'BBB 222';
$str3 = 'ALC 013';

preg_match_all($re, $str1.$str2.$str3, $matches, PREG_SET_ORDER, 0);

_dc($matches);
_d($matches);
print_r($matches);