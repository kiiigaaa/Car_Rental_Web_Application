<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&family=Overpass:wght@200&family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/index.css">
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

<div class="home">
<section class="slider">
    <div class="slider">
        <figure>
            <img src="img/slide1.png">
            <img src="img/slide2.jpg">
            <img src="img/slide3.jpg">
            <img src="img/slide4.jpg">
            <img src="img/slide5.jpeg">

        </figure>
        
    </div>

</section>

<section class="about-dtls">
<div class="abt-img">
    <img src="img/Merc1.png">
</div>

<div class="about-1">
    <h1>Welcome to YAMAN</h3> <br>
</div>

<div class="about-2">
    <h3>SRI LANKAS PROMINENT CAR RENTAL SERVICE </h3>
    <br>
</div>

<div class="about-3">
     <h3> We strive to provide for our customers the highest levels of satisfaction. Even though our company is newly created we are highly reliable and efficient.
        The whole world
        is rapidly changing towards technology to ease their day to day lives.
        Travelling, as a day-to-day activity in the past people had to go for car rental
        companies and do a booking but our plan is to develop a car rental system
        for do the bookings online </h3><br>
</div>
<div class="about-4">
    <a href="aboutus.php">
    <button class="about-btn">ABOUT US</button>
    </a>
</div>
</section>

<section class="services-dtls">
<div class="services">
    
    <div class="srvs-1">
        <h3>
            We have a service range that will fullfill your any kind of tranportation requirements
        </h3>
    </div>
   
    <div class="srvs-imgs">
        <div class="sd-img">
            <a href="#">
           <img src="img/self driving.jpg">
           <div class="overlay">
            <h3 class="txt1">Self driving</h3>
          </div>
       </a>
        </div>

        <div class="sd-img">
        <a href="#">
        <img src="img/driver.jpg">
        <div class="overlay">
            <h3 class="txt2">With driver</h3>
          </div>
        </a>
        </div>

        <div class="sd-img">
        <a href="#">
            <img src="img/wedding.png">
            <div class="overlay">
                <h3 class="txt3">Wedding hires</h3>
              </div>
        </a>
        </div>
    </div>
   
    <a href="#">
    <button class="srvs-btn">MORE SERVICES</button>
    </a>

</div>
</section>

<section class="vehicle-dtls">
    <div class="vleft">
    <h2 class="v1">Our vehicle fleet</h2>
    <br>
    <h3 class="v2">We provide you with a wide rage of vehicles from super<br> luxury to the most affordable in the market </h3>
    <button class="car-btn"><a href="vehicle-index.php" style="text-decoration:none;">VEHICLE FLEET</a></button>
    </div>

    <div class="vright1">
        <a href="#">
            <img src="img/luxury car.jpg" alt="">
            <div class="overlay">
                <h3 class="vtxt1">LUXURY CARS</h3>
            </div>
        </a>
        <a href="#">
            <img src="img/budget car.jpg" alt="">
            <div class="overlay">
                <h3 class="vtxt2">BUDGET CARS</h3>
              </div>
        </a>
        <a href="#">
            <img src="img/suv cars.jpg" alt="">
            <div class="overlay">
                <h3 class="vtxt3">SUVS</h3>
              </div>
        </a>
    </div>

</section>

<section class="faq">
    <h2 class="faq1">Need to know the freequently asked questions?</h2>
        <button class="faq-btn"><a href="FAQ.html" style="text-decoration:none;">FAQ</a></button>
       
</section>
<section class="faq">
    <h2 class="faq1">Need to know the freequently asked Inqueries?</h2>
    <button class="faq-btn"><a href="inquery_list.php" style="text-decoration:none;">Inquery List</a></button>
</section>
<section class="faq">
    <h2 class="faq1">rating</h2>
        <button class="faq-btn"><a href="driver_rating.php" style="text-decoration:none;">rating</a></button>
       
</section>
<section class="faq">
    <h2 class="faq1">feedback</h2>
        <button class="faq-btn"><a href="feeback_form.php" style="text-decoration:none;">feedback</a></button>
        <button class="faq-btn"><a href="feedback_list.php" style="text-decoration:none;">feedback List</a></button>
       
</section>
</div>
<div style="position:absolute;width:100%;margin-top:1750px;">
<?php include 'footer.php';?>
</div>
</body>

</html>