<?php 

$vardas = 'Jonas';
$pavarde = 'Jonaitis';

$pirmas = substr($vardas, -3, 3);
$antras = substr($pavarde, -3, 3);

$bendras = $pirmas.$antras;

echo $bendras;