<?php
$year=1991;
if($year/4==0){
    if($year/100==0){
        if($year/400){
            echo $year."is a leap year.";
        }
        else {
            echo $year."is not a leap year.";
        }
    }    
    else{
        echo $year."is a leap year.";
    }    
       
}
else{
    echo $year."is not a leap year.";
}
?>