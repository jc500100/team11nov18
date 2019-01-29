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
    <div class="container">
      <div class="row">
        	<div id="col1" class="col-sm-6">
            	<div class="bg-light mt-3 px-2">
            		
            		<img src="images/Car 1.png" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;"><br><br><br><br><br><br>
                        
                        <img src="images/Car 2.jpg" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;">
                        
                        <img src="images/Car 3.jpg" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;">
                        
                        <img src="images/Car 4.jpg" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;">
                        
                        <img src="images/Car 6.png" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;">
					
            	</div>
            </div>
            <div id="col" class="col-sm-6">
            	
            		<br><br><br>	
            		<p><strong>Tesla</strong></p>
                    <p>Product ID : J1456</p>
                     <p> Economy Class Fleet Tesla &nbsp; &nbsp;</p>         
                     <p>Sedan &nbsp 4 seat &nbsp A/C &nbsp; Auto &nbsp; $180</p>
                     <form>
					<a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
</form><br><br>
                     
						
					
                     <p><strong>Mercedes</strong></p>
                     <p>Product ID : J3556</p>
                     <p> Economy Class Fleet Benz </p>
                     <p>Sedan &nbsp 4 seat &nbsp A/C &nbsp; Auto &nbsp; $180</p>
                     <form><a href="Enquire.php"></a>
					<a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
</form><br><br>
                   
            	
                     <p><strong>Audi</strong></p>
                     <p>Product ID : J1895</p>
                     <p> Economy Class Fleet Audi </p>
                     <p>SUV &nbsp 4 seat &nbsp A/C &nbsp; Auto &nbsp; $180</p>
                     <form>
					<a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
</form><br><br><br><br>
                     
                   
					<p><strong>Range Rover</strong></p>
                    <p>Product ID : J5455</p>
                     <p> Economy Class Fleet Rover </p>
                     <p>SUV &nbsp 4 seat &nbsp A/C &nbsp; Auto &nbsp; $180</p>
                     <form>
					<a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
</form><br><br><br><br>
                     <br><br><br>
                     
                     <p><strong>Hyundai Clark</strong></p>
                     <p>Product ID : J3557</p>
                     <p> Economy Class Fleet Hyundai </p>
                     <p>Sedan &nbsp 4 seat &nbsp A/C &nbsp; Auto &nbsp; $180</p>
                     <form>
					<a href="enquire.php"><input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 		font-weight: bold; background: #008CBA; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Book Now"></a>
</form>
                     <br><br><br>
            	</div>
            </div>   	
	</div>    
<?php include("include/footer.inc") ?> 
</body>
</html>