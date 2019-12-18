<?php

// $masyvas = [];

// for ($i=0; $i < 30 ; $i++) { 
  
//     $skaiciai = rand(5, 25);
//     $masyvas[] = $skaiciai;
//   }

//   _dc($masyvas);

echo "Antra užduotis:";

$masyvas = range(0, 29);

$mas = [];

foreach($masyvas as $val) {
    $mas[] = rand(5, 25);
}
_dc($mas);

echo 'A:'.'<br>';
$daugiauNei10 = 0;

foreach($mas as $val) { 
    if($val > 10){
        $daugiauNei10++;
}
}
// unset ($val);
_dc($daugiauNei10);
echo '<br>';
echo 'B:'.'<br>';
_dc(max($mas));
echo 'C:'.'<br>';
_dc(array_sum($mas));
echo 'D:'.'<br>';

$skirtumas = [];
foreach($mas as $key => $val){
    $skirtumas [] = $val-$key;
}

_dc($skirtumas);

echo 'E:'.'<br>';

foreach(range(1,10) as $val){
    $skirtumas[] = rand(5,25);
}

_dc($skirtumas);

echo 'F:'.'<br>';

$porinis = [];
$neporinis = [];

foreach($masyvas as $val){
   if($val % 2 == 0) {
       $porinis[] = $val;
   }
   else {
    $neporinis[] = $val;
   }
}

echo 'Poriniai:'.'<br>';
_dc($porinis);
echo 'Neporiniai:'.'<br>';
_dc($neporinis);

echo 'G:'.'<br>';

foreach($porinis as $key => $val){
    if($porinis[$key] > 15){
        $porinis[$key] = 0;
    }
}

_dc($porinis);

echo 'H:'.'<br>';

foreach($porinis as $key => $val){
    if ($porinis[$key] > 10){
        _dc ($key);
        break;
    }
    
}


echo 'I:'.'<br>';

_dc($masyvas);
foreach($masyvas as $key => $val){
    if($key % 2 == 0){
        unset($masyvas[$key]);
    }
}

_dc($masyvas);