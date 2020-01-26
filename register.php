<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="judul-login">
  	<h2>Sign_UP</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
  	 
  	  <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  
  	  <input type="email" placeholder="email"name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  
  	  <input type="password" placeholder="password"name="password_1">
  	</div>
  	<div class="input-group">
  	  
  	  <input type="password" placeholder="Confirm password"name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign_Now</button>
  	</div>
  	<p>
  		already have an account? <br><a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>