<?php
$s1=$_POST['a'];
$s2=$_POST['b'];
$ch=$_POST['ch'];

echo"<br>First string = ".$s1;
echo"<br>Second String = ".$s2;
       
switch($ch)
{
	case 1: 
		$s1 = substr($s1, 0, strpos($s1, $s2));
                echo $s1;
                break;

	case 2: 
		$newstr = substr_replace($s1,$s2, 2, 0);
		break;
	
	case 3:
		
		echo implode('; ', substr_replace($s1, $s2, 3, 3))."\n";
		break;
}
?>