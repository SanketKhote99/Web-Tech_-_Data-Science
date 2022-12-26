<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
    <style>
        form {
            text-align: center;
            background-color: lightgray;
            margin: 5em auto;
            padding: 5em auto;
        }
        input[type="number"] {

            /* margin: 5em auto; */
            padding: 5em auto;
        }
    </style>
</head>
<body>
    <form action="string_functions.php" method="post">
        <input type="text" name="string">
        <br>
        <input type="radio" name="radio" value="1">String Length
        <br>
        <input type="radio" name="radio" value="3">Convert to lowercase & Titlecase
        <br>
        <input type="radio" name="radio" value="4">Padd the String with *
        <br>
        <input type="radio" name="radio" value="5">Remove leading whitespaces
        <br>
        <input type="radio" name="radio" value="6">Find the Reverse of the string
        <br>
        <input type="submit" value="submit">
    </form>
    <?php
            $str = $_POST['string'];
            function string_length($str)
            {
                $count = 0;
                while($str[$count] != null){
                    $count++;
                }
                echo "Total String Length : ".$count;
                echo "<br>";
            }

            function case_convert($str)
            {
                $lower = strtolower($str);
                echo "The lowercase is: ".$lower;
                echo "<br>";
                $title = ucwords($str);
                echo "The titlecase is: ".$title;
                echo "<br>";
            }
            function padding($str)
            {
                echo(str_pad($str,20,"*",STR_PAD_BOTH));
                echo "<br>";
            }
            function remove_whitespaces($str)
            {
                echo(trim($str));
                echo "<br>";
            }
            function reverse($str)
            {
                echo(strrev($str));
                echo "<br>";
            }
            switch ($_POST["radio"]) {
                case '1':
                    string_length($str);
                    break;
                case '3':
                    case_convert($str);
                    break;
                case '4':
                    padding($str);
                    break;
                case '5':
                    remove_whitespaces($str);
                    break;
                case '6':
                    reverse($str);
                    break;
                default:
                    echo "Please Choose from the options above";
                    break;
            }
    ?>
</body>
</html>