<?php

// $masyvas = [''];

// foreach($masyvas as $value) {
//     _dc($value);
// }

$masyvas = [];
$masyvas['kojinės'] = [];
$masyvas['kojinės']['zalios'] = 'visos žalios kojinės';
$masyvas['kojinės']['juodos'] = 'visos juodos kojinės';
$masyvas['kojinės']['margos'] = 'visos margos kojinės';
$masyvas['pirstines'] = [];
$masyvas['pirstines']['kailines'] = 'mano kailinės pirštinės';
$masyvas['pirstines']['odines'] = 'mano odinės pirštinės';
$masyvas['nosines'] = 'visos mano nosinės';

_dc($masyvas);

// foreach($masyvas as $key => $value) {
//     if (is_array($value)) {
//         foreach($value as $key1 => $value1) {
//             _dc($value1);
//             _dc($key1);
//         }
//     }
//     else {
//         _dc($value);
//         _dc($key);
//     }
// }


foreach($masyvas as $key => $value) {
    if (is_array($value)) {
        foreach($value as $key1 => $value1) {
            _dc($value1);
            _dc($key1);
        }
    }
    else {
        _dc($value);
        _dc($key);
    }
}


$mas = range(1, 200);
$m =[];

foreach($mas as $val) {
    $m[] = rand(1, 7);

}

_dc($m);