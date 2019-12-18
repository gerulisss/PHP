<?php


for ($i=0; $i < 100 ; $i++) { 
  
    $skaiciai1 = rand(100, 999);
    $skaiciai2 = rand(100, 999);
    $masyvas1[] = $skaiciai1;
    $masyvas2[] = $skaiciai2;
    // $masyvas = array_merge($masyvas1, $masyvas2);
  }
//   _dc($masyvas1);
//   echo '<br>';
//   _dc($masyvas2);

$bendrasMasyvas = [];
$masyvo1ilgis = count($masyvas1);
foreach (range(0,$masyvo1ilgis-1) as $key){
    $bendrasMasyvas[$masyvas1[$key]] = $masyvas2[$key];
}

_dc($bendrasMasyvas);