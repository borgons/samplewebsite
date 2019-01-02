<?php
	session_start();
	if (isset($_SESSION['txtIDno'])){
		//
	}else{
		echo "<script>alert('You must Log-In First')</script>";
	}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <title>Welcome to My Sample Page</title>
	  <link rel="stylesheet" href="css/main.css" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$(".button1").click(function(){
		    $(".content2").slideToggle();
			$(".buttonless1").show();
			$(".button1").hide();
			$("#maincontent1").animate({
				height:'500px'
			});

		});

		$(".buttonless1").click(function(){
		    $(".content2").slideToggle();
			$(".button1").show();
			$(".buttonless1").hide();
			$("#maincontent1").animate({
				height:'320px'
			});

		});

			$(".button2").click(function(){
		    $(".content4").slideToggle();
			$(".buttonless2").show();
			$(".button2").hide();
			$("#maincontent2").animate({
				height:'500px'
			});

		});

		$(".buttonless2").click(function(){
		    $(".content4").slideToggle();
			$(".button2").show();
			$(".buttonless2").hide();
			$("#maincontent2").animate({
				height:'320px'
			});

		});





	});
	</script>

  </head>

      <body>
         <div id ="container">

                  <div id ="menu">
                     <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="about.php">About</a></li>
                       <li><a href="gallery.php">Gallery</a></li>
                       <li><a href="blogIndex.php">Blog</a></li>
                       <li><a href="#">MapSite</a></li>
		       		   <h1><a href="logout.php">Log-Out</a><a href="#"><?php  echo 'Welcome '.$_SESSION['txtIDno'];?></a></h1>

                     </ul>
                 </div>

					<!--carousel-->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="images/slide3.jpg" alt="slide3" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="images/slide2.jpg" alt="slide2" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="images/slide1.jpg" alt="slide1" style="width:100%;">
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>

           <div id ="sidebar">
				<p align ="center">Calendar of Activities</p>
				<img src="images/star.png"/><span class="phrase">July 2 - Start of Classes<br></span>
				<img src="images/school.png"/><span class="phrase">July 6 - Getting know yourself<br></span>
				<img src="images/school.png"/><span class="phrase">July 7 - Orientation<br></span>
				<img src="images/school.png"/><span class="phrase">July 8 - Subject Teacher meeting<br></span>
				<img src="images/holiday.png"/><span class="phrase">July 15 - Independence Day <br></span>
				<img src="images/exam.png"/><span class="phrase">July 22 - First Prelim Examination <br></span>
				<img src="images/exam.png"/><span class="phrase">July 23 - First Prelim Examination <br></span>
				<img src="images/exam.png"/><span class="phrase">July 24 - First Prelim Examination <br></span>
			</div>
           <div id ="mainbody">
				<div id = "maintitle">
						<span class="main">Welcome to my borgstik.com</span><span class="date">June 14, 2018</span><br>
						<span class="author">By: Rowen Roel C. Borgonia</span>
				</div>
				<div id ="maincontent1">
							<span class ="content">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look</span><br><br>
							You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.<br><br>
							<span class = "content2">
								On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look<br><br>
							You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.<br>
							</span><br>
							<button class="button1">Read more</button>
							<button class="buttonless1">Read less</button>
				</div>
<!--Second Article-->
				<div id = "maintitle">
						<span class="main">Back to School</span><span class="date">June 14, 2018</span><br>
						<span class="author">By: Rowen Roel C. Borgonia</span>
				</div>

				<div id ="maincontent2">
							<span class ="content">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look</span><br><br>
							You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.<br><br>
							<span class = "content4">
								On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look<br><br>
							</span><br>
							<button class="button2">Read more</button>
							<button class="buttonless2">Read less</button>
				</div>

			</div>

           <div id ="footer">
				Copyright 2018. All rights reserved
				<!--link footer-->
				<a href="#"> Privacy </a>
				<a href="terms.php"> Terms of Conditions</a>

			</div>
        </div>
      </body>
</html>
