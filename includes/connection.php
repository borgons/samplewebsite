
<?php
	$dbhost = 'localhost';
	$dbusername = 'root';
	$dbpassword = 'borgstikong';
	$db = 'stdblog';

//connect to the database
	$conn = mysqli_connect("$dbhost","$dbusername","$dbpassword","$db");



	if ($conn){
		
	}else{
		echo "Not Connected";
		
	}
?>

</body>
</html>
