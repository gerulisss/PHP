<?php

namespace ColorMixer;

abstract class ColorMix implements Color

{
    // use Red;

    // public static function BlueMix() 
    public function BlueMix() 
    {

        // return [rand(1, 100), rand(1, 100), static::Rotate(30)];
        return [rand(1, 100), rand(1, 100)];

    }

    // abstract public static function Rotate(int $d) : int;
    abstract public function Rotate(int $d) : int;

}