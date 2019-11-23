<!DOCTYPE html>
<html lang="en" >
<?php include('header.php') ?>
<style>

h1.f
{
	background: maroon;
	color: white; 
}
li.a
{
	
	font-size: 25px;
	color: black;
}
a.e {
  text-decoration: none;
  color: blue;
  
}
a:hover {
  color: red;
}
</style>
<?php
$servername = "localhost";
$username = "root";

// Create connectionfoodily
$conn = new mysqli($servername, $username,"","foodily");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 // Fetching variables of the form which travels in URL
$name = $_POST['na'];
$passwd = $_POST['pa'];
 $sql = "SELECT admin_name, admin_id FROM admin WHERE admin_name='".$name."'";
   $retval = mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
  $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
  if ($row['admin_id']===NULL)
  {
  	echo "username or password is incorrect";
  }
  else 
  {
	$_SESSION['login']['loggedin'] = true;
	$_SESSION['login']['user'] = $name;
	$_SESSION['login']['type'] = 'admin';
  	echo " you are logged in as $name";
  } 
  <body>
	<h1 class="f"> 
		Select an action:
	</h1>
	<ol>
		<li class="a"><a class="e" href="adddeliveyboy.php" > Add delivery boy</a>
		</li>
		<li class="a"><a class="e" href="db.php"> Delivery Boy Details</a></li>
		<li class="a"><a class="e" href="add.php"> Add restaurant</a></li>
		<li class="a"><a  class="e" href="addedI.php">Add Items</a></li>
		<li class="a"><a  class="e" href="order.php">Order Details</a></li>
 	</ol>
	</body>';
  }
  mysqli_close($conn);
  ?>


</html>