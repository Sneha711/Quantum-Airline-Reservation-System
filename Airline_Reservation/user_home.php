<?php

  session_start();
   include('/Airline_Reservation/session.php');
   if($_SESSION['logged_user']==False)
   {
    echo "<script> location.href='login.php'; </script>";
    exit;
   }

   $user=$_SESSION['username'];
   echo "<p style='color:black;font-style:italic;margin-left: 90%;' >"."Hello $user!<br>"."</p>";
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
  <a href="welcome.php">Book Flights</a>
  <a href="cancel_database.php">Cancel Flight</a>
  <a href="logout.php">Logout</a>


  
</div>


<h2>HOME</h2>
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




























