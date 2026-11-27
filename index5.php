<html>
   <head>
      <title>Phone validation check</title>
   </head>
   <body>
        <h2>Phone number validation check</h2>
        <form method="post">
             <p>Enter your phone number :</p>
             <input type="text" name="phone">
             <input type="submit">
        </form>
       
     <?php
       
         if(isset($_POST["phone"]))
          {
                $ph = $_POST["phone"];
                $pattern = "/^[0-9]{10}$/";

                if(preg_match($pattern , $ph))
                {
                     echo "<p>valid number</p>";
                }
                else
                {
                     echo "<p>Invalid</p>";
                }
          }

       ?>

  </body>
  </html>