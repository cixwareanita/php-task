<?php
    
    $originalNum = 5437;  
    $reverseNum = 0;  
    $num = $originalNum;

    while ($num > 1)  {  
    $reminder = $num % 10;  
    $reverseNum = ($reverseNum * 10) + $reminder;  
    $num = ($num / 10);}  
    echo "Reverse of $originalNum is: $reverseNum";  
?>