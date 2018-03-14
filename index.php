<?php include('server.php');?>
<html>
<head>
<title>User Resistration Using Php and Mysql</title>
</head>
<body>
<div class="header">
<h2>Home Page</h2>
</div>
<div class="content">
<?php if (isset($_SESSION['success'])):?>
     <div class="error success">
	    <h3>
		     <?php
			  echo $_SESSION['success'];
			  unset ($_SESSION['success']);
			 ?>
		</h3>

	  <div>
	  <?php endif ?>
	  
	  <?php if (isset ($_SESSION['username']));?>
	  <p> welcome <strong><?php echo $_SESSION ['username'];?></strong></p>
	  <p><a href="index.php? log out='1'" style="color:red";>Log Out</a></p>
	  <?php endif?>
</div>
</body>
</html>