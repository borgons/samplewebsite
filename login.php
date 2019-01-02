<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <title>Welcome to My Sample Page</title>
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <style> 


      input[type=text] {
      width: 60%;
      padding: 12px 20px;
      margin: 11px 70;
      box-sizing: border-box;
      }
      
      input[type=password] {
      width: 60%;
      padding: 12px 20px;
      margin: 11px 70;
      box-sizing: border-box;
      }
#stdID{
	margin-left:80px;
} 

#stdPass{
	margin-left:80px;
} 
      
    label{
    font-family:Arial, Sans-serif;
    font-size:20px;
	padding-left:80px;
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
    margin-left:130px;
    cursor: pointer;
}
    .button:hover{
    background-color: #8fbafc;
    color:#000;
    }
 a{
    text-decoration:none;
    font-size:15px;
    padding-left:100px;
	font-family:arial;
 
 }   
 

  a:visited{
    color:green;
 }
 
  a:hover{
    text-decoration:underline;
    color:red;
 }

#mainLog{
	height:85px;
	width:400px;
	background-color:#093172;
	margin:auto;
	margin-top:2%;



}

.mainLogTitle{
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
				<div id = "mainLog">
						<div class="mainlogTitle">Please Log-In</div>
				</div>
               <div id ="login">
                    <form action = "welcome.php" method ="POST">
                        <label for="fname">Student ID#</label>
                        <input type="text" id="stdID" name="txtIDno" placeholder="Type your Student ID number">

                        <label for="lname">Password</label>
                        <input type="password" id="stdPass" name="txtPass" placeholder="Password">
                    
                     <br><input type="submit" name="btnLogin" class="button" value="Log-In">
					</form>
                       <br><br><br>
                     <a href="register.php">Please click here to REGISTER</a>
                     <br> <br><a href="recovery.php">Forgot a password click here</a>
               </div>
                
         </div>
      </body>
</html>
