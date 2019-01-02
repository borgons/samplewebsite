<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <title>Welcome to My Sample Page</title>
<?php
	include_once 'includes/connection.php';
// SEARCH DATA

	$stdFirstName = "";
	$stdLastName = "";
	$stdGrade = "";
	$stdSection = "";
	$stdPassword = "";

	if(isset($_POST['btnConfirm'])){
		$stdIDno = $_POST['txtStdIDs'];
		$searchedQuery = "SELECT stdFirst,stdLast,stdGrade,stdSection,stdPassword FROM tblstudents WHERE stdID = $stdIDno";
		$result = mysqli_query ($conn,$searchedQuery);

		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_array($result)){
				$stdFirstName = $row['stdFirst'];
				$stdLastName = $row['stdLast'];
				$stdGrade = $row['stdGrade'];
				$stdSection = $row['stdSection'];
				$stdPassword = $row['stdPassword'];
			}
		}	else{
				echo "<script>alert('ID not found')</script>";
					$stdIDno = "";
					$stdFirstName = "";
					$stdLastName = "";
					$stdGrade = "";
					$stdSection = "";
					$stdPassword = "";
			}

	}

//EDIT TADATA

if(isset($_POST['btnChange'])){

	$stdIDno = $_POST['txtStdIDs'];
	$stdFirstName = $_POST['txtStdFirsts'];
	$stdLastName = $_POST['txtStdLasts'];
	$stdGrade = $_POST['txtStdGrades'];
	$stdSection = $_POST['txtStdSections'];
	$stdPassword = md5($_POST['txtStdPasss']);

	$updateQuery = "UPDATE tblstudents SET  stdFirst = '".$stdFirstName."', stdLast = '".$stdLastName."',stdGrade = '".$stdGrade."' ,stdSection = '".$stdSection."',stdPassword = '".$stdPassword."' WHERE stdID = $stdIDno";

	$result = mysqli_query($conn, $updateQuery);

	if($result){
		echo "<script>alert('Congratulatons | Your account has been changed')</script>";
		header("Refresh:0;url=login.php");

	}else {
		echo "<script>alert('Data Not Updated')</script>";


	}
}


?>

<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel ="stylesheet" href="css/message.css">




  <style>
	/*input text*/
	input[type=text] {
	width: 50%;
	padding: 10px 20px;
	margin:0;
	box-sizing: border-box;
	}
			#stdID{
			margin-left:13px;
			}

			#stdFirst{
			margin-left:20px;
			}

			#stdLast{
			margin-left:20px;
			}
			#stdGrade{
			margin-left:60px;
			}

			#stdSection{
			margin-left:49px;
			}
#stdPass{
	margin-left:100px;
}

#stdConPass{
	margin-left:25px;
}

	/*input password*/
	input[type=password] {
	width: 40%;
	padding: 12px 20px;
	margin: 0;
	box-sizing: border-box;
	}


	label{
	font-family:Arial, Sans-serif;
	font-size:20px;
	padding-left:70px;

	}
	.buttonConfirm {
	background-color: #04265b;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin-left:150px;
	cursor: pointer;
	bottom:-15px;
	position:absolute;

	}
	.buttonConfirm:hover{
	background-color: #8fbafc;
	color:#000;
	}

	.buttonChange{
	background-color: #04265b;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin-left:300px;
	cursor: pointer;
	bottom:-15px;
	position:absolute;

	}
	.buttonChange:hover{
	background-color: #8fbafc;
	color:#000;
	}







	a{
	text-decoration:none;
	font-size:15px;
	padding-left:100px;

	}

	a:hover{
	text-decoration:underline;
	color:red;
	}

#mainRegister{
	height:85px;
	width:500px;
	background-color:#093172;
	margin:auto;
	margin-top:30;



}

.mainLogRegister{
	font-family:Arial;
	font-size:25px;
	color:#fff;
	text-align:center;
	padding:20px;
	line-height:43px;
}
</style>



  </head>
      <body>
         <div id ="container">
			<div id = "mainRegister">
						<div class="mainlogRegister">Please recover your account!</div>
			</div>
               <div id ="register">
                  <form name = "myForm"  action="recovery.php" method="POST">
                    <label for="stdIDno">Student ID#:</label><input type="text" id="stdID" name="txtStdIDs" placeholder="" value="<?php echo $stdIDno; ?>"><br><br>
					<label for="stdFirst">First Name:</label><input type="text" id="stdFirst" name="txtStdFirsts" placeholder="" value="<?php echo $stdFirstName;?>"><br><br>
					<label for="stdLast">Last Name:</label><input type="text" id="stdLast" name="txtStdLasts" placeholder="" value="<?php echo $stdLastName?>"><br><br>
					<label for="stdGrade">Grade:</label><input type="text" id="stdGrade" name="txtStdGrades" placeholder="" value="<?php echo $stdGrade?>"><br><br>
					<label for="stdSection">Section:</label><input type="text" id="stdSection" name="txtStdSections" placeholder="" value="<?php echo $stdSection?>"><br><br>
					<hr size="5px"><br>
					<label for="stdPass">Password:</label><input type="password" id="stdPass" name="txtStdPasss" placeholder="" value="<?php echo $stdPassword?>"><br><br>
					<label for="stdConPass">Confirm Password:</label><input type="password" id="stdConPass" name="txtStdConPasss" placeholder=""><br><br>
					<!-- <input type="submit" name="btnConfirm" class="buttonConfirm" value="Confirm" onclick="myRecovery()" > -->
					 <input type="submit" name="btnChange" class="buttonChange" value="Change Account" onclick="myValidate()" >
             </form>
               </div>
         </div>









      </body>

</script>
</html>
