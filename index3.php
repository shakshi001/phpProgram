<?php 
   $file = "visitors_count.txt";
   
   if(!file_exists($file))
   {
      file_get_contents($file , "0");
   }

   $count = (int)file_get_contents($file);
   $count++;
   file_put_contents($file , $count);

   echo "<h1>Number of visitors<h1>";
   echo "<h1>Total number of visitors : $count";

?>