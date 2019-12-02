<!-- 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi
funkcija rand()jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį
suapvalinę iki 2 skaičių po kablelio. -->


<?php

$pirmas = rand(0, 4);
$antras = rand(0, 4);
echo $pirmas;
echo '<br>';
echo $antras;
if ($pirmas==0 || $antras==0)
    echo 'dalyba iš nulio negalima';

elseif ($pirmas > $antras) {
        echo (round($pirmas / $antras,2));
        }
elseif ($pirmas <= $antras) {
            echo (round($pirmas / $antras,2));
        } 
        