<?php
$masyvas = [];

for ($i=0; $i < 200 ; $i++) { 
    $raides = rand(1, 4);


if($raides === 1 ){
    $raides = 'A';
}

elseif($raides === 2 ){
    $raides = 'B';
}

elseif($raides === 3 ){
    $raides = 'C';
}

elseif($raides === 4 ){
    $raides = 'D';
}
    $masyvas[] = $raides;

  }

  _dc(array_count_values($masyvas));