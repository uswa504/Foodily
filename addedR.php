<?php include 'header.php';?>
<?php
$servername = "localhost";
$username = "root";
print_r($_POST);
// Create connectionfoodily
$conn = new mysqli($servername, $username,"","foodily");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
 // Fetching variables of the form which travels in URL

$customer_name = $_POST['n'];


//Insert Query of SQL
$query = mysqli_query($conn,"insert into restaurant(restaurant_name) values ('$customer_name')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";

mysqli_close($conn); // Closing Connection with Server

?>