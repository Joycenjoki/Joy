<html>
<head>
<title>Login System</title>
<head>
<body>
<form action="login.php" method="post">
<div class="input-group">
   <label>Username</label>
   <input type="text" name="Username">
</div>
<div class="input-group">
   <label></label>
   <input type="text" name="Username">
</div>
<div class="input-group">
   <label>Username</label>
   <input type="text" name="Username">
</div>
<div>
not yet a member <a href="register.php">Sign up</a></p>
</div>
</form>

<?php
$usersName=$_POST['Username'];
$address=$_POST["Address'];
$city=$_POST['City'];

?>
</html>