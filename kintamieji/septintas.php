<?php

$skaicius = rand(-10,10);

if(0 > $skaicius) {
   echo "<p style=color:green>".$skaicius."</p>";

 }
   elseif(0 == $skaicius) {
    echo "<p style=color:red>".$skaicius."</p>";
    }

      elseif(0 < $skaicius) {
        echo "<p style=color:blue>".$skaicius."</p>";
        }
