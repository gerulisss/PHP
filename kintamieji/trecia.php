<?php 

$pirmas = rand(0, 25);  
$antras = rand(0, 25);
$trecias = rand(0, 25);

$kiekis = 3;
 

$bendra = $pirmas + $antras + $trecias;

$vidurinis = $bendra / $kiekis;


echo $pirmas. ", ".$antras.", ".$trecias;
print("\nVidurinė reikšmė: ");  
echo round($vidurinis);
echo '<br></br>';