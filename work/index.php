<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <title>File Manager</title>
</head>
<body>
<?php
require 'bootstrap.php';



if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: http://php.test/work/login.php');
    die();
}

?>

<nav class="navbar navbar-light bg-light static-top header">
<div class="container">
<a class="navbar-brand"><?= 'Labas'. ', '.$_SESSION['namel'] ?></a>
<p><?= ''?></p>
<a class="btn logout"  href="http://php.test/work/login.php?logout=1">Logout</a>
</div>
</nav>
<?php
require 'uploader.php';
?>  
</body>
</html>



