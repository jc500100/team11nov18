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
    <title>ABC</title>
</head>
<body onLoad="run_first()">
	<div >
	<?php include("include/banner.inc") ?>    
    <?php include("include/nav.inc") ?>    
    <div class="container">
	<form action="about_us.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: #555555 solid thick">
        <h2 style="margin:5px; text-align:center; font-size:50px;">Company Information</h2><p>
<b>We are here to deliver excellence
Our journey has started in 2005, when we see the need of convenient and reliable travel source which can be at a price of local transport but at the same time provide the benefits of own transport. We as a team have decided to create a source for the consumers where they can select any type transport service as per their needs from a small car to big van. At initial stage, we test and analyse the need of the consumers and with that understanding we help hundreds of travellers every year find great travel deals on motor rental in Australia. Below is a bit more detail about what we do and how we do it. If you like what you find, then tell your friends about Drive Now. If you think we do something well or could do something even better, we’d love to hear from you too.</b></b>
	</p>
        	<h1>Customer's Reviews</h1>
            <p><i>Please help us out with your feedbacks</i></p>
            <div class="row" >
            	<div class="col" style="width:200px">
                	<label for="name">Name</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	 <label for="comment"> Comment </label><br>
      				<textarea rows="4" cols="100" id="comment" name="comment"></textarea>
                </div>
            </div>

            <div class="row">
            	<<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                    <input type="reset" id="reset" value="Clear" />
            	
                    <?php
                    if(isset($error)) {
                        echo "<p style=\"color: red;\">$error</p>";
                        unset($error);
                    }
                    ?>
                    </div>
            </div>
        </div>
        </form>
<!-- ______________________________________________________Displaying the data from database ______________________________-->
		<?php 
		include_once('include/config.php');
            //make the database connection
            $conn  = db_connect();
          

         $find_comments= $conn -> query("SELECT * FROM comments");
          while($row = $find_comments -> fetch_assoc())
		  {
                $comment_name = $row['name'];
				$comment = $row['comment'];
            
			 	echo  $comment_name." - ".$comment."<br><p>";
            }
			
			if(isset($_GET['error']))
			{
				echo"Not Valid";
			}
		
		?>
<!-- ______________________________________________________Processing of php database ______________________________-->

<?php
include_once('include/config.php');
?>

<?php
if(isset($_POST['name'], $_POST['comment'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $comment = $conn -> real_escape_string($_POST['comment']);
    //create an insert query
    $sql = "insert into comments (name, comment)  VALUES ('$name','$comment')";
    //execute the query
    if($conn -> query($sql))
    {
		
    }
    $conn -> close();
}
else {
	echo "Comment Please";
}
?>
       </div>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>