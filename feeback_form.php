<?php  include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback Form</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">		
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" href="css/feedback_style.css"> -->

</head>

<body>	

<div class="view">
	<img src="1.svg">
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
			<h1 class="text-center mt-5 font-weight-bold">Feedback</h1>
			<hr class="bg-white">
			<h6 class="text-center">Please write your feedback below:</h6>
			<h3 class="mt-4">How do you rate your overall experience?</h3>

			<form method = "post">
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Bad</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Average</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Good</label>

			</div>
			</div>					

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Full Name*<br>
					<input type="text" id="text" required="" placeholder="Abdul Rafay" name="name"></label>

					<label class="col-md-4">Email*<br>
					<input type="email" id="text" required="" placeholder="theprovider@gmail.com" name="email"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Age*<br>
					<input type="number" id="text" required="" placeholder="25" name="age"></label>

					<label class="col-md-4">Phone*<br>
					<input type="number" id="text" required="" placeholder="+92123456789" name="mobile_number"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-8">Message*<br>
					<textarea id="message" required="" placeholder="Write yor message here" name="message" cols="48" rows="5"></textarea></label>
			</div>

						<div class="row">
				<div class="col-md-2"></div>
				<button class="btn btn-primary" type="submit" name="feedback" style="width: 53.5%; position: absolute; margin-left: 15%;">Submit</button>
			</div>
			</form>
</div>

</body>
</html>  