<html>
  <head>
  <title>Welcome to My Sample Page</title>
  <link rel="stylesheet" href="css/main.css" type="text/css">
<link rel ="stylesheet" href="css/message.css">
<script type="text/javascript" src="js/message.js"></script>



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
	.button {
	background-color: #04265b;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin-left:350px;
	cursor: pointer;
	bottom:-15px;
	position:absolute;

	}
	.button:hover{
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
						<div class="mainlogRegister">Please register your account!</div>
			</div>
               <div id ="register">
                  <form name = "myForm" onsubmit="return validateform()" action= "insert.php" method="POST">
                        <label for="stdIDno">Student ID#:</label><input type="text" id="stdID" name="txtStdIDs" placeholder="Type your Student ID Number"><br><br>
						<label for="stdFirst">First Name:</label><input type="text" id="stdFirst" name="txtStdFirsts" placeholder="Type your First Name"><br><br>
						<label for="stdLast">Last Name:</label><input type="text" id="stdLast" name="txtStdLasts" placeholder="Type your Last Name"><br><br>
						<label for="stdGrade">Grade:</label><input type="text" id="stdGrade" name="txtStdGrades" placeholder="Type your Grade"><br><br>
						<label for="stdSection">Section:</label><input type="text" id="stdSection" name="txtStdSections" placeholder="Type your Section"><br><br>
						<hr size="5px"><br>
						<label for="stdPass">Password:</label><input type="password" id="stdPass" name="txtStdPasss" placeholder="Type your Password"><br><br>
						<label for="stdConPass">Confirm Password:</label><input type="password" id="stdConPass" name="txtStdConPasss" placeholder="Type your Confirm Password"><br><br>
						 <input type="submit" name="btnSubmit" class="button" value="Register">
                 </form>

               </div>

         </div>
      </body>




</html>
