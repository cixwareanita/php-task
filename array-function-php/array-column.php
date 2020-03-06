<?php
$arr=[
    [
        "id"=>"10",
        "name"=>"anita",
        "grade"=>"C+",
    ],
    [
        "id"=>"11",
        "name"=>"anu",
        "grade"=>"B+",
    ],
    [
        "id"=>"12",
        "name"=>"sanu",
        "grade"=>"A+",
    ],
    [
        "id"=>"13",
        "name"=>"amu",
        "grade"=>"A",
    ]
    ];
$valuee = array_column($arr,'name','id');//name with index id.
print_r($valuee);
echo "<br>";
$value= array_column($arr,'name');//name with mits default index
print_r($value);
?>