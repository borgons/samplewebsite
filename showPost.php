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


// Check For Submit
	if(isset($_POST['btnDelete'])){
		// Get form data
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

		$query = "DELETE FROM posts WHERE postID = {$delete_id}";

		if(mysqli_query($conn, $query)){
			header("Refresh:0;url=blogIndex.php");
			echo "<script>alert('Your Post has been deleted')</script>";
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

	//Get id 
	$id = mysqli_real_escape_string($conn, $_GET['postID']);

	//query
	$query = 'SELECT * FROM posts WHERE postID = '.$id;

	//Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);

	// Free Result 
	mysqli_free_result($result);

	// Close connection
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
		                   <li><a href="addPost.php">Add Post</a></li>  
						   <h1><a href="#"><?php  echo 'Welcome '.$_SESSION['txtIDno'];?></a></h1>	  	        
		                 </ul>
		              </div> 
						
						
				  		<div id ="showContent">
								<a class = "btnBack" href="blogIndex.php">Back</a>						
								<a class = "btnEdit" href="editPost.php?postID=<?php echo $post['postID'];?>">Edit</a>						
	

								
									<div id = "maintitleP">
											<span class = "postTitle"><?php echo $post['postTitle']; ?></span><br>
											<small> <?php echo $post['postWritten']; ?> </small><br><br>
											<small> <?php echo $post['postDate']; ?></small>	
									</div>
									<div id ="maincontent1P">
									 	<span class = "postContent"><?php echo $post['postBody']; ?></span>		
									</div>	
				
							<!--Delete Post -->
									<form method ="POST" action="showPost.php">			
										<input type="hidden" name="delete_id" value="<?php echo $post['postID']; ?>">	
										<input type="submit" name="btnDelete" value="Delete" class="btnDelete">	
									</form>	
								
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
