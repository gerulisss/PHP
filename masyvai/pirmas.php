<?php
// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių
//  reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$a = range(5, 25);

shuffle($a);
$a = array_merge($a, $a, $a);
$array = array_slice($a, 0, 30);
_dc($array);

echo '<br>';
// $arr = [];
// for ($i=0; $i < 30; $i++)  $arr[] = null;
// _dd($arr);

// $mas = range(1, 200);

$mas = array_fill(0, 30, '');

$m = [];
foreach($mas as $val) {
    $m[] = rand(5, 25);
}

_dc($m);