<?php

$spalvos_kodas = rand(0, 2);

if($spalvos_kodas === 2 ){
    $spalva = 'red';
}
elseif($spalvos_kodas === 1 ){
    $spalva = 'blue';
}
else{
    $spalva = 'black';
}

?>
<style>
body{
    background: <?= $spalva ?>;
}
</style>


background: <?php echo $spalva ?>;