<?php
    $a=0;
    $b=1;  
    echo $a."<br/>".$b ."<br/>";
    while($a+$b<=55) {
        $c =$a+$b;
        echo $c."<br/>";
        $a=$b;
        $b=$c;
    } ;
?>