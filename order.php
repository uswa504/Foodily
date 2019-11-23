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

#deliveryboy tr:nth-child(even){background-color: #f2f2f2;}

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
<?php include 'header.php';?>
<body  class="page_background">

<center><h1> Order </h1></center>
 

<?php
if(isset($_SESSION['login'])){
	if($_SESSION['login']['type'] == 'delivery_boy'){
$servername = "localhost";
$username = "root";
// Create connectionfoodily
$conn = new mysqli($servername, $username,"","foodily");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqlget="Select o.order_id,items_name,restaurant_name,customer_name,customer_contact,deliveryboy_name from orders o,customer c, placement p,items i,restaurant r,delivery_boy d where o.order_id=p.order_id and o.customer_id=c.customer_id and p.item_id=i.items_id and o.deliveryboy_id=d.deliveryboy_id";
$sqldata=mysqli_query($conn,$sqlget);


echo"<table id='deliveryboy'>";
echo"<tr>
    <th>Order Id </th>
    <th>Items</th>
    <th>Restuarant</th>
  <th>Customer Name</th>
  <th>Contact</th>
  <th>Delivery Boy Name</th>
  </tr>
  ";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo "<tr><td>";
    echo $row['order_id'];
    echo "</td><td>";
    echo $row['Items_name'];
    echo "</td><td>";
    echo $row['Restaurant_name'];
    echo "</td><td>";
    echo $row['Customer_name'];
    echo "</td><td>";
    echo $row['customer_contact'];
    echo "</td><td>";
    echo $row['deliveryboy_contact'];
    echo "</td><td><ul><li><a style='width:50%'' href='#' class='pick_order_btn'> Pick Order </a></li></ul></td></tr>";
  }
echo "</table>";
	}
} else {
	echo "NOT LOGGED IN";
}
?>
</body>
</html>