<html>
   <head>
      <title>Multiplication Table</title>
   <head>
   <body>
      
        <h1>Multiplication Table</h1>
        <form method="post">
           <input type="number" name="num">
           <input type="submit">

        </form>
        
       <?php
          
          if(isset($_POST['num'])){
             $num = abs((int)$_POST['num']);
             
            for($i=1;$i<=10;$i++){
                $result = $i * $num;
                echo "<p>$num * $i = $result</p>";
            }
          }
        ?>
    </body>
 </html>