<?php
	session_start();
	if(isset($_SESSION['txtIDno'])){
		session_destroy();
		echo "<script>alert('You are now Logging-Out. Thank you for visiting....')</script>";
		header("Refresh:1;url=login.php");	
	}else{
		echo "<script>You are now Logging-Out. Thank you for visiting...</script>";
		header("Refresh:2;url=login.php");


	}

?>
