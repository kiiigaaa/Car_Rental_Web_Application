<?php
    $db = mysqli_connect('localhost','root','','inquires');

	// login
	if (isset($_POST['login'])) {
		session_start();
			$email = $_POST['email'];
			$password = $_POST['password'];
		
			$sql = mysqli_query($db,"SELECT * FROM users
			WHERE email='$email' AND password='$password'");
		
		if(mysqli_num_rows($sql)>0){
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('You Have Login Succesfully');
			window.location.href='index.php';
			</script>");
		} else {
			echo"<script>alert('Invalid Email or Password');</script>";
		}
	}
	// inquery save
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
        $mobileNumber = $_POST['mobileNumber'];
        $serviceType = $_POST['serviceType'];
		$vehicleType = $_POST['vehicleType'];
        $inquiry = $_POST['inquiry'];

		mysqli_query($db, "INSERT INTO inquires (name, email, mobile_number,service_type,vehicle_type,inquiry)
         VALUES ('$name', '$email','$mobileNumber','$serviceType','$vehicleType','$inquiry')"); 
        echo ("<script LANGUAGE='JavaScript'>
		window.alert('You Have Succesfully Add a Inquery');
		window.location.href='index.php';
		</script>");
	}

	//register function
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
        $mobileNumber = $_POST['mobileNumber'];
        $nic = $_POST['nic'];
		$password = $_POST['password'];

		mysqli_query($db, "INSERT INTO users (name, email, mobile_number,nic,password)
         VALUES ('$name', '$email','$mobileNumber','$nic','$password')"); 
       echo ("<script LANGUAGE='JavaScript'>
	   window.alert('You Have Succesfully Register to system');
	   window.location.href='index.php';
	   </script>");
	}
	//reservation function
	if (isset($_POST['reservation'])) {
		$name = $_POST['name'];
		$date = $_POST['date'];
		$mobile_number = $_POST['mobile_number'];
        $nic = $_POST['nic'];

		mysqli_query($db, "INSERT INTO reservation (name, mobile_number,date,nic)
         VALUES ('$name', '$mobile_number','$date','$nic')"); 
		  echo ("<script LANGUAGE='JavaScript'>
		  window.alert('You Have Succesfully add a reservation');
		  window.location.href='vehicle-index.php';
		  </script>");
	}
	//contact_us function
	if (isset($_POST['contact_us'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile_number = $_POST['mobile_number'];
        $message = $_POST['message'];

		mysqli_query($db, "INSERT INTO contact_us (name, email,mobile_number,message)
         VALUES ('$name', '$email','$mobile_number','$message')"); 
        echo ("<script LANGUAGE='JavaScript'>
		window.alert('Your Message has been recorded');
		window.location.href='index.php';
		</script>");
	}
	//service function
	if (isset($_POST['service'])) {
		$service_type = $_POST['service_type'];
		$car_model = $_POST['car_model'];
		$a_date = $_POST['a_date'];
        $r_date = $_POST['r_date'];
        $driver = $_POST['driver'];
        $email = $_POST['email'];

		mysqli_query($db, "INSERT INTO service (service_type, car_model,a_date,r_date,driver,email)
         VALUES ('$service_type', '$car_model','$a_date','$r_date','$driver','$email')"); 
		  echo ("<script LANGUAGE='JavaScript'>
		  window.alert('Your service has been recorded! please proseed with payment');
		  window.location.href='payment.php';
		  </script>");
	}
	//payment function
	if (isset($_POST['payment'])) {
		$name = $_POST['name'];
		$card_number = $_POST['card_number'];
		$card_type = $_POST['card_type'];
        $exp_date = $_POST['exp_date'];
        $cvv = $_POST['cvv'];

		mysqli_query($db, "INSERT INTO payment (name, card_number,card_type,exp_date,cvv)
         VALUES ('$name', '$card_number','$card_type','$exp_date','$cvv')"); 
         echo ("<script LANGUAGE='JavaScript'>
		 window.alert('Your payment process is successfull');
		 window.location.href='index.php';
		 </script>");
	}
	// inquery delete
	if (isset($_GET['inquery_delete'])) {
		$id = $_GET['inquery_delete'];
		mysqli_query($db, "DELETE FROM inquires WHERE id=$id");
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('You Have Succesfully Delete Inquery');
			window.location.href='inquery_list.php';
			</script>");
	}
	// rating functions
	if (isset($_POST['rating'])) {
		$cus_name = $_POST['cus_name'];
		$dri_name = $_POST['dri_name'];
		$dri_id = $_POST['dri_id'];
        $rating_value = $_POST['rating_value'];
        $comment = $_POST['comment'];

		mysqli_query($db, "INSERT INTO rating (cus_name, dri_name,dri_id,rating,comment)
         VALUES ('$cus_name', '$dri_name','$dri_id','$rating_value','$comment')"); 
         echo ("<script LANGUAGE='JavaScript'>
		 window.alert('Your rating has been recorded');
		 window.location.href='index.php';
		 </script>");
	}
	// feedback functions
	if (isset($_POST['feedback'])) {
		$experience = $_POST['experience'];
		$name = $_POST['name'];
		$email = $_POST['email'];
        $age = $_POST['age'];
        $message = $_POST['message'];

		mysqli_query($db, "INSERT INTO feedback (experience, name,email,age,message)
         VALUES ('$experience', '$name','$email','$age','$message')"); 
         echo ("<script LANGUAGE='JavaScript'>
		 window.alert('Your feedback has been recorded');
		 window.location.href='index.php';
		 </script>");
	}
?>