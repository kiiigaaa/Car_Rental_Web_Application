<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="css/service.css">
	 <script src="js/service.js" defer></script>
	 <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

	<title></title>
</head>
<body>
	<section class="navsection">
	<header>
        <div class="wrapper"> 
        <div class="logo">
          <a href="#">
          <img src="img/logo.jpeg" alt="logo" >
          </a>
            </div>
         <nav>
          <a href="index.php">Home</a>
          <a href="services.php">Services</a>
          <a href="vehicle-index.php">Vehicles</a>
          <a href="aboutus.php">About</a>
          <a href="contactus.php">Contact</a>
          <a href="inquery.php">Inquiries</a>
          <a href="register.php" border="2px solid white" >Register</a>
          <a href="login.php">Login</a>
         </nav>
        </div>
    </header>
	</section>
	<div class="middle">
	<div class="container" style="margin-top:70px">
		<div class="step-row">
			<div id="progress"></div>
			<div class="step-col"><small>step1</small></div>
			<div class="step-col"><small>step2</small></div>
			<div class="step-col"><small>step3</small></div>
			
		</div>
		<form method="post">
			<div id="form1">
				<h3>SERVICE TYPE</h3>
				<div class="select">
				<select id = "serviceType" name="service_type">
					<option selected disabled>SERVICE TYPE</option>
					<option value="Wedding hires" id="Wedding">Wedding Hires</option>
					<option value="off ride">Off Ride</option>
					<option value="bussiness">Long Term</option>
					<option value="Pickups">Airport Pickups</option>
				</select>
				</div>
				<h3>CAR MODEL</h3>

				<select id = "Type"  name="car_model">
					<option selected disabled>CAR MODEL</option>
					<option value="SUV">SUV</option>
					<option value="SEDAN">SEDAN</option>
					<option value="HATCHBACK">HATCHBACK</option>
				</select>
				<div class="btn-box">
					<button type="button" id="Next1">Next</button>	
				</div>
			</div>
			<div id="form2" style="display:none">
				
				<h3>DEPATURE DATE</h3>
				<input type="date" id="adate" name="a_date" name="arivalDate">

				<h3>ARRIVAL DATE</h3>
				<input type="date" id="rdate" name="r_date" name="ReturnDate">
		
				<div class="btn-box">
					<button type="button" id="Back1">Back</button>	
					<button type="button" id="Next2">Next</button>	
				</div>
			</div>
			<div id="form3" style="display:none">
				<h3>DRIVER OPTION</h3>
				<select id = "op" name="driver">
					<option selected disabled>DRIVER OPTION</option>
					<option value="Yes">With Driver</option>
					<option value="No">Without Driver</option>		
				</select>
				<h3>EMAIL</h3>
				<input type="email" id="em" name="email" placeholder="Enter Your Email..." required>

				<div class="btn-box">
					<button type="button"id="Back2">Back</button>
					<button type="submit" name="service">Proceed</button>
				</div>		
			</div>
	</form>
	<button class="srvs-btn"><a href="service_list.php">list</a></button>	
	</div>
	</div>
	<footer>
		<div class="main-content">
			<div class="left box">
				<h2>About us</h2>
				<div class="content">
					<p>the best rental system ever.the best rental system everthe best </p><br>
					<div class="socialmedia">
						<a href="#"><span class="fab fa-facebook-f"></span></a>
						<a href="#"><span class="fab fa-twitter"></span></a>
						<a href="#"><span class="fab fa-youtube"></span></a>
						<a href="#"><span class="fab fa-instagram"></span></a>
					</div>
				</div>	
			</div>
			<div class="center box">
				<h2>Services</h2>
				<div class="content">
					<p>Longterm</p>
					<p>Offroad</p>
					<p>Trip</p>
					<p>Airport Pickups</p>
				</div>
				
			</div>
			<div class="center box">
				<h2>Address</h2>
				<div class="content">
					<div class="place">
						<span class="fas fa-map-marker-alt"></span>
						<span class="text">NO5 Galleface, colombo2</span>
					</div>
					<div class="phone">
						<span class="fas fa-phone-alt"></span>
						<span class="text">+094-711122345</span>
					</div>
					<div class="email">
						<span class="fas fa-envelope"></span>
						<span class="text">123@gmail.com</span>
					</div>
				</div>
			</div>
			<div class="right box">
				<h2>Contact Us</h2>
				<div class="content">
					<form action = "#">
						<div class="email">
							<input type="email" id="em" placeholder="Enter Your Email..." required>
						</div><br>
						<div class="msg">
							<textarea rows="2" cols="50" placeholder="Text here..." required></textarea>
						</div>
						<div >
							<button type ="submit" class="btn" id="send">Send</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</footer>

</body>
</html>