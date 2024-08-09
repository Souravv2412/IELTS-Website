<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <title> Login User </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter your username" >
  	</div>

  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" id="id_password" placeholder="Enter your password">
      <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
      <script src="http://ielts/IELTS%20all%20necessaries/Javascript/passwordeye.js"></script>
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php"> Register here </a>
  	</p>
  </form>
  
<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
</div>
</body>
</html>