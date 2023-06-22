<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/register.css">

</head>
	<body>
			<div class="container">
				<div class="contact-box">
					<div class="left"></div>
					<div class="right">
						<h2 class="title">Register</h2>
							<form method="post" action="#">

								<h3 class="text"> Enter full name : </h3> <span> <input type="text" class="field" name="name" placeholder="Your Name" required> </span> <br>
								<h3 class="text"> Enter e-mail address : </h3> <span>	<input type="email" class="field" name="email" placeholder="Your Email" required> </span><br>
								<h3 class="text"> Enter Mobile number :  </h3> <span>	<input type="number" class="field" name="mobileNumber" placeholder="Mobile No." required> </span><br>
								<h3 class="text"> Enter NIC : </h3> <span>	<input type="text" class="field" name="nic" placeholder="NIC No." required> </span><br>
								<h3 class="text"> Enter New password : </h3> <span>	<input type="password" class="field" name="password" id="txtPassword" placeholder="Password" required> </span><br>
								<h3 class="text"> Re-enter password : </h3> <span>	<input type="password" class="field" name="password" id="txtConfirmPassword" placeholder="Password" required> </span><br>
								<button class="btn" type="submit"  name="register" onclick="return Validate()">Register</button> 
							</form>
					</div>
					<a href="index.php">
            			<span class="close">+</span>
        			</a>
				</div>
			</div>
	</body>
	<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</html>