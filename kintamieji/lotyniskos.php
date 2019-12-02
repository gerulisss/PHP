<?php 

foreach(range(1, 30) as $val) {
    echo chr(rand(1, 2));
}

$stringas ='zxcvbnmasdfghjklqwertyuiop';
echo '<br></br>';

foreach(range(0, strlen($stringas)-1)as $val) {
    echo str_shuffle($stringas{$val});
    echo '<br></br>';
}


function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
echo  generateRandomString(); 

echo '<br></br>';

echo substr(str_shuffle(str_repeat(implode('', range('a', 'z')),10)),0, 30);