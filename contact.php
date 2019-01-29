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
    <link rel="stylesheet" type="text/css" href="style.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <title>Contact Us</title>
 </head>

<body >		
	<div>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>   
    <h1>Contact Us</h1>
    <div class="container"><br>
   <form action="contactprocess.php" method="post">

    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your last name..">

    <label for="country">Phone</label>
   <input type="text" id="phone" name="phone" placeholder="Your phone number..">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

	<div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" onClick="return validateInfo(document)" />
                    <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
                </div>
            </div>
</div>
</form>

    </div>
	</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include("include/footer.inc") ?>
</body>
</html>