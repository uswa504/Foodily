<?php 

session_start();
	
?>

<!DOCTYPE html>
<html lang="en" >
<?php include('header.php') ?>
<style>

h1
{
	background: maroon;
	color: white; 
}
li
{
	
	font-size: 25px;
	color: black;
}
a {
  text-decoration: none;
  color: blue;
  
}
a:hover {
  color: red;
}
</style>
<?php
	
if(isset($_SESSION['login'])){
	if($_SESSION['login']['type'] == 'admin'){


?>
<body  class="page_background">
	<h1> 
	   Tracking Delivery Boy
	</h1>
	<ol>
		<li> delivery boy name
		</li>
		<li>Delivery boy contact</li>
		<li>current location</a></li>
 	</ol>
	</body>
	<?php
	}
} else {
	echo "NOT LOGGED IN";
}

?>
</html>