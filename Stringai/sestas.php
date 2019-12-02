<?php
$string = "An American in Paris";

echo 'Didžiųjų raidžų skaičius: '. preg_match_all('/[A]/u', $string, $treffer);
echo '<br>';
echo 'Mažųju raidžų skaičius: '. preg_match_all('/[a]/u', $string, $treffer);