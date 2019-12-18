<?php


// $numbers=[];
// $gen_length = 15;
// $i = -1;
// while (count($numbers) < $gen_length) {
//     $n = rand(0,9);
//     if ($i > 0) {
//         //Check for duplicate digits
//         if ($numbers[$i] == $n)
//             continue;
//         //Check for duplicate pairs
//         if ($i > 2 AND $numbers[$i-2] == $numbers[$i] AND $numbers[$i-1] == $n)
//             continue;
//         //Insert additional conditions to check for new digits here.
//     }
//     $numbers[] = $n;
//     $i++;
// }
// $result = array_unique($numbers);
// _dc($numbers);


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


$dumasyvai = [];
foreach($masyvas as $elementas){
    if(in_array($elementas,$masyvas1) && (in_array($elementas,$masyvas2))){
        $dumasyvai[] = $elementas;
    }
}

_dc($dumasyvai);