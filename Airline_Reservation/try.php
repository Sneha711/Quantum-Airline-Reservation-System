<?php
	// Start the session
	session_start();
	
	if(isset($_POST['reg_user'])) {

	$con = mysqli_connect('localhost', 'root', 'mysql','Airline');
	mysqli_select_db($con,'Airline');
	
	$user_id = $_SESSION['userid'];
	$train_src = $_POST['pass_src'];
	$train_dest = $_POST['pass_dest'];
	$seat_num = $_POST['seatnum'];
	
	$age = mysqli_real_escape_string($con, $_REQUEST['age']);
	$email = mysqli_real_escape_string($con, $_REQUEST['email']);
	$phone_number = mysqli_real_escape_string($con, $_REQUEST['phone_number']);
	$address = mysqli_real_escape_string($con, $_REQUEST['address']);

	
		
			echo "You are now registered.";
			$resultab = mysqli_query($con,"SELECT * FROM train WHERE source='$train_src' AND dest='$train_dest'");
			$resab = mysqli_fetch_array($resultab,MYSQLI_BOTH);
		    $_SESSION['airline_id']=$resab[0];
			$airline_id = $_SESSION['airline_id'];
			mysqli_query($con,"INSERT INTO combinetable VALUES('$user_id', '$airline_id','$seat_num')" );
			$sql1 = "UPDATE Passenger SET age='$age', email='$email', phone_number='$phone_number', address='$address' WHERE passenger_id='$user_id' ";

if(mysqli_query($con, $sql1)){
    echo "Ticket reserved.";
    /*echo "<script> location.href='login.php'; </script>";
	exit;
*/
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

			/*echo "<script> location.href='login.php';</script>";
			exit;
		*/
	

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