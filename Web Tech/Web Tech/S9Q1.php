<?php
$in=$_POST['in'];
$ch=$_POST['sym'];
$op=$_POST['op'];
echo " ".$in;
        echo " ".$ch;

if($op==1)
{
    $words = explode($in," ");
        $l = strlen($words);
        print_r($l);
        if($ch=='a')
        {
        	return str_pad($words,$l+2,"@",STR_PAD_BOTH);
                printf($words);
        }
        if($ch=='b')
        {
        	return str_pad($words,$l+2,"#",STR_PAD_BOTH);
                printf($words);
        }
        if($ch=='c')
        {
        	return str_pad($words,$l+2,"$",STR_PAD_BOTH);
                printf($words);
        }
}
if($op==2)
{
    if($ch=='a')
        {
        	return str_pad($words,$l+2,"@",STR_PAD_BOTH);
                printf($words);
        }
        if($ch=='b')
        {
        	return str_pad($words,$l+2,"#",STR_PAD_BOTH);
                printf($words);
        }
        if($ch=='c')
        {
        	return str_pad($words,$l+2,"$",STR_PAD_BOTH);
                printf($words);
        }
    
}
if($op==3)
{
    $array = explode(" ",$in);

    $last_word  = $array[count($array)-1];

   echo $last_word; 
}
        ?>