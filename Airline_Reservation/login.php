<?php
	session_start();
	
	if(isset($_POST['log_user'])) {

		

	

	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = mysqli_connect('localhost', 'root', 'mysql','Airline');
	mysqli_select_db($con,'Airline');

	$result = mysqli_query($con,"SELECT * FROM Passenger WHERE username='$username' AND password='$password'");

	if(mysqli_num_rows($result)){
		$res = mysqli_fetch_array($result,MYSQLI_BOTH);
		$_SESSION['userid'] = $res[0];
		$_SESSION['username'] = $res[1];
		echo $_SESSION['username'];
				$_SESSION['logged_user']=True;
		echo "<script> location.href='user_home.php'; </script>";
		exit;
	}

	else{
		
		echo "No user found.";
		}
		
		
		}
	
	



	
?>
<!-- <!DOCTYPE html>
<html>
<body>
	<form method="post" action="login.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="log_user">Login</button>
  	</div>
  	<p>
  		Didn't Register <a href="sign_up.html">Sign Up</a>
  	</p>
  </form>
</body>
</html>
 -->



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
	
	h1 {
	color:white;
    position: absolute;
      top: 30px;
      left: 580px;
      text-align: center;
      opacity: 1;
      }

    /* a{
      position: absolute;
      top: 30px;
      right:10px;
      color:white;
      opacity: 1;
      
      text-align: center;
    
    } */
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
</head>
<body>

<div class="list-group">
  <a href="index.php" style="position: absolute;top: 30px;right:10px;color:white;"><i class="fa fa-home fa-fw"></i>Home Page</a>
</div>

<h1 style="color:white;">LOGIN</h1>
	<form method="post" action="login.php">
	<div class="ab" align="center" >
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required>
  	</div>
	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="log_user">Login</button>
  	</div>
  	<p>
  		Didn't Register <a href="sign_up.html">Sign Up</a>
  	</p>
	</div>
  </form>
</body>
</html>
 