<?php
   session_start();
   
   if($_SESSION['logged_user']==False)
   {
         echo "<script> location.href='login.php'; </script>";
      exit;
   }

   echo "<p style='color:white;font-style:italic;position:fixed;top:30%;left:50%;margin-top: -10%;margin-left: -10%;font-size: large;' >"."Sorry that seat is already booked!"."</p>";
   echo "<p style='color:white;font-style:italic;position:fixed;top:40%;left:50%;margin-top: -10%;margin-left: -10%;font-size: large;' >"."Available seats:"."</p>";

   $con = mysqli_connect('localhost', 'root', 'mysql','Airline');
	mysqli_select_db($con,'Airline');
	$airline_id =  $_SESSION['air_id'];

	

	$res = mysqli_query($con,"SELECT * FROM combinetable WHERE airline_id='$airline_id'");
	$num = mysqli_num_rows($res);
	


	$seat = array();

        while($row = mysqli_fetch_assoc($res)) {
          
        	$i = $row['seat_num'];
        	array_push($seat, $i);
        }

       
    $seat_total = array();
    array_push($seat_total, 1);
    array_push($seat_total, 2);
    array_push($seat_total, 3);
    array_push($seat_total, 4);
    array_push($seat_total, 5);
    array_push($seat_total, 6);
    array_push($seat_total, 7);
    array_push($seat_total, 8);
    array_push($seat_total, 9);
    array_push($seat_total, 10);
	
/*	print_r($seat_total);
*/
	$result=array_diff($seat_total,$seat);
/*	print_r($result);
*/	
        
/*echo "<table border=1 align=\"center\" style=\"border-spacing:2px;position: absolute;bottom: 200px;left: 300px;color:black;border-style: inset;border-width: 3px;border-color: black;\">
*/
	
    foreach ($result as $value) 
    { 
/*   		echo "$value <br>";
*/    	 echo "<p style='color:white;font-style:italic;position:relative;font-size: large;top:35%;left:50%;' >"."$value <br>"."</p>";
    	

    
    }

  

	
   
  
   
?>



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
    a{
    	position: absolute;
    	top: 30px;
    	right:10px;
    	color:white;
    	opacity: 1;
    	
    	text-align: center;

    }

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
  <a href="user_home.php"><i class="fa fa-home fa-fw"></i> Home</a>
  
</div>




	

   </body>
   
</html>