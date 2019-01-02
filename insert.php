<?php

	include_once 'includes/connection.php';

if(isset($_POST['btnSubmit'])){

	$ID = $_POST['txtStdIDs'];
	$First = $_POST['txtStdFirsts'];
	$Last = $_POST['txtStdLasts'];
	$Grade = $_POST['txtStdGrades'];
	$Section = $_POST['txtStdSections'];
	$Pass = $_POST['txtStdPasss'];
	$passwordMd5 = md5 ($Pass);
	
	$sql = "INSERT INTO tblstudents (stdID,stdFirst,stdLast,stdGrade,stdSection,stdPassword) VALUES ('$ID','$First','$Last','$Grade','$Section','$passwordMd5')";




	mysqli_query($conn,$sql);

		header("Refresh:2;url=login.php");

}
?>
