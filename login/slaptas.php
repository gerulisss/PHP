<?php
require 'bootstrap.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: http://php.test/login/login.php');
    die();
}



?>

<h1>SLAPTAS LABAS, <?= $_SESSION['vardas'] ?></h1>
<a href="http://php.test/login/login.php?logout=1">atsijungt</a>