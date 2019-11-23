<!-- Created by Uzair Ahmad with its team on 30/09/2018 -->
<!doctype html>
<html lang="en">
<head>
	<!-- *========= REQUIRED META TAGS ==========* -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- *========== BOOTSTRAP CSS ==========* -->
	<link rel="stylesheet" href="assets/CSS/bootstrap.css">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- *========== CSS STYLESHEET ==========* -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/style.css">

	<script type="text/javascript" src="assets/js/function.js"></script>
	
	<script src="assets/jQuery/ajax_jquery.min.js"></script>

	<script src="assets/js/bootstrap.js"></script>

	<script src="assets/jQuery/jquery-3.3.1.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Kalam:400,700" rel="stylesheet">

	<title>Foodily EverAfter</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div><img src="logo1.png" alt="logo" width="100px" height="100px"></img></div>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right nav-menu">
					<li class="navitems"><a href="index.php">Home</a></li>
					<li class="dropdown navitems">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adminL.php">Admin</a></li>
							<li><a href="boyL.php">Delivery Boy</a></li>
							<li><a href="cust.php">Customer</a></li>
						</ul>
					</li>
					<li class="dropdown navitems">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Restaurants <span class="caret"></span></a>
						<ul class="dropdown-menu">


						<?php
						$servername = "localhost";
						$username = "root"; 
						$conn = new mysqli($servername, $username,"","foodily");

						if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
						}	 

						$sqlget="Select * from restaurant";
						$sqldata=mysqli_query($conn,$sqlget);

  						while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  						{
  							$rest_id=$row['restaurant_id'];
							echo "<li><a href='menuR.php?rid=$rest_id'?>";
							echo $row['restaurant_name'];
							echo "</a></li>";
						}
						?>
						</ul>
					</li>
					<li class="navitems"><a href="about.php">About</a></li>
					<li class="navitems"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>