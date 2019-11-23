<html>
<head>
<style>
#deliveryboy {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin :0 auto;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #900000;
  color: white;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #900000;
}


#deliveryboy td, #deliveryboy th {
  border: 1px solid #ddd;
  padding: 8px;
}

#deliveryboy tr:nth-child(even){background-color: burlywood;}

#deliveryboy tr:nth-child(odd){background-color: burlywood;}

#deliveryboy tr:hover {background-color: #ddd;}

#deliveryboy th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: maroon;
  color:white;
}

ul {
    list-style-type: none;
  
    overflow: hidden;
   background-color: #900000;
   color: black;
     margin: 0;
    padding: 0;
}
li{
 text-align:center;


}
li a{
	text-decoration: none;
		
	display: inline-block;
	color:white;
	text-align: center;
	padding: 14px 16px;
	
}
.home>a{
background-color:orange;
}
li a:hover{
	background-color: #900900; color:white; font-weight: bold;
}

h1{
	color:maroon;
}

</style>
</head>
<?php include 'header.php';?>
<body class="page_background">


<center><h1> Menu </h1></center>

<?php
$servername = "localhost";
$username = "root";
// Create connectionfoodily
$conn = new mysqli($servername, $username,"","foodily");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$r_id=1;
if(isset($_GET['rid'])&& ($_GET['rid']!='')){
   $r_id=$_GET['rid'];
   } else {
   echo "failed";
   }


$sqlget="Select * from  items where restaurant_id=".$r_id;
$sqldata=mysqli_query($conn,$sqlget);


echo"<table id='deliveryboy'>";
echo"
  <tr>
    <th>Item Name</th>
    <th>Item Price</th>
	<th>Confirm Item</th>
	
  </tr>
  ";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo "<tr><td>";
    echo $row['items_name'];
    echo "</td><td>";
    echo $row['items_price'];
	$item_id = $row['items_id'];
    echo "</td><td><ul><li><a style='width:50%'' href='addtocart.php?id=$item_id'> Add to Cart </a></li></ul></td></tr>";
  }
echo "</table><br><br>";
 echo "<center><button class='button' style='color:white' /><a href='cart.php'>Confirm Order</a></button></center>"
?>
</table>

</body>
</html>

