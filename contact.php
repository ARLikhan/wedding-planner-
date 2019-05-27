
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "weeding";


$connection = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['contact'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sms = $_POST['sms'];
	
	$insert = mysqli_query($connection,"INSERT INTO contact (name,email,sms) VALUES('$name','$email','$sms')");
	
	
}






?>


<html>



   <head>
     <title> Contact Information::: </title>
	 
   </head>
   <body>
    <img src="2.jpg" width="500" height="500">
    <p>
	
	
	<h3>
	Thank you for choosing as us your weeding Event and planner.
	</h3>
	</p>
	<p>
	 <h1> Mobile:</h1> 01986540596; 01834980154
	</P>
	<p>
	<h1> Email</h1> xenoca365@gmail.com
	</p>
	<p>
	<h1>Address<h1> 
	<h3>House no :06, Road no. 11, Dhanmondi.</h3>
	</p>
	
	<div class="form-area">
			<div class="container">
			
				<h2>Feedback </h2>
			
				<form action="<?php echo $_SERVER['PHP_SELF'];   ?>" method="POST">
				
					<input type="text" name="name" placeholder="Your Name"/>
					<input type="email" name="email" placeholder="Your Email" />
					<label>Your Thoughts: <label> <br><br>
					<textarea name="sms" rows="20" cols="50"> </textarea>
					<input type="submit" name="contact" value="Send" />
				
				</form>
			</div>
		
		</div>
    
   </body>








</html>