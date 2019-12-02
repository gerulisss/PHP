<!-- 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite
rand()funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų,
ar galima sudaryti trikampį ir atsakymą atspausdintų. -->

<?php

$krastineA = rand(1, 10);
$krastineB = rand(1, 10);
$krastineC = rand(1, 10);


echo 'A krastine: '.$aKrastine;
echo '<br>';
echo 'B krastine: '.$bKrastine;
echo '<br>';
echo 'C krastine: '.$cKrastine;

$krastinesAB = $krastineA + $krastineB;
$krastinesAC = $krastineA + $krastineC;
$krastinesBC = $krastineB + $krastineC;

if($krastinesAB > $krastineC && $krastinesAC > $krastineB && $krastinesBC > $krastineA) {
       echo "Trikampis galimas";
}
else echo "Trikampis negalimas";
