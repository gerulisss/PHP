<?php

$str = 'Star Wars: Episode '.str_repeat(' ',
rand(0,5)). rand(1,9) . ' - A New Hope';

$int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);

echo $int;
