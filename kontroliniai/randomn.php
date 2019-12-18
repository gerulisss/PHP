<?php

$n1 = rand(1000,9999);
$n2 = rand(1000,9999);
$n3 = rand(1000,9999);
$n4 = rand(1000,9999);
$n5 = rand(1000,9999);
$n6 = rand(1000,9999);
echo $n1.', '.$n2.', '.$n3.', '.$n4.', '.$n5.', '.$n6;
echo '<br>';
function countBigers ($lyginamasis,$kiti2,$kiti3,$kiti4,$kiti5,$kiti6){
   $count = 0;
   if($lyginamasis >$kiti2){
       $count++;
   }
   if($lyginamasis >$kiti3){
       $count++;
   }
   if($lyginamasis >$kiti4){
       $count++;
   }
   if($lyginamasis >$kiti5){
       $count++;
   }
   if($lyginamasis >$kiti6){
       $count++;
   }
   return $count;
}
function fill ($eilesNumeris, $n1,$n2,$n3,$n4,$n5,$n6){
   $count1 = countBigers ($n1,$n2,$n3,$n4,$n5,$n6);
   $count2 = countBigers ($n2,$n1,$n3,$n4,$n5,$n6);
   $count3 = countBigers ($n3,$n1,$n2,$n4,$n5,$n6);
   $count4 = countBigers ($n4,$n1,$n2,$n3,$n5,$n6);
   $count5 = countBigers ($n5,$n1,$n2,$n3,$n4,$n6);
   $count6 = countBigers ($n6,$n1,$n2,$n3,$n4,$n5);
   if($count1 == $eilesNumeris){
       $box = $n1;
   }
       elseif($count2 == $eilesNumeris){
           $box = $n2;
       }
           elseif($count3 == $eilesNumeris){
               $box = $n3;
           }
               elseif($count4 == $eilesNumeris){
                   $box = $n4;
               }
                   elseif($count5 == $eilesNumeris){
                       $box = $n5;
                   }
                       elseif($count6 == $eilesNumeris){
                           $box = $n6;
                       }
   return $box;
}
$box1 = fill(0, $n1,$n2,$n3,$n4,$n5,$n6);
$box2 = fill(1, $n1,$n2,$n3,$n4,$n5,$n6);
$box3 = fill(2, $n1,$n2,$n3,$n4,$n5,$n6);
$box4 = fill(3, $n1,$n2,$n3,$n4,$n5,$n6);
$box5 = fill(4, $n1,$n2,$n3,$n4,$n5,$n6);
$box6 = fill(5, $n1,$n2,$n3,$n4,$n5,$n6);
echo '<br>'.$box1.',  '.$box2.',  '.$box3.',  '.$box4.',  '.$box5.',  '.$box6;