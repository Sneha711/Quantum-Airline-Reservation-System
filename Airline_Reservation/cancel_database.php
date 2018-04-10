<?php
	// Start the session
	session_start();
	include('/Airline_Reservation/session.php');
	

   if($_SESSION['logged_user']==False)
   {
   	echo "<script> location.href='login.php'; </script>";
		exit;
   }


	#ini_set('display_errors', 1);
/*	echo "Hello";
*/	if(isset($_POST['can_user'])) {

	$con = mysqli_connect('localhost', 'root', 'mysql','Airline');
	mysqli_select_db($con,'Airline');
	
	$user_id = $_SESSION['userid'];
	$airline_src = $_POST['pass_src'];
	$airline_dest = $_POST['pass_dest'];
	$seat_num = $_POST['seatnum'];
	$airline_id=$_POST['bookairid'];
	
	/*$age = mysqli_real_escape_string($con, $_REQUEST['age']);
	$email = mysqli_real_escape_string($con, $_REQUEST['email']);
	$phone_number = mysqli_real_escape_string($con, $_REQUEST['phone_number']);
	$address = mysqli_real_escape_string($con, $_REQUEST['address']);
*/
	
		
			echo "Your ticket is cancelled.";
			$resultab = mysqli_query($con,"SELECT * FROM Flight WHERE source='$airline_src' AND destination='$airline_dest'");
			$resab = mysqli_fetch_array($resultab,MYSQLI_BOTH);
			$total_seats = $resab[6];
			$seats_avail = $resab[7];
		    /*$_SESSION['airline_id']=$resab[0];
			$airline_id = $_SESSION['airline_id'];*/
			/*mysqli_query($con,"INSERT INTO combinetable VALUES('$user_id', '$airline_id','$seat_num')" );
			$sql1 = "UPDATE Passenger SET age='$age', email='$email', phone_number='$phone_number', address='$address' WHERE passenger_id='$user_id' ";
*/
			mysqli_query($con,"DELETE FROM combinetable where user_id='$user_id' AND airline_id='$airline_id' AND seat_num='$seat_num'" );
			$sql2 = "UPDATE Flight SET seats_avail='$seats_avail'+1 where flight_number='$airline_id'";
	if(mysqli_query($con,$sql2)){
    echo "Ticket cancelled.";
    /*echo "<script> location.href='login.php'; </script>";
	exit;
*/
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}

			echo "<script> location.href='welcome.php';</script>";
			exit;
		

}

?>


<html>
   <head>
   <title>Cancel</title>
	<style>

	h1 {color:white;
		position: absolute;
    	top: 30px;
    	left: 550px;
    	text-align: center;
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
        <a href="user_home.php"><i class="fa fa-home fa-fw"></i> Home</a>
        </div>
         

        <h1 style="color:white;">Cancel Flight</h1> 

	<form method="post" action="cancel_database.php">
		<div class="ab" align="center" >

		<div class="input-group">
			<label>AirlineID</label>
			<input style="color:black; type="text" name="bookairid" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
		<div class="input-group">
			<label>Source</label>
			<input style="color:black; type="text" name="pass_src" required>
		</div>
		<div class="input-group">
			<label>Destination</label>
			<input style="color:black; type="text" name="pass_dest" required>
		</div>
		<div class="input-group">
			<label>Seat_Number</label>
			<input style="color:black; type="text" name="seatnum" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
		



			<div class="input-group">
			<button type="submit" class="btn" name="can_user">Cancel</button>
		</div>
		
		<!-- <p>
			Already a member? <a href="login.php">Sign in</a>
		</p> -->
		</div>
	</form>

      <!-- <h2><a href = "/Airline_Reservation/logout.php">Sign Out</a></h2> -->
   </body>
   
</html>