<?php
$in1=$_POST['a'];
$ch=$_POST['ch'];

function Strlength($str)
{
	$len = 0;
    	while($str[$len] != null)
        	$len++;
	return $len;
}

function VowelCount($str)
{
	//$string = strtolower($_POST['a']);
        $v = array('a','e','i','o','u');
        $len = strlen($str);
        $cnt = 0;
        for($i=0; $i<$len; $i++)
        {
        	if(in_array($str[$i], $v))
            	{
                	$cnt++;
            	}
        }
        return $cnt;
}

function StrCon($a)
{
	echo "<br>$a in Capital Letters = ".strtoupper($a);
	echo "<br>$a in Small Letters = ".strtolower($a);
	echo "<br>$a with Title Letters = ".ucwords($a);
}


function StrPad($a)
{
	$l = strlen($a);
	return str_pad($a,$l+2,"*",STR_PAD_BOTH);
}

function Whitespace($a)
{    
	$str = str_replace(' ', '', $a);
  	echo $str;
}

function Reverse($a)
{
	echo "Reverse string of $a is " . strrev ($a);
}

if($ch==1)
{
	echo "Total String Length : ".Strlength($in1);
}

if($ch==2)
{
	echo "Number of vowels : ".VowelCount($in1);
}

if($ch==3)
{
	echo StrCon($in1);
}

if($ch==4)
{
	echo StrPad($in1);
}

if($ch==5)
{
	echo Whitespace($in1);
}

if($ch==6)
{
	echo Reverse($in1);
}
?>