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
	<link rel="stylesheet" type="text/css" href="css/driver_rating.css">

</head>
	<body>
			<div class="container">
				<div class="contact-box">
					<div class="left"></div>
					<div class="right">
						<h2 class="title">Driver rating</h2>
							<form method="post" action="#">

								<h3 class="text"> Customer name : </h3> <span>	<input type="text" class="field" name="cus_name" placeholder="Customer Name" required> </span><br>
								<h3 class="text"> Driver name : </h3> <span> <input type="text" class="field" name="dri_name" placeholder="Driver Name" required> </span> <br>
								<h3 class="text"> Driver ID : </h3> <span>	<input type="number" class="field" name="dri_id" placeholder="Driver ID" required> </span><br>
								<h3 class="text"> Rating : </h3> <span>	<input type="number" class="field" name="rating_value" placeholder="Rating" min="1" max="5" required> </span><br>
									
								<textarea placeholder="Comment" class="field" name="comment" id="textdata"></textarea>
								
								<button class="btn" type="submit"  name="rating">submit</button> 
							</form>
					</div>
					<button class="faq-btn"><a href="driver_rating_list.php" style="text-decoration:none;">rating</a></button>
					<a href="index.php">
            			<span class="close">+</span>
        			</a>
				</div>
			</div>
	</body>
</html>