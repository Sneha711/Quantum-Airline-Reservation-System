<?php
	session_start();
	if(isset($_POST['log_admin'])) {
		$_SESSION['logged_admin']=True;
	$admin_username = $_POST['admin_username'];
	$admin_password = $_POST['admin_password'];

	$con = mysqli_connect('localhost', 'root', 'mysql','Airline');
	mysqli_select_db($con,'Airline');

	$result = mysqli_query($con,"SELECT * FROM Admin WHERE username='$admin_username' AND password='$admin_password'");

	if(mysqli_num_rows($result)){
		$res = mysqli_fetch_array($result,MYSQLI_BOTH);
		$_SESSION['admin_userid'] = $res[0];
		$_SESSION['admin_username'] = $res[1];
		echo $_SESSION['admin_username'];
		echo "<script> location.href='admin_home.php'; </script>";
		exit;
	}

	else{
		
		echo "No user found.";
		
	}


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
    	left: 600px;
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
  <a href="index.php"><i class="fa fa-home fa-fw"></i>Home Page</a>
</div>

<h1 style="color:white;">Login</h1> 
	
	<form method="post" action="admin.php">
	<div class="ab" align="center" >
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="admin_username" style="color: black;">
  	</div>
	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="admin_password" style="color: black;">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="log_admin">Login</button>
  	</div>
  	<!-- <p>
  		Didn't Register <a href="sign_up.html">Sign Up</a>
  	</p> -->
  	</div>
  </form>
</body>
</html>
 