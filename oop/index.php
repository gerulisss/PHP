<?php

class ArbuzoTevas
{
    const MATAS = 'KG';

    protected $svoris = 7;

    public function __construct() 
    {



    }

    // public function koksSvoris()
    // {
    //     echo '<br><br>';
    //     echo $this->svoris;
    //     echo '<br><br>';
    // }
    public function getSvoris() {
        return $this->svoris;
    }
    public function setSvoris($svoris) {
        if($svoris < 7) {
            echo 'Blogai turi buti daugiau, nei 7: ';
            return;
        }
        $this->svoris = $svoris;
    }

}

class Arbuzas extends ArbuzoTevas {

}

$obj1 = new Arbuzas;
$obj2 = new Arbuzas;
$obj3 = $obj1;


$obj1->setSvoris(16);
echo $obj1->getSvoris(16);
// echo 'Arbūzo svoris: '.$obj1 ->svoris;
echo '<br>';
// echo 'Arbūzo svoris: '.$obj1 ->svoris = 8;
echo '<br>';
// echo $obj1 ->koksSvoris();

var_dump($obj1);
echo '<br>';
var_dump($obj2);
echo '<br>';
var_dump($obj3);
