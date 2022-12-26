<html>
<body>
<form action="slip8_Q1.php" method="get">
<center>
<h3><input type="radio" name="op" value="1">Reverse the order of each elt's key-value pair</h3>
<h3><input type="radio" name="op" value="2">Traverse the elements in array in random order</h3>
<input type="submit" value="Submit">
</center>
</form>
</body>
</html>

PHP file :

<?php
                $op = $_GET['op'];
                $input = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                switch($op)
                {
                                case 1 :  $flipped = array_flip($input);
                                                                 print_r($flipped);
                                                                  break;
                                case 2 :  shuffle($input);
                                                print_r($input);
                                                break;
                }
?>