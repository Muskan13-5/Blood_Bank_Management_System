<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="UTF-8">
		<meta name="viewport" content ="width = device-width,initial-scale = 1.0">
		<style>
		<?php include "contact_style.css"?>
		<?php include "headerfooter.css"?>
		</style>
		<title>Contact Us</title>
	</head>
	
	
	<body>
	<?php 
    
    $conn=mysqli_connect("localhost", "diksha", "abcd123", "blood_db");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name=$_POST['name'];
    
    $email=$_POST['email'];
    
   
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];
     
    
    $query="INSERT INTO contact_us (name,email,subject,message) VALUES('{$name}',  '{$email}', '{$subject}','{$msg}')";
    $update=mysqli_query($conn, $query);
    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }

    
    else {
        echo "Successfully!";
    }
    

    }
	
	
?>
<div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo3.gif" alt=""></a></h1>
		</div>
	</div>
</div>
</div>

<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			<li><a href="home.html">Home</a></li>	
			<li><a href="<?php echo "donorrmuskan1.php"; ?>">Registration</a></li>            
            <li><a href="camps.php">Camps</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="faq.html">Faqs</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
           	<li><a href="aboutus.php">About</a></li>
            </ul>
	</div>

        
</div>

	
	
	<div class="container" id="container">
	<div class="header1">
		<h1> Get in Touch </h1>
		<h3>Want to get in touch? We would love to hear from you.</h3>
	</div>
	<div class="control">
			<div class="text-right">
			<h4> Connect with us:</h4>
			<p>For support or any questions:</p>
			<p>Email us at:
				<a href="email">support@something.com</a>
			</p>
			<p>Address:</p>
			<p>Sindhi Society, Collector colony, Chembur, Mumbai</p>
			<p>Call us:</p>
			<p>1020304050</p>
		</div>
		<form class="contact-form" id="contact-form"  action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
		<h3> Contact Us</h3>
		<p> Please fill out the quick form and we will be in touch </p>
		<label> Name</label>
		
		<input type="text" name="name" placeholder="Name" id="name" autocomplete="off" required>
		
		<label>Email</label>
		
		<input type ="email" name="email" placeholder="Your email address" id="email" autocomplete="off" required>
		<small id= "emsg"></small>
		<label> Subject</label>
		<input type="text" name="subject" placeholder="Subject \ Regarding with" id="sub" autocomplete="off" required>
		
	
		<label> Enter your message</label>
		
		<textarea id="msg" name="msg" placeholder="Enter your message" autocomplete="off" required ></textarea>
		<button  class="btn" onclick="validate()"> Submit </button>
		</form>
		</div>

	</div>
	<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>


	
	
	
	</body>
</html>
