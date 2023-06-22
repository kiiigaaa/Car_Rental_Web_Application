<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href ="css/contact.css">
    <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <title></title>
</head>
<body>
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
    <div class="allc"></div>
    <h1>Contact US</h1>
    <div class="border"></div>
    <form class="contact" method="post">
        <input type="text" class="cont" name="name" placeholder="Your name" required>
        <input type="text" class="cont" name="email" placeholder="Your email" required>
         <input type="number" class="cont" name="mobile_number" placeholder="Your phone-number" required>
         <textarea class="cont" name="message" placeholder="Your message" id="text_area" ></textarea>
         <button type="submit" class="contb" name="contact_us" onclick="return Validate()">Send</button>

    </form>
    <button class="faq-btn"><a href="contactus_list.php">list</a></button>
</div>
    <footer style="margin-top:10px;">
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
    <script type="text/javascript">
		function Validate() {
			var text = document.getElementById("text_area").value;
			if (text) {
				return true;
			}else{
				alert("Please enter details.");
				return false;
			}
		}
	</script>
</html>