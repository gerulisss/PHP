<?php

$mas = [];
_dc($mas);
for ($i=0; $i<10; $i++){
    $mas[]=null; 
}
_dc($mas);

/***************************** */

$items = [1,2,3,4,5,6,7,8,9,0];
foreach($items as $username) {
 $items[] = $username;
}

echo json_encode($items);