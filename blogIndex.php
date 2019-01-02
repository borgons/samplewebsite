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

	//query
	$query = 'SELECT * FROM posts ORDER BY postDate DESC';

	//Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result,  MYSQLI_ASSOC);

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

				  		<div id ="aboutContent">
									<?php foreach($posts as $post) : ?>
									<div id = "maintitle">
											<a class = "btnShowPost" href="showPost.php?postID=<?php echo $post['postID']; ?> ">Show Post</a>
										
											<span class = "postTitle"><?php echo $post['postTitle']; ?></span><br>
											<small> <?php echo $post['postWritten']; ?> </small><br><br>
											<small> <?php echo $post['postDate']; ?></small>	
									</div>								
									<?php endforeach; ?>
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
