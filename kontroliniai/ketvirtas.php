<?php

$r = ($_GET['r'] ?? 0) + ($_GET['sk'] ?? 0);

?>
<h2 style="color: red"><?= $r ?? 0 ?></h2>


<form action="" method="get">

<input type="text" name="sk" value="0">
<input type="submit" value="+">
<input type="hidden" name="r" value="<?= $r ?? 0 ?>">

</form>

