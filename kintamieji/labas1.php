<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        $vardas = 'Rokas';
        $pavarde = 'Marčauskas';
        
        $gmetai = 1996;
        $metai = 2019;
        
        $manometai = $metai - $gmetai;
        
        $apiemane = "Aš esu  $vardas $pavarde.  Man yra  $manometai  metai(ų)";
       
       echo $apiemane;
       ?>

</body>
</html>