<?php
echo '<br>';
$didesni150 = 0;
$didesni275 = 0;
for ($x = 0; $x <= 299; $x++) {
    $skaiciai = rand(0, 300);
    if ($skaiciai > 150) {
        $didesni150++;  
    }
    if ($skaiciai > 275) {
        echo '<b style="color:red";>'.$skaiciai.'</b> '; 
        $didesni275++;
    }
    else {
      echo $skaiciai.' ';  
    }
    
}
echo '<br>Didesni už 150: '.$didesni150;
echo '<br>Raudoni: '.$didesni150;
?>