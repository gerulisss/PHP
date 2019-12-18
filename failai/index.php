<?php


$skaicius = rand(123, 321);

file_put_contents('skaicius.txt', $skaicius);


$s = file_get_contents('skaicius.txt', $skaicius);
// $s = file_get_contents('skaicius.txt', $skaicius, FILE_APPEND);

echo $s;
