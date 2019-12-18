<?php

$masyvas = [];

for ($i=0; $i < 10 ; $i++) { 
    if($i < 2) {
        $skaiciai = rand(5,25);
        $masyvas[] = $skaiciai;
    }
    else{
        $masyvas[] = ($masyvas[$i-1]+$masyvas[$i-2]);
    }
  
  }

  _dc($masyvas);