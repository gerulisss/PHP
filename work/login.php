<?php
require 'bootstrap.php';

if (isset($_GET['logout'])) {
    session_unset();
}


if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    header('Location: http://php.test/work/index.php');
    die();
}

if (!empty($_POST)) {

    if (isset($logins[$_POST['namel']])) {
        if ($logins[$_POST['namel']] === md5($_POST['passl'])) {
            $_SESSION['login'] = 1;
            $_SESSION['namel'] = $_POST['namel'];
            header('Location: http://php.test/work/index.php');
            die();
        }
    }
    $klaida = 'Netinkamas prisijungimo vardas arba slaptažodis';

}
?>


<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
      <h2>LOGIN</h2>
    </div>

    <form  action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="namel" placeholder="login">
      <input type="password"  class="fadeIn third" name="passl" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <p style="color:red;"><?= $klaida ?? '' ?></p>

  </div>
        
</body>
