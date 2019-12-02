<?php
$bazineKaina = 1;
$kiekis = rand(5,3000);
$nuolaida = 0;
if ($kiekis > 2000) {
    $nuolaida = 4;
}
elseif ($kiekis <= 2000 && $kiekis > 1000) {
    $nuolaida = 3;
};
if ($nuolaida > 0) {
    $galutineVienetoKaina = $bazineKaina - ($bazineKaina * $nuolaida/100);
}
else {
    $galutineVienetoKaina = $bazineKaina;
};
echo "Vieneto kaina: $bazineKaina";
echo '<br></br>';
echo "Kiekis: $kiekis";
echo '<br></br>';
echo "Nuolaida(%):$nuolaida%";
echo '<br></br>';
echo "Vieneto kaina su nuolaida: $galutineVienetoKaina";
echo '<br></br>';
echo "Bendra viso kiekio kaina su nuolaida:". $suma = $galutineVienetoKaina * $kiekis; 
echo '<br></br>';
?>
  

