<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="kotak-login">
  <div class="judul-login">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" placeholder="username" name="username" >
  	</div>
  	<div class="input-group">

  		<input type="password" placeholder="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><a href="index.html">Login</a></button>
  	</div>
  	<p>
  		Create Akun Now ! <br><a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>