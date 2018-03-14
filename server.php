<?php
session_start();
$username ="";
$email ="";
$errors = array(); 
$db=mysqli_connect('localhost','root','','registration');
//*when you click the register button*//
if(isset($_POST['REGISTER']))
{
$username=mysql_real_escape_string($_POST['username']);
$email=mysql_real_escape_string($_POST['email']);
$password=mysql_real_escape_string($_POST['password']);
$confirm password=mysql_real_escape_string($_POST['confirm password']);
if (empty($username)) {
	array_push($errors, "username is required");
}

if (empty($email)) {
	array_push($errors, "email is required");
}
if (empty($password)) {
	array_push($errors, "Password is required");
}
if ($password != $confirm password ) {
	array_push($errors, "the two passwords do not match");
}
    //*if there are no errors save users to database*//
if (count($errors)==0){
	$ new password = md5($password);
	$sql = "INSERT INTO users (username, email, password)
	        VALUES ('$username', '$email', '$password')";
	
mysqli_query ($db, $sql);
$_SESSION['username'] = $username;
$_SESSION['success'] = "you are now logged in";
header('location:index.php');
}
}
if (isset($_GET['Logout']));{
	session_destroy();
	unset($_SESSION['username']);
	header ('location: index.php);
}


?>