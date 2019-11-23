<?php include 'header.php';?>
<?php
session_start();
$servername = "localhost";
$username = "root";

// Create connectionfoodily
$conn = new mysqli($servername, $username,"","foodily");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 // Fetching variables of the form which travels in URL
$name = $_POST['n'];
$passwd = $_POST['p'];
 $sql = "SELECT customer_name, customer_id FROM customer WHERE customer_name='".$name."' && customer_passwd='".$passwd."'";
   $retval = mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
  $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
  if ($row['customer_id']===NULL)
  {
  	echo "username or password is incorrect";
  }
  else 
  {
	$_SESSION['login']['loggedin'] = true;
	$_SESSION['login']['user'] = $name;
	$_SESSION['login']['type'] = 'customer';
  	echo " you are logged in as $name";
  }
  mysqli_close($conn);
  ?>