<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <label for="">1st string</label>
       <input type="text" name="1st"><br><br>
       <label for="">2nd string</label>
       <input type="text" name="2nd"><br><br>
       <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        function small(){
        $str1=$_POST['1st'];
        $str2=$_POST['2nd'];
        if(ereg("^$st2","$st1"))
        {
         echo "Smaller string appears at the first in larger string";
        }
        else
        {
         echo "position of small string in the larger string";
        }
    }
    small();
}
    ?>
</body>
</html>