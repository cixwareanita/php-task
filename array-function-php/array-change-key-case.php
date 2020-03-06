<?php
$arr =array("Name"=>"anita","Roll"=>03,"Grade"=>"a+");
print_r(array_change_key_case($arr,CASE_UPPER));//keys are capitalized.
print_r(array_change_key_case($arr,CASE_LOWER));

?>