<?php

$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);
echo "Skaičiai: $pirmas, $antras,  $trecias, $ketvirtas;";
echo '<br>';
$sum0 = 0;
$sum1 = 0;
$sum2 = 0;
if($pirmas == 0 ) $sum0++;
elseif ($pirmas == 1) $sum1++;
else $sum2++;
if($antras == 0 ) $sum0++;
elseif ($antras == 1) $sum1++;
else $sum2++;
if($trecias == 0 ) $sum0++;
elseif ($trecias == 1) $sum1++;
else $sum2++;
if($ketvirtas == 0 ) $sum0++;
elseif ($ketvirtas == 1) $sum1++;
else $sum2++;
echo "Nuliukų yra: $sum0, Vienetukų yra: $sum1, Dvejetukų yra: $sum2.";
