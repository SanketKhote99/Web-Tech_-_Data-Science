<?php
$ch=$_POST['ch'];
$array=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

echo "Original Array<br>";
print_r($array);

if($ch==1)
{
    $result=array_flip($array);
    print_r($result);
}

if($ch==2)
{
shuffle($array);
print_r($array);
}

if($ch==3)
{

$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
echo "New Array<br>";
print_r($var_array);
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n";
}

if($ch==4)
{
print_r(array_keys($array));
}
?>