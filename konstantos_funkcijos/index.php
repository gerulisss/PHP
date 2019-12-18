<?php 

// define('KONSTANTA', 42);

// var_dump(
//     defined('KONSTANTA11')
// );

// $kintamasis = 64;

// echo KONSTANTA;
// echo '<br>';

// function Abra($zz, $zzzz)

// {
//     global $kintamasis;
//     echo KONSTANTA;
//     echo '<br>';
//     echo '<br>';
//     $kintamasis;
//     echo '<br>';
//     echo '<br>';
//     echo $zz;
//     echo '<br>';
//     echo '<br>';
//     echo $zzzz;
// }

// Abra(99, 9999);

/*********************************** */


// define('KONSTANTA', 42);

// var_dump(
//     defined('KONSTANTA11')
// );

// $kintamasis = 64;

// echo KONSTANTA;
// echo '<br>';

// function Abra($zz = 99, $bb = 100)

// {
//     global $kintamasis;
//     echo KONSTANTA;
//     echo '<br>';
//     echo '<br>';
//     $kintamasis;
//     echo '<br>';
//     echo '<br>';
//     echo $zz;
//     echo '<br>';
//     echo '<br>';
//     echo $bb;
// }

// Abra(55, 333);

/*********************************** */

// define('KONSTANTA', 42);

// var_dump(
//     defined('KONSTANTA11')
// );

// $kintamasis = 64;

// echo KONSTANTA;
// echo '<br>';

// function Abra($zz, ...$bb)

// {
//     global $kintamasis;
//     echo KONSTANTA;
//     // echo '<br>';
//     // echo '<br>';
//     // $kintamasis;
//     // echo '<br>';
//     // echo '<br>';
//     // echo $zz;
//     // echo '<br>';
//     // echo '<br>';
//     _dc ($bb);
// }

// Abra(55, 333, 1231335, 1354545, 548);

/*********************************** */


// $ro = 34;

//  echo $ro;
//  echo '<br>';
//  echo '<br>';

//  $ff = &$ro;

//  function Bra(&$param)

//  {
//      $param = $param * 23;
//      echo '<br>';
//      echo 'Funkcija';
//      echo '<br>';
//  }

//  Bra($ro);
//  echo $ro;
//  echo '<br>';
//  echo '<br>';

//  $ff++;
//  echo $ro;
//  echo '<br>';
//  echo '<br>';

/*********************************** */


// $masyvas = ['vienas', 'du', 'trys', 'keturi'];

// foreach($masyvas as &$val){}

// foreach($masyvas as $val){
//     _dc($masyvas);
//     echo $val;
//     echo '<br>';
// }

// echo '<br>';

// _dc($masyvas);

/*********************************** */

// $masyvas = ['vienas', 'du', 'trys', 'keturi'];

// foreach($masyvas as &$val){}

// unset($val);

// foreach($masyvas as $val){
//     echo $val;
//     echo '<br>';
// }

// echo '<br>';

// _dc($val);
// _dc($masyvas);

/*********************************** */


// $masyvas = ['vienas', 'du', 'trys', 'keturi'];

// foreach($masyvas as &$val){}

// unset($val);

// foreach($masyvas as $val){
//     $val = 77;
//     echo $val;
//     echo '<br>';
// }

// echo '<br>';

// _dc($masyvas);

/*********************************** */

// Rodyklė //


$kintamasis = 64;

$k1 = &$kintamasis; // antras kintamojo vardas

$k2 = ['vardas', 'pavarde', 'metai'];

$k2[2] = &$kintamasis;

_dc($kintamasis);

$k1 = 89;

_dc($kintamasis);

_dc($k2);

// $k2[2] = 777;
// $k2[1] = 888;

// _dc($kintamasis);

$kintamasis = 90;
_dc($k2);

$masyvas = ['vienas', 'du', 'trys', 'keturi'];

foreach($masyvas as &$val);{}

// 1 ciklas $val = &$masyvas[0]

foreach($masyvas as $val);{

}

// 1 ciklas $val = $masyvas[0] => $masyvas[3] = $masyvas[0]

// 1 būdas //


$masyvas2 = ['vienas', 'du', 'trys', 'keturi'];

foreach($masyvas2 as $key => $val){

    $masyvas2[$key] = '_'.$val;

}

_dc($masyvas2);

// 2 būdas //


foreach($masyvas2 as $key => $val){ 

    $val = '_'.$val;

}

_dc($masyvas2);

$a = 88;

function plus(&$b) {
    $b++;
}

_dc($a);

plus($a);

_dc($a);

