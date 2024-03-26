<!DOCTYPE html>
   <html>
       <header>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Result</title>
       </header>
       <body style="text-align: center;">
          <h1 style="font-size: 70px;color:yellowgreen ;">Welcome to our Application</h1>
          <?php
             if($_SERVER["REQUEST_METHOD"]=="POST") {
                 $fname = $_POST['fname'];
                 $lname = $_POST['lname'];
                 $num1 = $_POST['num1'];
                 $num2 = $_POST['num2'];
                 $sum = $num1 + $num2;
                 $fullname =$fname." ".$lname;
                 echo "<h1> Enjoy  $fullname </h1>";
                 echo "<h1>  </h1>";
                 echo "<p><h1> The sum is equal to : $sum </h1></p>";
              }
          ?>
       </body>
   </html>