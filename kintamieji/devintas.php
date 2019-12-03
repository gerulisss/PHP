<?php

// $pirmas = rand(0, 100);
// $antras = rand(0, 100);
// $trecias = rand(0, 100);

// $average = $pirmas + $antras + $trecias / 3;


// $vidurkis = $pirmas + $antras + $trecias;
// // $vidurkis / $kiekis;

// echo $pirmas + $antras + $trecias / 3;

// echo '<br></br>';

// if($pirmas < 10 && $pirmas > 90) {
//     $kiekis --;
//     $pirmas == $vidurkis;
// }
// elseif($antras < 10 && $antras > 90) {
//     $kiekis --;
//     $antras == $vidurkis;
// }
// elseif($trecias < 10 && $trecias > 90) {
//     $kiekis --;
//     $antras == $vidurkis;
// }

// echo "$pirmas $antras $trecias Vidurkis: $vidurkis";



$a = rand(0, 100);  
$b = rand(0, 100);
$c = rand(0, 100);

$vidurkis = ($a / 3) + ($b / 3) + ($c / 3) + (($a % 3 + $b % 3 + $c % 3) / 3); 

echo $a. ", ".$b.", ".$c;
print("\nVidurkis : ");  
echo round($vidurkis, 2);
echo '<br></br>';

if($vidurkis < 10) {
    echo 'nėra';
}

elseif($vidurkis > 90) {
    echo 'pavyko';
}

echo $a. ", ".$b.", ".$c;


print("\nVidurkis : ");  
echo round($vidurkis, 2);