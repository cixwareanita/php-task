<?php 
$array=[2,5,8,9];
// Returns maximum in array 
function getMax($array)  
{ 
   $count = count($array);  
   $array[0]; 
   for ($i = 1; $i < $count; $i++)  
       if ($array[0] < $array[$i]) 
           $array[0] = $array[$i]; 
           echo"maximum number of array is $array[0]";
} 
getMax($array);
?>