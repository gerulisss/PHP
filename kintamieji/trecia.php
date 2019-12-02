<?php

$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);

echo max($pirmas, $antras, $trecias);
echo '<br>';
echo min($pirmas, $antras, $trecias);
