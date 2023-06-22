<?php  include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="post">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" name="email" id="email" placeholder="Email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name="password" id="password" placeholder="Password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button> <a href="register.php"> Register</a></button>
      <button type="submit" name="login" onclick="return Validate()">Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->

</body>
<script type="text/javascript">
		function Validate() {
      
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;
			if (email == null && password == null) {
        alert("Please enter email and password");
				return false;
			}else{
				return true;
			}
		}
	</script>
</html>
