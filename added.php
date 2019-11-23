<?php
$servername = "localhost";
$username = "root";
//print_r($_POST);
// Create connectionfoodily
$conn = new mysqli($servername, $username,"","foodily");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
 // Fetching variables of the form which travels in URL

$customer_name = $_POST['n'];
$customer_contact = $_POST['cnic'];
$customer_passwd = $_POST['contact'];

//Insert Query of SQL
$query = mysqli_query($conn,"insert into delivery_boy(deliveryboy_name,deliveryboy_id,deliveryboy_contact) values ('$customer_name' ,'$customer_contact','$customer_passwd')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";

mysqli_close($conn); // Closing Connection with Server

?>