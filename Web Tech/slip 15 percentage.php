<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter Your Marks</label><br><br>
        <label for="">1.Java</label>
        <input type="text" name="1"><br><br>
        <label for="">2.php</label>
        <input type="text" name="2"><br><br>
        <label for="">3.python</label>
        <input type="text" name="3"><br><br>
        <label for="">4.Html</label>
        <input type="text" name="4"><br><br>
        <label for="">5.CSS</label>
        <input type="text" name="5"><br><br>
        <input type="submit" name="submit"><br><br>

    </form>
    <?php
    if(isset($_POST['submit'])){
        $java=$_POST['1'];
        $php=$_POST['2'];
        $py=$_POST['3'];
        $html=$_POST['4'];
        $css=$_POST['5'];

        $total=0;
        $per=0;
        $grade=0;
        $avg=0;

        $total=$java+$php+$py+$html+$css;
        $avg=$total/5;
        $per=($total/500)*100;
        if($avg>=90){
            $grade="A";
        }
        else if($avg>=80){
            $grade="B";
        }
        else if($avg>=70){
            $grade="C";
        }
        else if($avg>=60){
            $grade="d";
        }
        else{
            $grade="E";
        }

    }
    echo "Total:$total ";
    echo "Percentage:$per ";
    echo "Grade:$grade";
    
    ?>
</body>
</html>