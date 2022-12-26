<?php
$val=$_POST['a'];
$temp = explode('&',$val);
echo "Created Array is ";
print_r($temp);

$tot = 0;
$arraylen = count($temp);

foreach($temp as $tarray)
{
 $tot += $tarray;
}

$avg= $tot/$arraylen;
echo "<br><br><br>";
echo "<br>Average Temperature is : ".$avg." "; 
sort($temp);

echo "<br><br><br>";
echo "Five Lowest Temperatures : ";
for ($i=0; $i<5; $i++)
{ 
	echo $temp[$i]."  ";
}

echo "<br>Five Highest Temperatures : ";
for ($i=($arraylen-5); $i< ($arraylen); $i++)
{
	echo $temp[$i]."  ";
}
?>