<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Direct Inquiry</title>
	<link rel="stylesheet" type="text/css" href="css/inquery.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
	<body>
		
			<div class="container">
				<div class="contact-box">
					<div class="left"></div>
					<div class="right">
						<h2>Direct Inquiry</h2>
							<form method="post">
									<input type="text" class="field" name="name" placeholder="Your Name" required>
									<input type="email" class="field" name="email" placeholder="Your Email" required>
									<input type="number" class="field" name="mobileNumber" placeholder="Mobile No." required>
							
						
									<label for = "service type">service type</label>
									<select id = "service type" name="serviceType" required>
										<option value = "service type"> select service type</option>
										<option value = "Cab Services"> Cab Services </option>
										<option value = "sLuxury Car Rental"> sLuxury Car Rental</option>
										<option value = "Self Drive Car Rental"> Self Drive Car Rental</option>
									</select>
											<br></br>
													
									<label for = "vehicle type">vehicle type</label>
									<select id = "vehicle type" name="vehicleType" required>
										<option value = "vehicle type"> select vehicle type</option>
										<option value = "Toyota "> Toyota </option>
										<option value = "Nisasan"> Nissan</option>
									</select>	
											<br> </br>

									<textarea placeholder="Inquires" class="field" name="inquiry" id="textdata"></textarea>
									<button class="btn" type="submit"  name="save" onclick="return Validate()">Inquire</button>
									
							</form>
					</div>
				</div>
					<a href="index.php">
            			<span class="close">+</span>
        			</a>
			</div>
			
	</body>
	<script type="text/javascript">
		function Validate() {
			var text = document.getElementById("textdata").value;
			if (text) {
				return true;
			}else{
				alert("Please enter inquiry details.");
				return false;
			}
		}
	</script>
</html>