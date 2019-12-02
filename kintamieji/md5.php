<?php

$tekstas = 'aa';

echo md5($tekstas);
echo "<pre></pre>";
echo ($tekstas);

echo sha1($tekstas);
echo "<pre></pre>";
echo ($tekstas);

echo "<pre></pre>";

echo ord($tekstas);
echo "<br></br>";

$stringas = 'vardas ir pavarde';

foreach(range(0, strlen($stringas)-1) as $val) {
    echo $stringas{$val};
    echo "<br></br>";
}
