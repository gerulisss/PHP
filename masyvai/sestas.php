<?php

// $pirmas = range(100, 999);
// $antras = range(100, 999);
// $skaiciai = array_merge($pirmas, $antras);
// shuffle($skaiciai);
// $skaiciai = array_slice($skaiciai ,0,100);
// $result = array_unique($skaiciai);

// _dc($skaiciai);

// $a = rand(100,999);

// shuffle($a);

// $array = array_slice($a, 0, 100);

// _dc($array);

// function random_number($min, $max, $quantity) {
//     $numbers1 = range($min, $max);
//     $numbers2 = range($min, $max);
//     $skaiciai = array_merge($numbers1, $numbers2);
//     shuffle($skaiciai);
//     return array_slice($skaiciai, 0, $quantity);
// }

// _dc(random_number(100,999,100)); 

// echo '<br>';

// print join(", ",random_number(100,999,100));

for ($i=0; $i < 100 ; $i++) { 
  
  $skaiciai1 = rand(100, 999);
  $skaiciai2 = rand(100, 999);
  $masyvas1[] = $skaiciai1;
  $masyvas2[] = $skaiciai2;
  // $masyvas = array_merge($masyvas1, $masyvas2);
}
_dc($masyvas1);
echo '<br>';
_dc($masyvas2);

