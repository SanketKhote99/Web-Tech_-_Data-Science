<html>
<body bgcolor=skyblue>
<form action="ass2C1.php" method="post">
Enter choice :
<input type="radio" name="ch" value=4> Insert element in queue<br>
<input type="radio" name="ch" value=5> Delete element from queue <br>
<input type="radio" name="ch" value=6> Display content of queue <br>
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
    
                case 4:
                        array_unshift($arr,"10");
                        print_r($arr);
                        break;
                case 5:
                        $ele=array_shift($arr);
                        echo "Deleted element : $ele";
                        break;
                case 6:
                        print_r($arr);
                        break;
        }
}

?>