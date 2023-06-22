<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>VEHICLE FLEET</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&family=Overpass:wght@200&family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/vehicle_index.css">

        <script src="js/vehicle_index.js" defer></script>
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

<section class="vehicles" id="vehicles">
    <h1 class="vh1">VEHICLE FLEET</h1>

    <div class="vehicle-container">

    <div class="vhcl" data-name="v1"> 
    <img src="img/car png.png" alt="">
    <h3>ABCD CAR</h3>
    <div class="rate">00.00</div>
    <h5>(Hourly Rate)</h5>
    </div>

    <div class="vhcl" data-name="v2"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
      </div>

   <div class="vhcl" data-name="v3"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>

   <div class="vhcl" data-name="v4"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>

   <div class="vhcl" data-name="v5"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>

   <div class="vhcl" data-name="v6"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>

   <div class="vhcl" data-name="v7"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>

   <div class="vhcl" data-name="v8"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>

   <div class="vhcl" data-name="v9"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>

   <div class="vhcl" data-name="v10"> 
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <div class="rate">00.00</div>
      <h5>(Hourly Rate)</h5>
   </div>
   </div>
</section>

<div class="vehicle-preview">
   <div class="preview active" data-target="v1">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>

   </div>
</div>

<div class="vehicle-preview">
   <div class="preview active" data-target="v2">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>

<div class="vehicle-preview">
   <div class="preview active" data-target="v3">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>

<div class="vehicle-preview">
   <div class="preview active" data-target="v4">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>

<div class="vehicle-preview">
   <div class="preview active" data-target="v5">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>

<div class="vehicle-preview">
   <div class="preview active" data-target="v6">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>
<div class="vehicle-preview">
   <div class="preview active" data-target="v7">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>
<div class="vehicle-preview">
   <div class="preview active" data-target="v8">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>
<div class="vehicle-preview">
   <div class="preview active" data-target="v9">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>
<div class="vehicle-preview">
   <div class="preview active" data-target="v10">
      <span class="close">+</span>
      <img src="img/car png.png" alt="">
      <h3>ABCD CAR</h3>
      <p>Lorem ipsum dolor sit amet consectetur adisperst serlet.</p>
      <div class="rate">0.00</div>
      <div class="button">
         <a href="reservation.php" class="Reserve">Reserve</a>
      </div>
      
   </div>
</div>
<button class="faq-btn"><a href="reservation_list.php">list</a></button>
<div style="position:absolute;width:100%;margin-top:70px;">
<?php include 'footer.php';?>
</div>
</body>

</html>