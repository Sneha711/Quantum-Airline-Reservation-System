<?php

if(isset($_POST['search'])){
  
  $source =$_POST['source'];
  $destination =$_POST['destination'];

  


// connect to your database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Airline";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// run query to select everything
$result = mysqli_query($conn,"SELECT * FROM Flight WHERE source='$source' AND destination='$destination'");
$num = mysqli_num_rows($result);
/*echo $num;*/

if (mysqli_num_rows($result)>0) {
      // output data of each row
      echo "<table border=1 align=\"center\" style=\"border-spacing:2px;position: absolute;bottom: 200px;left: 300px;color:black;border-style: inset;border-width: 3px;border-color: black;\">
        <tr>
          <th>Flight ID</th>
          <th>Source</th>
          <th>Destination</th>
          <th>Arrival Time</th>
          <th>Departure Time</th>
          <th>Seats Available</th>
          <th>Airline Name</th>


        </tr>";

        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
            echo "<td>" . $row['flight_number'] . "</td>";
            echo "<td>" . $row['source'] . "</td>"; 
            echo "<td>" . $row['destination'] . "</td>";
            echo "<td>" . $row['arrival_time'] . "</td>";
            echo "<td>" . $row['departure_time'] . "</td>";
            echo "<td>" . $row['seats_avail'] . "</td>";
            echo "<td>" . $row['airline_name'] . "</td>";

          echo "</tr>";
        }
        echo "</table>";
      } 
      else {
        echo "<table border=1 align=\"center\" style=\"position: absolute;bottom: 200px;left: 580px;color:black;\" >
        <tr>
          <th>No flights available</th>
        </tr>";
        echo "</table>";

      }
      
      




}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenavform {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

div.fixed {
    position: absolute;
    bottom: 300px;
    right: 50px;
    left: 500px;
    width: 300px;
    border: 3px solid #000000;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="sign_up.html">Sign Up</a>
  <a href="admin.php">Admin Login</a>
  <a href="login.php">Book Flights</a>
   <a href="cancel_database.php">Cancel Flight</a>
  
</div>

<div class="fixed">
<form action="index.php" method="post" align="center"> 
  Enter Source:<br>
  <input type="text" name="source" align="center" required>
  <br>
  Enter Destination:<br>
  <input type="text" name="destination" align="center" required>
  <br>
<input type="submit" value="Submit" name="search">
</form>
</div>

<h2>QUANTUM AIRWAYS</h2>
<!-- <p>Click on the element below to open the side navigation menu.</p>
 -->
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 




























