<?php


$masyvas1 = [];
$masyvas2 = [];
$masyvas3 = [];
$masyvas4 = [];

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
    $masyvas1[] = $raides;

  }

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
    $masyvas2[] = $raides;

  }

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
    $masyvas3[] = $raides;

  }

//   _dc($masyvas);


  foreach($masyvas1 as $k => $k) {
    $masyvas4[] = $masyvas1[$k].$masyvas2[$k].$masyvas3[$k];
  }

  _dc($masyvas4);


  $result = array_unique($masyvas4);

  echo '<br>';

_dc(count(array_unique($result)));
