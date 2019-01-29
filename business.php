<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Our Fleet</title>
</head>

<body >		
	<div>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>   
    <div class="container"><br>
      <h1 class="text-center">&bullet; Business Class &bullet;</h1>   
      <br><br>      	
     <div class="row">
        	<div id="col1" class="col-sm-4">

			  <div class="card">
			  <img src="images/usmaan/b1.jpg" style="width:100%">
			  <h1>BMW 5 Series</h1>
			  <p class="price">A$60/Day</p>
			  <p>5 Door &nbsp;  4 seats  
			  <p>A/C    &nbsp;	Automatic</p>
			  <p>Dual Air Bags</p>
              <a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
			</div>

			</div>
            <div id="col1" class="col-sm-4">
     			

			  <div class="card">
			  <img src="images/Usmaan/b2.jpg"  style="width:100%">
			  <h1>Mercedes C-Class</h1>
			  <p class="price">A$90/Day</p>
			  <p>5 Door &nbsp;  4 seats  
			  <p>A/C    &nbsp;	Automatic</p>
			  <p>Dual Air Bags</p>
              <a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
			</div>

			</div>
            <div id="col1" class="col-sm-4">

			  <div class="card">
			  <img src="images/Usmaan/b3.jpg" style="width:100%">
			  <h1>Jaguar XE</h1>
			  <p class="price">A$140/Day</p>
			  <p>5 Door &nbsp;  4 seats  
			  <p>A/C    &nbsp;	Automatic</p>
			  <p>Dual Air Bags</p>
              <a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
			</div>
<br><br><br>
			</div>
            <div id="col1" class="col-sm-4">

			  <div class="card">
			  <img src="images/Usmaan/b4.jpg" style="width:100%">
			  <h1>Volvo S90</h1>
			  <p class="price">A$125/Day</p>
			  <p>5 Door &nbsp;  4 seats  
			  <p>A/C    &nbsp;	Automatic</p>
			  <p>Dual Air Bags</p>
              <a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
			</div>

			</div>
            <div id="col1" class="col-sm-4">

			  <div class="card">
			  <img src="images/Usmaan/b5.png"  style="width:100%">
			  <h1>Mercedes E-Class</h1>
			  <p class="price">A$130/Day</p>
			  <p>5 Door &nbsp;  4 seats  
			  <p>A/C    &nbsp;	Automatic</p>
			  <p>Dual Air Bags</p>
              <a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
			</div>

			</div>
            <div id="col1" class="col-sm-4">

			  <div class="card">
			  <img src="images/Usmaan/b6.jpg" style="width:100%">
			  <h1>Alfa Romeo Giulia</h1>
			  <p class="price">A$150/Day</p>
			  <p>5 Door &nbsp;  4 seats  
			  <p>A/C    &nbsp;	Automatic</p>
			  <p>Dual Air Bags</p>
              <a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
			</div>
	
			</div>
    </div>
	</div>    
<?php include("include/footer.inc") ?> 
</body>
</html>