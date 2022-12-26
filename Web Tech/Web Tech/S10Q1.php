<?php
$in1=$_POST['a'];
$in2=$_POST['b'];
$ch=$_POST['c'];

function ModOperation($a, $b)
{
	return fmod($a,$b);
}

function Power($a, $b) 
{
  	$sum = 1;
  	$t = $b;
  	while($t > 0)
  	{
    		$sum = $sum * $a;
    		$t--;
  	}
  	echo "$a raised to the power $b = $sum \n";
}

function Sum($a)
{
	$sum = 0;
	for ($x = 1; $x <= $a; $x++)
    		$sum = $sum + $x;
	return $sum;
}

function Fact($a)
{
	$factorial = 1;
	for ($x=$a; $x>=1; $x--)
		$factorial = $factorial * $x;
	return $factorial;
}

if($ch==1)
{
	echo $in1." modulo ".$in2." = ".ModOperation($in1, $in2);
}

if($ch==2)
{
	echo Power($in1, $in2);
}

if($ch==3)
{
	echo Sum($in1);
}

if($ch==4)
{
	echo "Factorial of $in2 is ".Fact($in2);
}

?>