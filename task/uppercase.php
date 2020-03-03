<html>
<body>

<?php
$word="Lorem ipsum dolor sit amet, 
esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
dolore eu fugiat nulla esse pariatur. Excepteur sint occaecat 
cupidatat non proident, sunt in
culpa qui officia deserunt esse mollit anim id est laborum.";
   $lowercase=array('a','e','i','o','u');
   $uppercase=array('<span class="c1">A</span>','<span  class="c2">I</span >','<span class="c3">I</span>','<span class="c4">O</span>','<span class="c5">U</span>');
   $upperVowels= str_replace($lowercase,$uppercase,$word);
   print_r( $upperVowels);

?> 
 <style>
   .c1{
      color:red;
   }
   .c2{
      color:pink;
   }
   .c3{
      color:green;
   }
   .c4{
      color:tomato;
   }
   .c5{
      color:blue;
   }
 </style>
 
</body>
</html>