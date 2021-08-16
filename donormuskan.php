
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content ="width = device-width,initial-scale = 1.0">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" 
		integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" 
		crossorigin="anonymous" />


	</head>
	<body>
	
	
	<div class="container">
		<div class="header1">
		<h2>DONOR REGISTERATION</h2>
		</div>
		<form class="form" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
		<div class="form-control">
		<label>First Name</label>
		<input type="text" name="f_name" id="fname" placeholder="Enter your fullname " autocomplete="off">
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<label>Last Name</label>
		<input type="text" name="l_name" id="lname" placeholder="Enter your fullname " autocomplete="off">
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control">
		<label>Email</label>
		<input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off">
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control">
		<label>Phone Number</label>
		<input type="number" name="phone" id="phone" placeholder="Enter your phone number" autocomplete="off">
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		<div class="form-control" >
		<label>Address</label>
		<input type="text" name="address" id="address" placeholder="Enter your address"  autocomplete="off">
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		
		
		<div class="form-control">
		<label>Age</label>
		<input type="number" name="age" id="age" placeholder="Enter your age" autocomplete="off">
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
		<input type="text" name="password" id="psw" placeholder="Enter password" autocomplete="off">
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		<div class="form-control">
		<label>Confirm Password</label>
		<input type="text" name="cpassword" id="cpsw" placeholder="Please conform your password" autocomplete="off">
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error Msg</small>
		</div>
		<input type="submit" value="Submit" class="btn"  name="submit">
		</form>
		
	</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		const form = document.getElementById('form');
		const f_name = document.getElementById('f_name');
		const l_name = document.getElementById('l_name');
		const psw = document.getElementById('psw');
		const cpsw = document.getElementById('cpsw');
		const address = document.getElementById('address');
		const email= document.getElementById('email');
		const phone = document.getElementById('phone');
		const age = document.getElementById('age');
		
		
		//add event
		form.addEventListener ('submit', (event) => {
		validate();
		})
		

		const pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;	
		
		const isEmail =(emailVal) => {
		var atSymbol = emailVal.indexOf("@");
		if(atSymbol < 1) return false;
		var dot = emailVal.lastIndexOf('.');
		if(dot<= atSymbol +2) return false;
		if(dot == emailVal.length -1) return false;
		return true;
		}
		
		const validate =()=> {
		const f_nameVal = f_name.value.trim();
		const l_nameVal = l_name.value.trim();
		const addressVal =address.value.trim();
		const emailVal= email.value.trim();
		const phoneVal= phone.value.trim();
		const ageVal= age.value.trim();
		const pswVal = psw.value.trim();
		const cpswVal = cpsw.value.trim();
		
		if(f_nameVal ===""){
		setErrorMsg(f_name,'name cannot be blank');
		}else if(f_nameVal.length <= 2){
		setErrorMsg(f_name,'name min 3 char');
		}else{
		setSuccessMsg(f_name);
		}
		
		if(addressVal ===""){
		setErrorMsg(address,'address cannot be blank');
		}else{
		setSuccessMsg(address);
		}
		
		
		if(emailVal === ""){
		setErrorMsg(email,'email cannot be blank');
		}else if (!isEmail(emailVal)){
		setErrorMsg(email,'Not a valid email');
		}else {
		setSuccessMsg(email);
		}
		
		if(phoneVal === ""){
		setErrorMsg(phone,'phone cannot be blank');
		}else if (phoneVal.length != 10){
		setErrorMsg(phone,'Not a valid phone number');
		}else {
		setSuccessMsg(phone);
		}
		
		if(ageVal === ""){
		setErrorMsg(age,'age cannot be blank');
		}else if (ageVal <= 17 ){
		setErrorMsg(age,'age should be above 17 ');
		}else {
		setSuccessMsg(age);
		}
		
		
		if(pswVal === ""){
		setErrorMsg(psw,'password cannot be blank');
		}
		else if(pswVal.length != 8){
		setErrorMsg(psw,' password length should be 8');  }
		else if (!pwd_expression.test(pswVal)){
		setErrorMsg(psw,'Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}else {
		setSuccessMsg(psw);
		}
		
		if(cpswVal === ""){
		setErrorMsg(cpsw,'password cannot be blank');
		}
		else if(cpswVal.length != 8){
		setErrorMsg(cpsw,' password length should be 8');  
		}else if( cpswVal != pswVal){
		setErrorMsg(cpsw,' password not matching');  
		}
		else {
		setSuccessMsg(cpsw);
		}
		}
		
		function setErrorMsg(input , errormsgs){
		const formControl = input.parentElement;
		const small= formControl.querySelector('small');
		formControl.className= "form-control error";
		small.innerText = errormsgs;
		}
		
		function setSuccessMsg(input){
		const formControl = input.parentElement;
		formControl.className= "form-control success";
		}
		
		
	</script>
	</body>
</html>
