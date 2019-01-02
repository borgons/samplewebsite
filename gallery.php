<?php 
	session_start();
	if(isset($_SESSION['txtIDno'])){
		//echo "<h2>Welcome to Product Page </h2>";
		//echo "<br><a href='welcome.php'><input type ='button' name='btnBack' value='Back'>";
	}else{
		echo "<script>alert('You must log-in first before proceed!!!')</script>";
		header("Refresh:0;url=login.php");
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <title>Welcome to My Sample Page</title>
  <link rel="stylesheet" href="css/main.css" type="text/css">
	<link rel="stylesheet" href="css/lightbox.min.css" type="text/css">
		<script type = "text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
  </head>
      <body>
         <div id ="container">
                  <div id ="menu">
                     <ul>
                       <li><a href="home.php">Home</a></li>
                       <li><a href="about.php">About</a></li>
                       <li><a href="#">Gallery</a></li>
                       <li><a href="blogIndex.php">Blog</a></li>
                       <li><a href="#">MapSite</a></li> 
					    <h1><a href="#"><?php  echo 'Welcome '.$_SESSION['txtIDno'];?></a></h1>	  	   	        
                     </ul>
                  </div> 
			
				<!--Gallery Content-->	
				<div id ="galleryContent">	
						<div id ="Gallerymaintitle">
							<div class="mainGallery">My Gallery</div>
						</div>
					
							<div id = "gallery">
								<a href = "images/galleryL1.jpg" data-lightbox="mygallery"><img src = "images/gallery1.jpg" height="150" width="200"></a>
								<a href = "images/galleryL2.jpg" data-lightbox="mygallery"><img src = "images/gallery2.jpg" height="150" width="200"></a>
								<a href = "images/galleryL3.jpg" data-lightbox="mygallery"><img src = "images/gallery3.jpg" height="150" width="200"></a>
								<a href = "images/galleryL4.jpg" data-lightbox="mygallery"><img src = "images/gallery4.jpg" height="150" width="200"></a>
								<a href = "images/galleryL5.jpg" data-lightbox="mygallery"><img src = "images/gallery5.jpg" height="150" width="200"></a>
								<a href = "images/galleryL6.jpg" data-lightbox="mygallery"><img src = "images/gallery6.jpg" height="150" width="200"></a>
								<a href = "images/galleryL7.jpg" data-lightbox="mygallery"><img src = "images/gallery7.jpg" height="150" width="200"></a>
								<a href = "images/galleryL8.jpg" data-lightbox="mygallery"><img src = "images/gallery8.jpg" height="150" width="200"></a>
								<a href = "images/galleryL9.jpg" data-lightbox="mygallery"><img src = "images/gallery9.jpg" height="150" width="200"></a>
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
