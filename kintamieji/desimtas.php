<?php
$valandos = rand(0,23);
if ($valandos < 10) {
    $valandos = '0'.$valandos.'';
}
$minutes = rand(0,59);
if ($minutes < 10) {
    $minutes = '0'.$minutes.'';
}
$sekundes = rand(0,59);
if ($sekundes < 10) {
    $sekundes = '0'.$sekundes.'';
}
$skaiciai = rand(0, 300);

echo $valandos;
echo '<br></br>';
echo $minutes;
echo '<br></br>';
echo $sekundes + $skaiciai;
