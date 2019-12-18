<?php 

$masyvas = [];

for ($i=0; $i < 10 ; $i++) { 
    if($i < 5) {
        $skaiciai = rand(5,25);
        $masyvas[] = $skaiciai;
    }
    else{
        $skaiciai = rand(5, 30);
        $masyvas[] = $skaiciai;
    }
  
  }

  _dc($masyvas);

  echo '<br>';

$daugiauNei10 = 0;

foreach($masyvas as $val) { 
    if($val > 10){
        $daugiauNei10++;
}
}

echo 'A:'. '<br>';

echo 'Elementų skaičius daugiau už 10:'. ' '. $daugiauNei10 . '<br>';

echo 'B:'. '<br>';

echo 'Didžiausia reikšmė: '.max($masyvas). '<br>';

echo 'C:'. '<br>';

echo 'Nėra'.'<br>';

echo 'D) Visus masyvus “pailginkite” iki 7 elementų:'. '<br>';

foreach(range(1,7) as $val){
    $masyvas[] = rand(5,25);
}

_dc($masyvas);

echo 'E:'. '<br>';

echo 'Nėra'.'<br>';