<?php 
$data = [19, 21, 19, 21, 46, 21, 29, 21, 18];
_dc(array_unique($data));

echo '<br>';

$data = ['a' => 'krunal', 
        'b' => 'ankit',
        'd' => 'khushbu', 
        'f' => 'nehal', 
        'c' => 'rushabh', 
        'k' => 'krunal', 
        'n' => 'nehal'];
$output = array_unique($data);
_dc($output);

echo '<br>';

function unique_multi_array($array, $key) { 
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    } 
    return $temp_array; 
  }
  
  $data = array( 
    0 => array("id"=>"1", "name"=>"Krunal",  "age"=>"26"), 
    1 => array("id"=>"2", "name"=>"Ankit", "age"=>"25"), 
    2 => array("id"=>"1", "name"=>"Krunal",  "age"=>"26"), 
  ); 
  $output = unique_multi_array($data,'id');
 _dc($output);