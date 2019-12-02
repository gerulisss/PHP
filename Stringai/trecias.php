<?php

$vardas = "Jonas";
$pavarde = "Jonaitis";

$pirma = mb_substr($vardas, 0, 1, "UTF-8");
 
echo $pirma;

$antra = mb_substr($pavarde, 0, 1, "UTF-8");
 
echo $antra;

echo '<br>';

$bendras = "$pirma $antra";

echo $bendras;