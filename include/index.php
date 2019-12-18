<?php

define('DIR', __DIR__);

// include_once 'kitas.php';
// require_once 'kitas.php';

_dc($_COOKIE);

setcookie("TestCookie", DIR, time()+40000); // Cookies

include DIR. '/kitas.php';
// require 'kitas1.php'; // require visada naudoja

// echo $s;

echo DIR. '/kitas.php';
