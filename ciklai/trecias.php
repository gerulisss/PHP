<?php


for ($x = 1; $x <= 3000; $x++){
    if ($x % 77==0 && $x==77){
        echo $x;
      }
        elseif ($x % 77 ==0){
            echo ', '. $x;
        }  
}