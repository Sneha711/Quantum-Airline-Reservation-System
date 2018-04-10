<?php
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

$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

$pword2 = $_POST['password_2'];

if($password != $pword2) {
			echo "Passwords do not match. <br>";
}

else{
$sql = "INSERT INTO Passenger (username, password,first_name,last_name) VALUES ('$username', '$password','$firstname','$lastname')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    echo "<script> location.href='login.php'; </script>";
	exit;

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
$conn->close();
?>
