<html>
<body bgcolor=skyblue>
<form action="ass2C1.php" method="post">
Enter choice :
<br><input type="radio" name="ch" value=1> Insert element in stack <br>
<input type="radio" name="ch" value=2> Delete element from stack <br>
<input type="radio" name="ch" value=3> Display content of stack <br>
<br>

<input type="submit" value="submit">
<input type="reset" value="reset">
</body>

</html>


<html>
<body bgcolor="gold">
<?
$choice=$_POST['ch'];
{
        $arr=array(1,2,3,4,5,6,7,8,9,10);
        switch($choice)
        {
                case 1:
                        array_push($arr,10);
                        print_r($arr);
                        break;
                case 2:
                        $ele=array_pop($arr);
                        echo "Poped element : $ele";
                        break;
                case 3:
                        print_r($arr);
                        break;
            
        }
}

?>