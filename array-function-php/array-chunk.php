<?php
$arr =array('Name'=>'anita','Roll'=>03,'Grade'=>'a+');
print_r(array_chunk($arr,2));
echo "<br>";
print_r(array_chunk($arr,2,true));//true value prevents index.
?>