<?php
	include_once("config.php");
	session_start();

	$custid = $_SESSION["custid"];
	$orderid = $_SESSION["orderid"];

	if(isset($_SESSION["orderid"])){
		$query = "DELETE FROM orderdetails WHERE custid = '$custid' AND orderid = '$orderid' AND laptopid = '$laptopid'"; //remove item from cart
		$results = mysqli_query($connection4, $query);
		if($results){
			header("Location: showcart.php");
		}
	}
?>