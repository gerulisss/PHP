<?php

$raides = [];
foreach(range(0,9) as $level){
    $raides[] = [];
    $elementuKiekis = rand(2,20);
    foreach(range(0,$elementuKiekis) as $element){
        $raides[$level][$element] = chr(rand(65,90));
    }
}

foreach(range(0,(count($raides)-1)) as $level){
    natsort($raides[$level]);
}

_dc($raides);