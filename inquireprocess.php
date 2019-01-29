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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <link rel="stylesheet" href="css/member.css">
    <title>Car Rental</title>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
<?php
if(isset($_POST['name'], $_POST['phone'],$_POST['email'], $_POST['product'], $_POST['licence'],$_POST['city'])) {
    //make the database connection
  $conn  = db_connect();
    	$name = $conn -> real_escape_string($_POST['name']);
		$phone = $conn -> real_escape_string($_POST['phone']);
    	$email = $conn -> real_escape_string($_POST['email']);
		$product = $conn -> real_escape_string($_POST['product']);
    	$licence = $conn -> real_escape_string($_POST['licence']);
		$city = $conn -> real_escape_string($_POST['city']);
    //create an insert query
    $sql = "insert into enquire (name, phone,email,product,licence, city)  VALUES ('$name', '$phone', '$email', '$product', '$licence','$city')";
    //execute the query
    if($conn -> query($sql))
    {
		echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
        echo "<h1>Thank you</h1>";
        echo "<p>Hi <b>$name</b></p>";
        echo "<p><a href=\"enquire.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">One of Our representative will contact you soon.</a></p>";
        echo "</div>";
        echo "</div>";
    }
    $conn -> close();
}
else {
	
	
	echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
        echo "<h1>Thank you</h1>";
        echo $conn->error;
        echo "</div>";
        echo "</div>";
	
    die("Input error");
}
?>
<?php include("include/footer.inc") ?>
</body>
</html>




