
<?php include('header.php') ?>
<style>
h3.f
{
	background: maroon;
	color: white; 
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
$customer_name = $_POST['name'];
$customer_contact = $_POST['email'];
$customer_passwd = $_POST['password'];

//Insert Query of SQL
$query = mysqli_query($conn,"insert into customer(customer_name,customer_contact,customer_passwd) values ('$customer_name' ,'$customer_contact','$customer_passwd')");
echo '<h3 class="f">You are logged in</h3>';

mysqli_close($conn); // Closing Connection with Server

?>
<body class="page_background">
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7 col-lg-7 container_box image_block" >
				<div>
					<img class="mySlides img-fluid" src="Food5.jpg" width="100%" height="100%">
  					<img class="mySlides img-fluid" src="Food2.jpg" width="100%" height="100%">
  					<img class="mySlides img-fluid" src="Food3.jpg" width="100%" height="100%">
  					<img class="mySlides img-fluid" src="Food4.jpg" width="100%" height="100%">
				</div>

			</div>
			<div class="col-md-5 col-sm-5 col-lg-5 container_box image_bg_block">
				<p class="container_box sliding_text" style="font-size: 36px">First Time in PUCIT!</p>
				<p class="container_box sliding_text" style="font-size: 36px">About us</p>
				<p class="sliding_text" style="font-size: 24px">For us, It's not just about bringing you delicious food from your favorite restaurants. It's about making a connection, which is why we sit down with the chefs, dreaming up menus that will arrive fresh</p>
			</div>
		</div>
	</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
