<!-- 11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų
žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai
neturi kartotis. (reikės masyvo) -->

<?php

echo "<h2>11 Užduotis:</h2>". '<br>';

$words=array("Tik","nereikia","gąsdinti","Pietų","Centro","geriant", "sultis", "pas", "save", "kvartale", "Don't", "Be", "a", "Menace", "to", "South", "Central", "While", "Drinking", "Your", "Juice", "in", "the", "Hood");
$random_keys=array_rand($words,10);
foreach ($random_keys as $val) {
    echo ' '.$words[$val];

}
// print_r ($words[$random_keys[0]]. ' '.$words[$random_keys[1]].' '.$words[$random_keys[2]]. ' '.$words[$random_keys[3]].' '.$words[$random_keys[4]].' '.$words[$random_keys[5]].' '.$words[$random_keys[6]].' '.$words[$random_keys[7]].' '.$words[$random_keys[8]].' '.$words[$random_keys[9]]);


