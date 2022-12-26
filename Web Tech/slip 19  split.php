<?php 
$arr = array("A"=>3, "B"=>34, "C"=>545, "D"=>4546); 

$chunks = array_chunk($arr, 3);

$sorted = array_multisort($arr, SORT_ASC);

$filtered = array_filter($arr, function($value) {
    return $value % 2 == 0;
});

$keys = array_keys($arr); 
  
print_r($chunks);
print_r($arr);
?>