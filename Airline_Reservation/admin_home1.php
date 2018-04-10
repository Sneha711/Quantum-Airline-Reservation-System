<?php
   session_start();
   include('/Airline_Reservation/session.php');
   if($_SESSION['logged_admin']==False)
   {
    echo "<script> location.href='admin.php'; </script>";
    exit;
   }

?>

<!-- <html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Book Flight<?php echo $login_session; ?></h1> 
      <h2><a href = "/Airline_Reservation/airline_register.php">Add another flight</a></h2>

	   <h2><a href = "/Airline_Reservation/admin_logout.php">Log Out</a></h2>
   </body>
   
</html>
 -->
<!DOCTYPE html>
<html>
<head>
	
	<style>

	h1 {color:white;
		position: absolute;
    	top: 30px;
    	left: 550px;
    	text-align: center;
    	opacity: 1;
    	}
   /*  a{
   	position: absolute;
   	top: 30px;
   	right:10px;
   	color:white;
   	opacity: 1;
   	
   	text-align: center;
   
   }
    */
		body {
	background: linear-gradient( rgba(0, 0, 0, 1), rgba(0, 0, 0, 1) );
	background-color: black;
	background-size : 100%;
	background-repeat: no-repeat;
    background-attachment: fixed;
    opacity: 0.8;
    filter:alpha(opacity=80);
	}
p{
	color : white;
}

.input-group{
	color : white;
	padding : 10px;
}
.ab
{
	border-style: solid;
	border-color: white;
    border-width: medium;
	border-radius : 8px;
	margin-left : 420px;
	margin-right : 420px;
	margin-top : 150px;
	padding : 10px;
	background-color : black;
	opacity: 0.8;
    filter:alpha(opacity=80);
}

a:visited {
    color: white;
}

a:hover {
    color: red;
}

a:active {
    color: blue;
}
    </style>

 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
   
   <body>

<div class="list-group">
  <a style='position: absolute;top: 30px;right:10px;color:white;opacity: 1;text-align: center;' href="user_home.php"><i class="fa fa-home fa-fw"></i> Home</a>
  
</div>

<p style='color:white;font-style:italic;position:fixed;top:50%;left:50%;margin-top: -10%;margin-left: -10%;font-size: large;'><a href = "/Airline_Reservation/airline_register.php">Add another flight</p>

<p style='color:white;font-style:italic;position:fixed;top:60%;left:50%;margin-top: -10%;margin-left: -10%;font-size: large;'><a href = "/Airline_Reservation/admin_logout.php">Log Out</p>

	

   </body>
   
</html>