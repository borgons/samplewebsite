

<?php
	include_once 'includes/connection.php';

session_start();

if(isset($_POST['btnLogin'])){

		$IDno = $_POST['txtIDno'];
		$passWord = md5($_POST['txtPass']);

		$query = mysqli_query($conn,"SELECT * FROM tblstudents WHERE stdID = '$IDno'");
	 	$numrows = mysqli_num_rows($query);

		if($numrows != 0){
				while($row = mysqli_fetch_assoc($query)){
					$dbFirst = $row['stdFirst'];				 	
					$dbIDno = $row['stdID'];
					$dbPassword = $row['stdPassword'];
				}

				if($IDno==$dbIDno){
					if($passWord==$dbPassword){
						echo "<script>alert('Access Granted | Welcome to www.samplewebsite.com')</script>";
						$_SESSION['txtIDno'] = $dbFirst;						
						header("Refresh:2;url=home.php");
							
			
					}else{
						echo "<script>alert('IDno or Password incorrect!!!')</script>";
						header("Refresh:0;url=login.php");

					}

				}else{
					echo "<script>alert('IDno' or Password incorrect!!!')</script>";
					header("Refresh:0;url=login.php");	
				}

		}else{
			echo "<script>alert('You are not registered yet')</script>";	
			header("Refresh:0;url=login.php");
		}


	}



/*	session_start();
	if (isset($_SESSION['txtIDno'])){
		echo "<h1>Welcome ".$_SESSION['txtIDno']."</h1>";
		echo "<a href ='product.php'>Product </a><br>";
		echo "<br><a href = 'logout.php'><input type ='button' name='btnLogOut' value='Log-Out'>";


	}else{
		if($_POST['txtIDno'] == $IDno && $_POST['txtPass'] == $passWord){
			$_SESSION['txtIDno'] = $userName;
			echo "<script>location.href ='welcome.php'</script>";		
		}else{
			echo "<script>alert('IDno or Password incorrect!!!')</script>";
			header("Refresh:0;url=login.php");

		}

	}

}*/ 
?>

