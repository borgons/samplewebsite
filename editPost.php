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
// Editing  of Post
if(isset($_POST['btnSubmit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$title = mysqli_real_escape_string($conn, $_POST['postTitle']);
		$body = mysqli_real_escape_string($conn, $_POST['postBody']);
		$author = mysqli_real_escape_string($conn,$_POST['postAuthor']);
		$date = mysqli_real_escape_string($conn,$_POST['postDate']);

		$query = "UPDATE posts SET postTitle='$title', postDate='$date',postBody='$body', postWritten='$author'
		 WHERE postID = {$update_id}" ;

		if(mysqli_query($conn, $query)){
			header("Refresh:0;url=blogIndex.php");
			echo "<script>alert('Your Post has been updated')</script>";
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}


	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['postID']);

	// Create Query
	$query = 'SELECT * FROM posts WHERE postID = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);




















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
								<div id = "addPostTitle"><a class = "btnAddBack" href="showPost.php?postID=<?php echo $post['postID']; ?>">Back</a>
									<div class="mainaddPost">Edit Post....</div>
								</div>
	
						<div id ="addPost">
						      <form name = "myForm" onsubmit="return validateform()" action= "editPost.php" method="POST">
						            <label>Title:</label><input type="text" id="postsTitle" name="postTitle" placeholder="Type your Student ID Number" value="<?php echo $post['postTitle']; ?>"><br><br>
									<label>Author:</label><input type="text" id="postsAuthor" name="postAuthor" placeholder="Type your First Name" value="<?php echo $post['postWritten']; ?>"><br><br>
									<label>Body:</label><textarea id="stdLast" name="postBody" placeholder="Type your Body Content"> <?php echo $post['postBody']; ?></textarea><br><br>
									<label>Date:</label><input type="text" id="postsDate" name="postDate" placeholder="Type your Date when you create a Post YYYY-MM-DD" value="<?php echo $post['postDate']; ?>"><br><br>
									 <input type="hidden" name="update_id" value="<?php echo $post['postID']; ?>">
									 <input type="submit" name="btnSubmit" class="button" value="Edit Post">
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
