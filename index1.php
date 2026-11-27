<html>
  <head>
     <title>Sum of digit</title>
  </head>
  <body>
      <h1> Sum of digit </h1>
      <form method=POST>
          <input type="number" name="num">

          <input type="submit">
      </form>
     <?php 
            if(isset($_POST['num']))
            {
               $number = abs((int) $_POST['num']);
               $sum = 0;
               
               while($number > 0)
               {
                     $digit = $number % 10;
                     $sum = $sum + $digit;
                     $number = (int)($number/10);
               }
              
               echo "<h3>Sum of digit = $sum </h3>";
            }
      ?>
    
 </body>
</html>
