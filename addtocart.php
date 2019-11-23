<?php
	session_start();
	$id = $_GET['id'];
	if(isset($_SESSION['cart'])){
		array_push($_SESSION['cart'], $id);
	} else {
		$_SESSION['cart'] = [];
	}
if(isset($_SESSION['login'])){
	if($_SESSION['login']['type'] == 'customer'){
	
	}
} else {
	echo "NOT LOGGED IN";
}
?>
