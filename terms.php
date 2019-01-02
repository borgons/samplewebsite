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
                       <li><a href="about.php">About</a></li>
                       <li><a href="gallery.php">Gallery</a></li>
                       <li><a href="blogIndex.php">Blog</a></li>
                       <li><a href="#">MapSite</a></li>   
					   <h1><a href="#"><?php  echo 'Welcome '.$_SESSION['txtIDno'];?></a></h1>	  	        
                     </ul>
                  </div> 

           <div id ="termsContent">
				<div id ="termsMaintitle">
						<div class="mainTerms">Terms and Conditions</div>
						
				</div>
				<!--Terms and COnditions-->									
					<div id ="mainTermsContent">					
						<ol>
							<div class = "TermsNum"><li>Introduction</li></div><br>
							<div class = "TermsStatement"> These Website Standard Terms And Conditions (these “Terms” or these “Website Standard Terms And Conditions”) contained herein on this webpage, shall govern your use of this website, including all pages within this website (collectively referred to herein below as this “Website”). These Terms apply in full force and effect to your use of this Website and by using this Website, you expressly accept all terms and conditions contained herein in full. You must not use this Website, if you have any objection to any of these Website Standard Terms And Conditions.
This Website is not for use by any minors (defined as those who are not at least 18 years of age), and you must not use this Website if you a minor.</div><br>
							<div class = "TermsNum"><li>Intellectual Property Rights.</li></div><br>
							<div class = "TermsStatement"> Other than content you own, which you may have opted to include on this Website, under these Terms, [COMPANY NAME] and/or its licensors own all rights to the intellectual property and material contained in this Website, and all such rights are reserved.You are granted a limited license only, subject to the restrictions provided in these Terms, for purposes of viewing the material contained on this Website,</div><br>
							<div class = "TermsNum"><li>Restriction</li></div><br>
							<div class = "TermsStatement"> Certain areas of this Website are restricted from access by you and [COMPANY NAME] may further restrict access by you to any areas of this Website, at any time, in its sole and absolute discretion.  Any user ID and password you may have for this Website are confidential and you must maintain confidentiality of such information.</div><br>
							<div class = "TermsNum"><li>Your Contennt</li></div><br>
							<div class = "TermsStatement">In these Website Standard Terms And Conditions, “Your Content” shall mean any audio, video, text, images or other material you choose to display on this Website. With respect to Your Content, by displaying it, you grant [COMPANY NAME] a non-exclusive, worldwide, irrevocable, royalty-free, sublicensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.

Your Content must be your own and must not be infringing on any third party’s rights. [COMPANY NAME] reserves the right to remove any of Your Content from this Website at any time, and for any reason, without notice..</div><br>
							<div class = "TermsNum"><li>Limitation of liability.</li></div><br>
							<div class = "TermsStatement">In no event shall [COMPANY NAME], nor any of its officers, directors and employees, be liable to you for anything arising out of or in any way connected with your use of this Website, whether such liability is under contract, tort or otherwise, and [COMPANY NAME], including its officers, directors and employees shall not be liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</div><br>
						</ol>
						</ol>
					</div>
			
				
		    </div>


		<!--Footer-->
           <div id ="footer">
				Copyright 2018. All rights reserved
				<!--link footer-->
				<a href="#"> Privacy </a>
				<a href="#"> Terms of Conditions</a>  
				
			</div>
    </div>
      </body>
</html>
