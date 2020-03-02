<html>
<body>

<?php
$name="anita shrestha";
$hex=bin2hex($name);//string to hex
echo "The hex value of $name is $hex  ". "<br>"; 
echo "The string value of $hex is ".pack("H*",bin2hex($name));//converted hex to back.
?> 
 
 
</body>
</html>