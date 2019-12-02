<?php

$string1 = "An American in Paris";
$string2 = "Breakfast at Tiffany's";
$string3 = "2001: A Space Odyssey";
$string4 = "It's a Wonderful Life";

echo 'Žodis su ištrintomis balsėmis: '. preg_replace('/[A,a,E,e,I,i,U,u,Yy,O,o]/', '', $string1);
echo '<br>';
echo 'Žodis su ištrintomis balsėmis: '. preg_replace('/[A,a,E,e,I,i,U,u,Yy,O,o]/', '', $string2);
echo '<br>';
echo 'Žodis su ištrintomis balsėmis: '. preg_replace('/[A,a,E,e,I,i,U,u,Yy,O,o]/', '', $string3);
echo '<br>';
echo 'Žodis su ištrintomis balsėmis: '. preg_replace('/[A,a,E,e,I,i,U,u,Yy,O,o]/', '', $string4);

