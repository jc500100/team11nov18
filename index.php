<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    
    <title>Car Rental</title>
</head>

<body >		
	<div>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>   
    <div class="container"><br>
        <div class="slideshow-container">        
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/Red-Frari.jpg" style="width:100%">
          <div class="text"></div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/White-Car.jpg" style="width:100%">
          <div class="text"></div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/BMW.jpg" style="width:100%">
          <div class="text"></div>
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
		<script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
      <h1 class="text-center">&bullet; EXCLUSIVE OFFERS &bullet;</h1>  
      	
     <div class="row">
        	<div id="col1" class="col-sm-4">
     			<a href="enquire.php"><img src="images/P1.jpg" width="500" height="500" 
						style="max-width: 100%; height: auto; float: right; padding: 5px;margin-bottom:10px"></a>
			</div>
            <div id="col1" class="col-sm-4">
     			<a href="enquire.php"><img src="images/P2.jpg" width="500" height="500" 
						style="max-width: 100%; height: auto; float: right; padding: 5px;margin-bottom:10px"></a>
			</div>
            <div id="col1" class="col-sm-4">
     			<a href="enquire.php"><img src="images/P3.jpg" width="500" height="500" 
						style="max-width: 100%; height: auto; float: right; padding: 5px;margin-bottom:10px"></a>
			</div>
            <div id="col1" class="col-sm-4">
     			<a href="enquire.php"><img src="images/P4.jpg" width="500" height="500" 
						style="max-width: 100%; height: auto; float: right; padding: 5px;margin-bottom:0px"></a>
			</div>
            <div id="col1" class="col-sm-4">
     			<a href="enquire.php"><img src="images/P5.jpg" width="500" height="500" 
						style="max-width: 100%; height: auto; float: right; padding: 5px;margin-bottom:0px"></a>
			</div>
            <div id="col1" class="col-sm-4">
     			<a href="enquire.php"><img src="images/P6.jpg" width="500" height="500" 
						style="max-width: 100%; height: auto; float: right; padding: 5px; margin-bottom:0px;"></a>
			</div>
    </div>
	</div>
    <?php include("include/footer.inc") ?>
</body>
</html>