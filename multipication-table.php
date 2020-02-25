<?php
$num1=7;
$numbers=[1,2,3,4,5,6,7,8,9,10];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr><td>multipication of 7</td>
    <?php
    foreach($numbers as $number){
        echo '<tr><td>'.$num1*$number.'</td></tr>';
    }
    ?>
   
    </tr></table>
</body>
</html>