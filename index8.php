<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum between Three Numbers</title>
</head>
<body>
    <h1>Show Maximum Between Three Numbers</h1>
    <form action="#" method="POST">
        <label>Enter your First number</label>
        <input type="text" name="n1">
        <label>Enter your Second number</label>
        <input type="text" name="n2">
        <label>Enter your Third number</label>
        <input type="text" name="n3">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    if($n1>$n2 && $n1>$n3)
        echo $n1 . " is the greater number";
    else if($n2>$n1 && $n2>$n3)
        echo $n2 . " is the greater number";
    else if($n3>$n1 && $n3>$n2)
        echo $n3 . " is the greater number";
    else    
        echo "all numbers are equal";
    }
?>
