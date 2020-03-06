<?php
$a=['1'=>'a','6'=>'b','3'=>'c'];
$c=['1'=>'i','2'=>'b','3'=>'c'];
$diff=array_diff_assoc($a,$c);
print_r($diff);
?>