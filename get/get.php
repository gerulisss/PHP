<?php
session_start();
if(!empty($_POST)) {
    $_SESSION['was_post'] = 1;
    if (!isset($_GET['id'])) {
        header('Location: http://php.test/get/get.php');
    }
    elseif ($_GET['id'] == 'vardas') {
        header('Location: http://php.test/get/get.php?id=vardas');
    }
    elseif ($_GET['id'] == 'auto') {
        header('Location: http://php.test/get/get.php?id=auto');
    }
    die();
}
?>
<h1>Vardas Pavarde</h1>
<form action="?id=vardas" method="post">
    <input type="text" name="vardas">
    <input type="text" name="pavarde">
    <button type="submit">Ivesti varda</button>
</form>
<h1>Automobilis</h1>
<form action="?id=auto" method="post">
    <input type="text" name="marke">
    <input type="text" name="valstybinis">
    <button type="submit">Ivesti automobili</button>
</form>
<a href="?id=vardas">V P</a>
<a href="?id=auto">Auto</a>
<?php
if (!isset($_GET['id']) || !isset($_SESSION['was_post']) || $_SESSION['was_post'] !=1) {
    echo "nieko";
}
elseif ($_GET['id'] == 'vardas') {
    echo 'vardas ivestas';
}
elseif ($_GET['id'] == 'auto') {
    echo 'auto ivestas';
}
$_SESSION['was_post'] = 0;
