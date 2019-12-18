<?php 

// $a = range(1,36);

// shuffle($a);

// $array = array_slice($a, 0, 3);

// _dc($array);

for ($i=0; $i < 100 ; $i++) { 
  
    $skaiciai1 = rand(100, 999);
    $skaiciai2 = rand(100, 999);
    $masyvas1[] = $skaiciai1;
    $masyvas2[] = $skaiciai2;
    $masyvas = array_merge($masyvas1, $masyvas2);
 }
_dc($masyvas1);
echo '<br>';
_dc($masyvas2);
echo '<br>';

$masyvas = $masyvas1;
$naujasmasyvas = [];
foreach(range(0,99) as $val){
    $masyvas[] = $masyvas2[$val];
}
foreach($masyvas as $elementas){
    if(in_array($elementas,$masyvas1) && (!in_array($elementas,$masyvas2))){
        $naujasmasyvas[] = $elementas;
    }
}


_dc($naujasmasyvas);