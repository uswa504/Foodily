<?php include 'header.php';?>
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
$rn=$_POST['name'];

  $sql = "SELECT restaurant_id FROM restaurant WHERE restaurant_name='".$rn."'";
   $retval = mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
  $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
     $id= $row['restaurant_id'];
 
$item_name = $_POST['n'];
$item_price = $_POST['p'];
$item_type= $_POST['t'];
$item_id = $id;

//Insert Query of SQL
$query = mysqli_query($conn,"insert into items(items_name,items_price,items_type,restaurant_id) values ('$item_name','$item_price','$item_type','$item_id')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";

mysqli_close($conn); // Closing Connection with Server

?>