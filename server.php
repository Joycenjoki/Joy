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
$password_1=mysql_real_escape_string($_POST['password_1']);
$password_2=mysql_real_escape_string($_POST['password_2']);


if (empty($username)) {
	array_push($errors, "username is required");
}

if (empty($email)) {
	array_push($errors, "email is required");
}
if (empty($password_1)) {
	array_push($errors, "Password is required");
}

if ($password_1 != $password_2 ) {
	array_push($errors, "the two passwords do not match");
}
    //*if there are no errors save users to database*//
if (count($errors)==0){

	$password = md5($password_1);
	$sql = "INSERT INTO users (username, email, password)
	        VALUES ('$username', '$email', '$password')";
	
	if(mysqli_query ($db, $sql))
	{
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "you are now logged in";
		header('location:index.php');
	}
	else
		print_r("Didnt work man");
}
}
if (isset($_GET['Logout']));{
	session_destroy();
	unset($_SESSION['username']);
	header ('location: index.php');
}
?>