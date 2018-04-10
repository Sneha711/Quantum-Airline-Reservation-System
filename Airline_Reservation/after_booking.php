<?php
   session_start();
   include('/Airline_Resevation/session.php');

   /*include('/Airline_Reservation/session.php');*/
   if($_SESSION['logged_user']==False)
   {
         echo "<script> location.href='login.php'; </script>";
      exit;
   }

   echo "<p style='color:black;font-style:italic;position:fixed;top:50%;left:50%;margin-top: -10%;margin-left: -10%;font-size: large;' >"."Flight booked successfully!"."</p>";
   
  
   
?>
















<html">
   
   <head>
      <title>Welcome </title>
   <style>
   a{
      position: absolute;
      top: 30px;
      right:10px;
      color:white;
      opacity: 1;
      
      text-align: center;
    
    }


   h1 {color:white;
      position: absolute;
      top: 30px;
      left: 550px;
      text-align: center;
      }
    </style>

      <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   </head>
   
   <body>

      <div class="list-group">
        <a href="user_home.php"><i class="fa fa-home fa-fw"></i> Home</a>
      </div>
<!--       <h1 style="color:white;">Flight booked successfully</h1>
       -->      </body>
   
</html>