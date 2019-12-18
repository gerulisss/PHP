<?php

require 'bootstrap.php';

if (isset($_GET['logout'])) {
    session_unset();
}


if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    header('Location: http://php.test/login/slaptas.php');
    die();
}

if (!empty($_POST)) {

    if (isset($logins[$_POST['vardas']])) {
        if ($logins[$_POST['vardas']] === md5($_POST['slapt'])) {
            $_SESSION['login'] = 1;
            $_SESSION['vardas'] = $_POST['vardas'];
            header('Location: http://php.test/login/slaptas.php');
            die();
        }
    }
    $klaida = 'Viskas Labai Blogai';

}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Loginas</h2>
<h3 style="color:red;"><?= $klaida ?? '' ?></h3>
<form action="" method="post">
  Vardas:<br>
  <input type="text" name="vardas">
  <br><br>
  Slaptazodis:<br>
  <input type="password" name="slapt">
  <br><br>
  <input type="submit" value="Jungtis">
</form> 

</body>
</html>