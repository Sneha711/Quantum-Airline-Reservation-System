<?php
   session_start();
   /*include('/Airline_Reservation/session.php');*/
   if($_SESSION['logged_user']==False)
   {
   	echo "<script> location.href='login.php'; </script>";
		exit;
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Flights</title>
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
  <a href="user_home.php"><i class="fa fa-home fa-fw"></i> Home</a>
  
</div>

<!--       <h1>Book Flight<?php echo $login_session; ?></h1> 
             -->            
			
             <h1 style="color:white;">Book Flight</h1> 



	<form method="post" action="bookpage.php">
	<div class="ab" align="center" >
		

		<div class="input-group">
			<label>AirlineID</label>
			<input style="color:black;" type="text" name="bookairid" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
		<div class="input-group">
			<label>Source</label>
			<input style="color:black;" type="text" name="pass_src" required>
		</div>
		<div class="input-group">
			<label>Destination</label>
			<input style="color:black;" type="text" name="pass_dest" required>
		</div>
		<div class="input-group">
			<label>Seat_Number</label>
			<input style="color:black;" type="text" name="seatnum" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
		<div class="input-group">
			<label>Age</label>
			<input style="color:black;" type="text" name="age" pattern="^[0-9]+$" title="Must contain only digits" required>
		</div>
		<div class="input-group">
			<label>e-mail</label>
			<input style="color:black;" type="email" name="email" required>
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input style="color:black;" type="tel" name="phone_number" id="pno" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" required>
		</div>
		<div class="input-group">
			<label>Address</label>
			<input style="color:black;" type="text" name="address" required>
		</div>



			<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Book</button>
		</div>
		
		<!-- <p>
			Already a member? <a href="login.php">Sign in</a>
		</p> -->
		</div>
	</form>

<!--       <h2><a href = "/Airline_Reservation/logout.php">Sign Out</a></h2>
    -->   </body>
   
</html>