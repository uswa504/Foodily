<?php session_start();
	
?>
<html>
<head>
<style>

#deliveryboy {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin: 0 auto;
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

a.pick_order_btn{
  text-decoration: none;
  background-color: #900000;
  display: inline-block;
  color:white;
  text-align: center;
  padding: 14px 16px;
}
.home>a{
background-color:orange;
}
a.pick_order_btn:hover{
  background-color: brown; 
  color:white;
  text-decoration: none
}

h1{
  color:maroon;
}

</style>
</head>
</html>
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
$name = $_POST['pn'];
$passwd = $_POST['pp'];
 $sql = "SELECT deliveryboy_name FROM delivery_boy WHERE deliveryboy_name='".$name."'";
   $retval = mysqli_query($conn,$sql);
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
  $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
  if ($row['deliveryboy_name']===NULL)
  {
    echo "username or password is incorrect";
  }
  else 
  {
	$_SESSION['login']['loggedin'] = true;
	$_SESSION['login']['user'] = $name;
	$_SESSION['login']['type'] = 'delivery_boy';
  	echo " you are logged in as $name";
  }
    echo
      '<body>
      <center><h1> Order Details </h1></center>
      <table id="deliveryboy">
        <tr>
          <th>Order Id </th>
          <th>Items</th>
          <th>Restuarant</th>
        <th>Customer Name</th>
        <th>Contact</th>
        <th>Confirm Order</th>
        </tr>
        <tr>
          <td>  </td>
          <td>  </td>
          <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>
        <a style="width:100%" href="" class="pick_order_btn"> Pick Order  </a>
        </td>
        </tr>
        <tr>
          <td>  </td>
          <td>  </td>
          <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>
        <a style="width:100%" href="" class="pick_order_btn"> Pick Order  </a>
        </td>
        </tr>
        <tr>
          <td>  </td>
          <td>  </td>
          <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>
        <a style="width:100%" href="" class="pick_order_btn"> Pick Order  </a>
        </td>
        </tr>
        <tr>
          <td>  </td>
          <td>  </td>
          <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>
        <a style="width:100%" href="" class="pick_order_btn"> Pick Order  </a>
        </td>
        </tr>
        <tr>
          <td>  </td>
          <td>  </td>
          <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>
        <a style="width:100%" href="" class="pick_order_btn"> Pick Order  </a>
        </td>

        </tr>
        <tr>
          <td>  </td>
          <td>  </td>
          <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>
        <a style="width:100%" href="" class="pick_order_btn"> Pick Order  </a>
        </td>
        </tr>       
      </table>
      </body>';
    }
       mysqli_close($conn); ?>
    
