<?php
   include('/Airline_Reservation/session.php');

?>
<html">
   
   
   <body>
      <h1>Cancel Ticket<?php echo $login_session; ?></h1> 

	<form method="post" action="cancel_database.php">
		

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
			<button type="submit" class="btn" name="can_user">Cancel</button>
		</div>
		
		<!-- <p>
			Already a member? <a href="login.php">Sign in</a>
		</p> -->
	</form>

      <!-- <h2><a href = "/Airline_Reservation/logout.php">Sign Out</a></h2> -->
   </body>
   
</html>