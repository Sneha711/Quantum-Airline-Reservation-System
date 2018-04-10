<?php
	// Start the session
	session_start();
	include('/Airline_Reservation/session.php');
   if($_SESSION['logged_admin']==False)
   {
    echo "<script> location.href='admin.php'; </script>";
    exit;
   }
	
	if(isset($_POST['reg_user'])) {

/*	$con = mysqli_connect('localhost', 'root', 'mysql','Airline');

*/	
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "Airline";

	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	} 

	mysqli_select_db($con,'Airline');
	
	$source = $_POST['source'];
	$dest = $_POST['destination'];
	$departTime = $_POST['depart_time'];
	$arrivalTime = $_POST['arrival_time'];
	$airline_id = $_POST['airline_id'];
	$price = $_POST['price'];
	$total_seats= $_POST['total_seats'];
	$seats_avail = $_POST['total_seats'];
	$airline_name = $_POST['airline_name'];
		
			
			mysqli_query($con,"INSERT INTO Flight(flight_number,arrival_time,departure_time,source ,destination,price,total_seats,seats_avail,airline_name) VALUES('$airline_id','$arrival_time','$departTime','$source','$dest','$price','$total_seats','$seats_avail','$airline_name')" );
			echo "The Flight is added to the database";
			
			echo "<script> location.href='admin_home1.php'; </script>";
			exit;

			/*echo "<script> location.href='bookpage.php';</script>";
			exit;
		*/
	

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Flights</title>
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
	background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('airplane1.jpg');
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
.btn{
	background-color : white;
	color : black;
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
.btn{
	background-color : white ;
	color : black;
	border: 2px solid #ffffff; 
	font-style : italic;

}
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="list-group">
  <a href="admin_home.php"><i class="fa fa-home fa-fw"></i> Home</a>
  
</div>

<h1 style="color:white;">Book Flight</h1> 
	
	<form method="post" action="airline_register.php">
	<div class="ab" align="center" >
		<div class="input-group">
			<label>Source</label>
			<input style="color:black;" type="text" name="source" required>
		</div>
		<div class="input-group">
			<label>Destination</label>
			<input style="color:black;" type="text" name="destination" required>
		</div>
				<div class="input-group">
			<label>Airline Id</label>
			<input style="color:black;" type="text" name="airline_id" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
				<div class="input-group">
			<label>Arrival_time</label>
			<input style="color:black;" type="time" name="arrival_time" required>
		</div>
				<div class="input-group">
			<label>Depart_time</label>
			<input style="color:black;" type="time" name="depart_time" required>
		</div>
		<div class="input-group">
			<label>Price</label>
			<input style="color:black;" type="text" name="price" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
		<div class="input-group">
			<label>Total seats</label>
			<input style="color:black;" type="text" name="total_seats" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
		<div class="input-group">
			<label>Airline Name</label>
			<input style="color:black;" type="text" name="airline_name" required>
		</div>
			<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		</div>
		<!-- <p>
			<h2><a href = "/Airline_Reservation/logout.php">Sign Out</a></h2>
		</p> -->
			</form>
</body>
</html>