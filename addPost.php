<?php
	session_start();
	require('includes/connection.php');

	if(isset($_SESSION['txtIDno'])){
		//echo "<h2>Welcome to Product Page </h2>";
		//echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
		header("Refresh:0;url=login.php");
	}
// Inserting of Post
if(isset($_POST['btnSubmit'])){
		// Get form data
		$title = mysqli_real_escape_string($conn, $_POST['postTitle']);
		$body = mysqli_real_escape_string($conn, $_POST['postBody']);
		$author = mysqli_real_escape_string($conn,$_POST['postAuthor']);
		$date = mysqli_real_escape_string($conn,$_POST['postDate']);

		$query = "INSERT INTO posts(postTitle, postDate,postBody, postWritten) VALUES('$title', '$date', '$body', '$author')";

		if(mysqli_query($conn, $query)){
			echo "<script>alert('Your Post has been saved')</script>";
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>
	  <head>
	  <title>Welcome to My Sample Page</title>
	  <link rel="stylesheet" href="css/main.css" type="text/css">
	  <!-- styling for posting -->
	  <link rel="stylesheet" href="css/post.css" type="text/css">
	  </head>
		  <body>
		     <div id ="container">
		              <div id ="menu">
		                 <ul>
		                   <li><a href="home.php">Go Back</a></li>
		                   <li><a href="#">Add Post</a></li>
						   <h1><a href="#"><?php  echo 'Welcome '.$_SESSION['txtIDno'];?></a></h1>
		                 </ul>
		              </div>


				  		<div id ="postContent">
								<div id = "addPostTitle"><a class = "btnAddBack" href="blogIndex.php">Back</a>
									<div class="mainaddPost">Add Post....</div>
								</div>

						<div id ="addPost">
						      <form name = "myForm" onsubmit="return validateform()" action= "addPost.php" method="POST">
						               <label>Title:</label><input type="text" id="postsTitle" name="postTitle" placeholder="Type your Student ID Number"><br><br>
									<label>Author:</label><input type="text" id="postsAuthor" name="postAuthor" placeholder="Type your First Name"><br><br>
									<label>Body:</label><textarea id="stdLast" name="postBody" placeholder="Type your body Content"></textarea><br><br>
									<label>Date:</label><input type="text" id="postsDate" name="postDate" placeholder="Type your Date when you create a Post YYYY-MM-DD"><br><br>

									 <input type="submit" name="btnSubmit" class="button" value="Add Post">
				         		 </form>

				      </div>



			</div>



			<!--Footer-->
		       <div id ="footer">
					Copyright 2018. All rights reserved
					<!--link footer-->
					<a href="#"> Privacy </a>
					<a href="terms.php"> Terms of Conditions</a>

				</div>
		    </div>
		  </body>
	</html>
