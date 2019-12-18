<?php


// $masyvas = [];

// for ($i=0; $i < 10 ; $i++) { 
//     if($i < 2) {
//         $skaiciai = rand(5,25);
//         $masyvas[] = $skaiciai;
//     }

//     else {
//         $masyvas[] = $masyvas;
//     }
  
//   }

//   _dc($masyvas);

// $masyvas = [];

// for ($i=0; $i < 10 ; $i++) { 
//     if($i < 5) {
//         $skaiciai = rand(5,25);
//         $masyvas[] = $skaiciai;
//     }
  
//   }

//   _dc($masyvas);



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

