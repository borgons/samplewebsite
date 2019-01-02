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
  </head>
      <body>
         <div id ="container">
                  <div id ="menu">
                     <ul>
                       <li><a href="home.php">Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="gallery.php">Gallery</a></li>
                       <li><a href="blogIndex.php">Blog</a></li>
                       <li><a href="#">MapSite</a></li>   
					   <h1><a href="#"><?php  echo 'Welcome '.$_SESSION['txtIDno'];?></a></h1>	  	        
                     </ul>
                  </div> 

           <div id ="aboutContent">
				<div id ="Aboutmaintitle">
						<div class="mainAbout">Vision and Mission of San Isidro Parish School</div>
				</div>
				<!--Vision and Mission-->									
					<div id ="mainAboutContentVM">					
						<div class = "vision">Vision Statement</div><br>
						<div class = "visionStatement"> San Isidro Parish School is a leading educational institution in the Archdiocese of Cebu that provides integral human and Christian formation whose criteria of judgment, points of interests, hierarchy of priorities, lines of thought, sources of inspiration and models of life are animated by the gospel values and the culture of excellence.</div><br>
						<div class = "mission">Mission Statement</div><br>
						<div class = "visionStatement"> Committed to mold a new breed of citizens who are well-rounded, competent and morally upright, San Isidro Parish School oversees and sustains an educational system which prepares learners to respond to the needs and challenges of the third millennium. As an Archdiocesan Catholic School, it is determined to nurture faith in the Almighty, love for the motherland and service to the less privileged humanity within the context of preserving and enriching Filipino cultural heritage, traditions and core values amidst rapid changes and sophisticated advancements in the global society.
</div>							
					</div>
			
				<div id ="Aboutmaintitle">
						<div class="mainAbout">School Objectives</div>
				</div>
				<!--Objectives-->	
				   <div id ="mainAboutContentO">	
						<ol>
							<li><div class = "objStatement">To mold all the members of the San Isidro Parish School basic ecclesial community to follow the way of perfection and to develop their personal love for God with profound sense of service to others especially  to the less fortunate of the society; </div></li>
							<li><div class = "objStatement">To create an academic environment wherein the learners will  be equipped with gospel-oriented knowledge, values, attitudes and skills through quality but affordable Catholic Education, thus making them ready for higher and lifelong learning; </div></li>
							<li><div class = "objStatement">To promote development of logical and critical thinking of the learners and the economic and professional growth of the teaching and non-teaching staff; and </div></li>
							<li><div class = "objStatement">To implement dynamic and holistic programs that imbue the students with Catholic ideals, animating their socio-cultural, political and ecological awareness as well as their physical, psycho-emotional and spiritual development. </div></li>				
						</ol>
				</div>

		

							<div id ="Aboutmaintitle">
						<div class="mainAbout">Core Values</div>
				</div>
				<!--Objectives-->	
				   <div id ="mainAboutContentCV">	
						<ul>
						  <div class = "cvStatement"><li>Inquiring Faith</li></div>	<div class = "cvStatement"><li>Transformative Worship</li></div>
						 <div class = "cvStatement"><li>Christian Stewardship</li></div><div class = "cvStatement"><li>Social Responsibility</li></div>
						  <div class = "cvStatement"><li>Gospel Witnessing</li></div><div class = "cvStatement"><li>Empowering Work</li></div>
						</ul> 
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
