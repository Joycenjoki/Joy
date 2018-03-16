<?php include('server.php');?>
<html>
<head>
<title>User Registration Form using Php and Mysql</title>
</head>
<body>
<div class="header">
     <h2>Register Here</h2>
</div>
<form method="POST" action="register.php">
<?php include('error.php');?>
     <div class="input-group">
	     <label>Username</label>
		 <input type="text" name="Username">
	 </div>
	 <div class="input-group">
	     <label>Email</label>
		 <input type="text" name="Email">
	 </div>
	<div class="input-group">
	     <label>Password</label>
		 <input type="Password" name="Password_1">
	 </div>
	 <div class="input-group">
	     <label>Confirm Password</label>
		 <input type="Password" name="Password_2">
	 </div>
	 <div class="input-group">
	      <button type="submit" name="Register" class="btn">REGISTER</button>
		 
	 </div>"
	 <a href="login.php">REGISTER</a>
	
already a member? <a href="login.php">Sign In</a>	 
	 
	 
</form>
</body>
</html>