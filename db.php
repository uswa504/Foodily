<?php 

session_start();
	
?>
<html>
<head>
<style>
#deliveryboy {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin :0 auto;
}

#deliveryboy td, #deliveryboy th {
  border: 1px solid #ddd;
  padding: 8px;
}

#deliveryboy tr:nth-child(even){background-color: beige;}

#deliveryboy tr:nth-child(odd){background-color: beige;}

#deliveryboy tr:hover {background-color: #ddd;}

#deliveryboy th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: maroon;
  color:white;
}

h1{
	color:maroon;
}

</style>
</head>
<?php
	
if(isset($_SESSION['login'])){
	if($_SESSION['login']['type'] == 'admin'){


?>
<?php include 'header.php';?>
<body class="page_background">
<center><h1> Details of Delivery Boy </h1></center>
 

<?php
$servername = "localhost";
$username = "root";
// Create connectionfoodily
$conn = new mysqli($servername, $username,"","foodily");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqlget="Select * from delivery_boy";
$sqldata=mysqli_query($conn,$sqlget);


echo"<table id='deliveryboy'>";
echo"
  <tr>
    <th>Delivery Boy Id </th>
    <th>Delivery Boy Name</th>
    <th>Delivery Boy Contact</th>
	
  </tr>
  ";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo "<tr><td>";
    echo $row['deliveryboy_id'];
    echo "</td><td>";
    echo $row['deliveryboy_name'];
    echo "</td><td>";
    echo $row['deliveryboy_contact'];
    echo "</td></tr>";
  }
echo "</table>";
?>
</body>
<?php
	}
} else {
	echo "NOT LOGGED IN";
}

?>
</html>
