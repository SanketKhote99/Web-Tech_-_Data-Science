<?php
$string1 = "This is a sentence.";
$string2 = "sentence";

$position = strpos($string1, $string2);
$num_chars = strlen($string2);

$result = substr_replace($string1, "", $position, $num_chars);

echo $result."\n";

$position = 5;
$new_string = substr_replace($string1, $string2, $position, 0);
echo $new_string;

?>