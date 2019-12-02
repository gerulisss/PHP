<!-- 11. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200,
atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti).
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik
pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys
savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki
didžiausio. -->

<?php

echo "<h2>11 Užduotis:</h2>". '<br>';
echo '<pre></pre>';

$skaiciai = 200;
for( $a = 1; $a <= $skaiciai; $a++ )
{
echo "Skaičius:  $a, ";
}
echo '<br></br>';

for( $a = 1; $a <= $skaiciai; $a++ )
{
{
for( $i = 2; $i < $a; $i++ )
if( $a % $i == 0 )
{
break;
}
}
if( $i == $a )
echo "Skaičius:  $a, ";
}

echo '<br></br>';





