<?php
include('server.php'); 
$db = mysqli_connect('localhost','root','','inquires');
    
//get all the reservation
$results = mysqli_query($db, "SELECT * FROM reservation"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" Type="text/css" href="css/inquery_list.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Inqueary</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>reservation</h1>
        </div>

        <a href="index.php">
            <span class="close">+</span>
        </a>
        
        <div class="row">
                <div class="col-md-8">
                </div>
        </div>
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Nic</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- show the retrived data -->
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['mobile_number']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['nic']; ?></td>
                    </tr>
                <?php } ?>
                    <tr>
                    
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>