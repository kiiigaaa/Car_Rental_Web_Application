<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>reservation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/reservation.css">
</head>
	<body>
			<div class="container">
				<div class="contact-box">
					<div class="left"></div>
					<div class="right">
						<div class="title"><h2>RESERVATION</h2></div>
							<form method="post">
								<h3 class="text">Enter full name: </h3><span><input type="text" class="field" name="name" placeholder="customer Name" required></span>
								<h3 class="text">Enter mobile number: </h3><span><input type="number" class="field" name="mobile_number" placeholder="customer mobile number" required></span>
								<h3 class="text">Enter reservation date: </h3><span><input type="date" class="field" name="date" id="date" placeholder="Date" required></span>
								<h3 class="text">Enter NIC:	</h3><span><input type="text" class="field" name="nic" id="nic" placeholder="NIC No." ></span>
									<button class="btn" type="submit"  name="reservation" onclick="return Validate()">Check out</button>
							</form>
					</div>
				</div>
				<a href="vehicle-index.php">
            			<span class="close">+</span>
        			</a>
			</div>
	</body>
	<script type="text/javascript">
    function Validate() {
        var nic = document.getElementById("nic").value;
		if (nic) {
			return true;
		}else{
			alert("Please enter nic");
			return false;
		}
    }
</script>
</html>