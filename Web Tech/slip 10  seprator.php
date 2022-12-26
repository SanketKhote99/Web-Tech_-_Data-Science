<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <Form method="post">
        <label for="">Enter String</label>
        <input type="text" name="str"><br><br>
        <label for="">Select Separator</label>
        <select name="select" id="">
            <option value="#">#</option>
            <option value="|">|</option>
            <option value="%">%</option>
            <option value="@">@</option>
            <option value="!">!</option>
            <option value=",">,</option>
        </select><br><br>
        <input type="submit" name="submit">

    </Form>
    <?php
     if(isset($_POST['submit'])){
        function split(){
            $string=$_POST['str'];
            $select=$_POST['select'];
            $split=explode($select,$string);
            print_r($split);
        }
        split();
        function replace(){
            $string=$_POST['str'];
            $select=$_POST['select'];
            $replace=str_replace($select,'&',$string);
            echo $replace;
        }
        replace{
    }
    ?>
</body>
</html>