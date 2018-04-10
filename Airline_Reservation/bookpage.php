<?php
	// Start the session
	session_start();

	/*include('/Airline_Reservation/session.php');*/
   if($_SESSION['logged_user']==False)
   {
   		echo "<script> location.href='login.php'; </script>";
		exit;
   }
	
	
	if(isset($_POST['reg_user'])) {

	$con = mysqli_connect('localhost', 'root', 'mysql','Airline');
	mysqli_select_db($con,'Airline');
	
	$user_id = $_SESSION['userid'];
	$airline_src = $_POST['pass_src'];
	$airline_dest = $_POST['pass_dest'];
	$seat_num = $_POST['seatnum'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	$airline_id = $_POST['bookairid'];
	$_SESSION['air_id']=$airline_id;



	$res = mysqli_query($con,"SELECT * FROM combinetable WHERE seat_num='$seat_num' AND airline_id='$airline_id'");
	$reslon = mysqli_fetch_array($res,MYSQLI_BOTH);
	$num = mysqli_num_rows($res);

	if (mysqli_num_rows($res)>0){

		echo "<script> location.href='disp_avail_seats.php';</script>";
			exit;
		
	} 




	/*$age = mysqli_real_escape_string($con, $_REQUEST['age']);
	$email = mysqli_real_escape_string($con, $_REQUEST['email']);
	$phone_number = mysqli_real_escape_string($con, $_REQUEST['phone_number']);
	$address = mysqli_real_escape_string($con, $_REQUEST['address']);
*/
	
		
			echo "You are now registered.";
			$resultab = mysqli_query($con,"SELECT * FROM Flight WHERE source='$airline_src' AND destination='$airline_dest'");
			$resab = mysqli_fetch_array($resultab,MYSQLI_BOTH);
		    $_SESSION['airline_id']=$resab[0];
			$airline_id = $_SESSION['airline_id'];
			$total_seats = $resab[6];
			$seats_avail = $resab[7];
			
			mysqli_query($con,"INSERT INTO combinetable VALUES('$user_id', '$airline_id','$seat_num')" );
			mysqli_query($con,"UPDATE Passenger SET age='$age', email='$email', phone_number='$phone_number', address='$address' WHERE passenger_id='$user_id' ");
			mysqli_query($con,"UPDATE Flight SET seats_avail='$seats_avail'-1 where flight_number='$airline_id'");

			/*$sql1 = "UPDATE Passenger SET age='$age', email='$email', phone_number='$phone_number', address='$address' WHERE passenger_id='$user_id' ";
			$sql2 = "UPDATE Flight SET seats_avail='$seats_avail'-1  where flight_number='$airline_id'";
*/


if(mysqli_query($con)){
    echo "Ticket reserved.";
    /*echo "<script> location.href='login.php'; </script>";
	exit;
*/
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

			echo "<script> location.href='after_booking.php';</script>";
			exit;
		
	

}

?>
<!-- <!DOCTYPE html>
<html>
<body>
	<form method="post" action="bookpage.php">
		<div class="input-group">
			<label>AirlineID</label>
			<input type="text" name="bookairid">
		</div>
		<div class="input-group">
			<label>Source</label>
			<input type="text" name="pass_src">
		</div>
		<div class="input-group">
			<label>Destination</label>
			<input type="text" name="pass_dest">
		</div>
		<div class="input-group">
			<label>Seat_Number</label>
			<input type="text" name="seatnum">
		</div>
			<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Book</button>
		</div>
		
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html> -->