<?php
$s1=$_POST['a'];
$s2=$_POST['b'];
$ch=$_POST['ch'];

echo"<br>First string = ".$s1;
echo"<br>Second String = ".$s2;
       
switch($ch)
{
	case 1: 
		//$start=str_starts_with($s1, $s2);
		if (strpos($s1, $s2) === 0) 	   
			echo"<br><br>String '$s2' is at the start of '$s1'.";
		else     
	  		echo"<br><br>String '$s2' is NOT at the start of '$s1'.";
		
		break;

	case 2: 
		$pos = strpos($s1, $s2);
		if ($pos === false) 
			echo "<br>The string '$s2' was not found in the string '$s1'";
		else
		{
			echo "<br>The string '$s2' was found in the string '$s1'  ";
			echo " and exists at position $pos";
		}
		break;
	
	case 3:
		
		if (strncasecmp($s1, $s2) !== 0) 
			echo "<br>'$s1' is not equal to '$s2' in string comparison";
		else
			echo "<br>'$s1' is equal to '$s2' in string comparison";
			
		
		break;
}
?>