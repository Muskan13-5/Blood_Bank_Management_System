
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content ="width = device-width,initial-scale = 1.0">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" 
		integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" 
		crossorigin="anonymous" />
		<style>
		<?php include "stylef.css"?>
		<?php include "headerfooter.css"?>
		
		</style>
	</head>
	<body>
	<?php 
	
	
    $conn=mysqli_connect("localhost", "diksha", "abcd123", "blood_db");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $blood_type=$_POST['blood_type'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword) {
    
    $query="INSERT INTO user (u_fname, u_lname, u_email, u_phone_number, u_address, u_age, u_gender, u_blood_type,
	u_password) VALUES('{$fname}', '{$lname}', '{$email}', {$phone}, '{$address}', {$age}, '{$gender}', '{$blood_type}', '{$password}')";
    $update=mysqli_query($conn, $query);
    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }

    }
    else {
        echo "Enter same password.";
    }
    

    }
	$image_url='../Images/logo3.gif';
	$user_url='../donormuskan1.php';
	$contact_url='../contact_us.html';
	$faq_url='../faq.html';
	$home_url='../home.html'
	
?>
	
	
	
<div class="h_bg">
<div class="wrap">
<div class="header">

		<div class="logo">
			
			<h1><a href="index.php"><img src="<?php echo $image_url;?>"></a></h1>
		</div>

	</div>
</div>
</div>

<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			<li><a href="<?php echo $home_url ;?>">Home</a></li>	
			<li><a href=<?php echo $user_url;?>>Registration</a></li>            
            <li><a href="camps.php">Camps</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="<?php echo $faq_url;?>">Faqs</a></li>
            <li><a href="<?php echo $contact_url; ?>">Contact Us</a></li>
           	<li><a href="aboutus.php">About</a></li>
            </ul>
	</div>

        
</div>
	
	
	
	
	<div class="container">
		<div class="header1">
		<h2>REGISTERATION</h2>
		</div>
		<form class="form" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" onsubmit="validate();return false">
		<div class="form-control">
		<label>First Name</label>
		<input type="text" name="f_name" id="f_name" placeholder="Enter your firstname " autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control">
		<label>Last Name</label>
		<input type="text" name="l_name" id="l_name" placeholder="Enter your lastname " autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control">
		<label>Email</label>
		<input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control">
		<label>Phone Number</label>
		<input type="number" name="phone" id="phone" placeholder="Enter your phone number" autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control" >
		<label>Address</label>
		<input type="text" name="address" id="address" placeholder="Enter your address"  autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		
		<div class="form-control">
		<label>Age</label>
		<input type="number" name="age" id="age" placeholder="Enter your age" autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control">
		<label> Gender</label>
		<select name = "gender"/required>
                    <option value ="male" name=>Male</option>
                    <option value =" female">Female</option>
	    <option value = "other">Other</option>
		</select>
		</div>
		<div class="form-control">
		<label>Bloood type</label>
		<select name = "blood_type"/required>
                    <option value = "B+">B+</option>
	    <option value = "B-">B-</option>
                    <option value = "A+">A+</option>
	    <option value = "A-">A-</option>
	    <option value = "O+">O+</option>
	    <option value = "O-">O-</option>
	    <option value = "AB+">AB+</option>
	    <option value = "AB-">AB-</option>
		</select>
		</div>
		
		
		
		<div class="form-control">
		<label>Password</label>
		<input type="password" name="password" id="psw" placeholder="Enter password" autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		<div class="form-control">
		<label>Confirm Password</label>
		<input type="password" name="cpassword" id="cpsw" placeholder="Please conform your password" autocomplete="off" required>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		<input type="submit" value="Submit" class="btn"  name="submit"  onclick="validate()">
		</form>
		
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
