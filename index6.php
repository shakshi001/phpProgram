<html>
  <head>
     <title>Emial Validation</title>
  </head>
  <body>
      <h1>Email Validation</h1>
      <form method="post">
          <input type="text" name="email" required>
          <input type="submit" name="validate">
      </form>
     <?php 
          if(isset($_POST["email"])){
              $em = $_POST["email"];
              $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
              if(preg_match($pattern , $em ))
               {
                   echo "<p>valid email</p>";
               }
               else
               {
                   echo "<p>Invalid </p>";
               }
          }

       ?>

  </body>
</html>