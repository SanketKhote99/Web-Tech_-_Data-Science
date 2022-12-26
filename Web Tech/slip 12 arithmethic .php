<html>
        <body bgcolor=pink >
            <form action="ass1b1.php" method= "GET" >
            Enter first number :  <input type=text name=a ><br>
            Enter second number:  <input type=text name=b ><br>
                                                                                                                             
        Operation::
                <input type=radio name=c value=1>Addition.<br>
                <input type=radio name=c value=2>Subtraction.<br>
                <input type=radio name=c value=3>Multiplication.<br>
                <input type=radio name=c value=4>Division.<br>
        <input type=submit value=ok>    <input type=reset value=clear>
        </form>
        </body>

 </html>

PHP Function:
NOTE: PHP function is saved as "ass1b1.php"

<?php
$n1 = $_GET['a'];
$n2 = $_GET['b'];
$ch = $_GET['c'];

        if($ch==1)
        {
            $c = $n1 + $n2;
            echo"addition is: $c"; 
        }
        else if($ch==2)
        {
            $c = $n1 - $n2; 
            echo"subtraction is: $c";
        }
        else if($ch==3)
        {
            $c = $n1 * $n2; 
            echo"multiplication is: $c";
        }
        else if($ch==4)
        {
            $c = $n1 / $n2; 
            echo"Division is: $c";
        
        }
?>