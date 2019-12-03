<!-- 11. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200,
atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti).
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik
pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys
savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki
didžiausio. -->

<?php

echo "<h2>11 Užduotis:</h2>". '<br>';
echo '<pre></pre>';

for($i = 1; $i < 200; $i++)

{ 
  echo ' '.$i;
}

echo '<pre></pre>';


echo "Pirminiai skaičiai: ";
for($i = 1; $i < 200; $i++)
{
    $count = 0;
    for($j = 1; $j <= $i; $j++)
    {
        if($i % $j === 0)
         $count ++;
    }
    if($count <= 2) echo "$i ";
}
