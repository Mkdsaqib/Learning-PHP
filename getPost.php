<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>

<form action="" method="post">
    <label for="num1">Number 1</label>
    <input type="text" name="num1">
    <label for="num2">Number 2</label>
    <input type="text" name="num2">
    <input type="submit" value="submit">
</form>

</body>
</html>

<?php

    @$num1 = $_POST["num1"];
    @$num2 = $_POST["num2"];

    echo abs($num1);     
    echo ceil($num1);
    echo floor($mun1);
    echo min($num1 , $num2);
    echo max($mum1 , $num2);
    echo rand($num1 , $num2);
    
    


    echo $num1 + $num2;

?>







