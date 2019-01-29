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
    <title>Booking</title>
 </head>

<body >		
	<div>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>  
    <div class="container">
    	<div class="row">
        	<div id="col1" class="col-sm-6">
            	<div class="bg-light mt-3 px-2" >
            		
            		<img src="images/P1.jpg" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;">
                    <img src="images/P2.jpg" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;">
                     <img src="images/P3.jpg" width="460" height="345" 
						style="width: 100%; height: auto; float: left; padding: 10px;">
				</div>
            </div>
            <div id="col2" class="col-sm-6">
            	<div class="bg-light mt-3 px-2">
            		<h3 style="margin:5px; text-align:center; font-size:32px;">Inquire About Product Availability</h3><br>
			<div id="col1" class="col-sm-6" >
			<div class="cont">
     		<form action="inquireprocess.php" method="post" style="float:right">		
              <br>
                <label for="name"> Your Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name.." size="30" maxlength="50" required /><br><br>
            
                <label for="phone">Phone No.</label>
                <input type="text" id="phone" name="phone" placeholder="Your Phone Number.." size="30" maxlength="50" required /><br><br>
                
                <label for="email">Email ID.</label>
                <input type="text" id="email" name="email" placeholder="Your Email Address.." size="30" maxlength="50" required /><br><br>
				
				<label for="product">Product ID.</label>
                <input type="text" id="product" name="product" placeholder="Your Product Id.." size="30" maxlength="50" /><br><br>
                
                <label for="licence">Licence</label><br>
                <select id="licence" name="licence">
                  <option value="Australian">Australian</option>
                  <option value="International">International</option>
                </select>
            
                <label for="city">Your City</label><br>
                <select id="city" name="city">
                  <option value="Brisbane">Brisbane</option>
                  <option value="Gold Coast">Gold Coast</option>
                  <option value="Sunshine Coast">Sunshine</option>
                </select>  <br><br>         
                <input type="submit" id="submit" value="Submit" />
              </form>
             
			</div>	
        	</div>
            	</div>
            </div>
        </div>
   </div> 
   <?php include("include/footer.inc") ?>
</body>
</html>