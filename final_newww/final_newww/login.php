<?php 
session_start();
 ?>

<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> 
</script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script type="text/javascript" src="../js/regutils.js" ></script>
<script>
	function showTips(spanID,msg){
		var span = document.getElementById(spanID);
		span.innerHTML = msg;
	}
	function checkName(){
		var nValue = document.getElementById("name").value;
		var span = document.getElementById("span_name");
			if(nValue.length == ""){
				span.innerHTML = "<font color='red' size='2'>Please enter the name</font>";
				return false;
			}
			else{
				span.innerHTML = "";
				return true;
			}
	}
	function checkUsername(){
		var uValue = document.getElementById("username").value;
		var span = document.getElementById("span_username");
			if(uValue.length == ""){
				span.innerHTML = "<font color='red' size='2'>Please enter the username</font>";
				return false;
			}
			else if(uValue.length < 6){
				span.innerHTML = "<font color='red' size='2'>Sorry, the username is too short</font>";
				return false;
			}
			else{
				span.innerHTML = "<font color='green' size='2'>Available username</font>";
				return true;
			}
	}
	function checkPassword(){
		var uPass = document.getElementById("password").value;
		var span = document.getElementById("span_password");
			if(uPass.length == "") {
				span.innerHTML = "<font color='red' size='2'>Please enter the password</font>";
				return false;
			}
			else if(uPass.length < 6){
				span.innerHTML = "<font color='red' size='2'>Sorry, the password is too short</font>";
				return false;
			}else{
				span.innerHTML = "<font color='green' size='2'>Available password</font>";
				return true;
			}
	}
	function checkRePassword(){
		var uPass = document.getElementById("password").value;
		var uRePass = document.getElementById("repassword").value;
		var span = document.getElementById("span_repassword");
			if(uPass != uRePass){
				span.innerHTML = "<font color='red' size='2'>Inconsistent</font>";
				return false;
			}else{
				span.innerHTML = "";
				return true;
			}
	}
	function checkMail(){
		var mail = document.getElementById("email").value;
		var regexp = /\S+@\S+\.\S+/;
		var span = document.getElementById("span_email");
			if(mail.length =="") {
				span.innerHTML = "<font color='red' size='2'>Please enter the email</font>";
				return false;
			}
			else if(!mail.match(regexp)){
				span.innerHTML = "<font color='red' size='2'>Sorry, this format is not verified</font>";
				return false;
			}else{
				span.innerHTML = "<font color='green' size='2'>Available email</font>";
				return true;
			}
	}
	
	function checkForm(){
		var flag = checkName() && checkUsername() && checkPassword() && checkRePassword() && checkMail();
			return flag;
	}
	
	
	function checkLUsername(){
		var uValue = document.getElementById("LoginUsername").value;
		var span = document.getElementById("span_LoginUsername");
			if(uValue.length == ""){
				span.innerHTML = "<font color='red' size='2'>Please enter the username</font>";
				return false;
			}
			else if(uValue.length < 6){
				span.innerHTML = "<font color='red' size='2'>Sorry, the username is invalid</font>";
				return false;
			}
			else{
				span.innerHTML = "";
				return true;
			}
	}
	function checkLPassword(){
		var uPass = document.getElementById("LoginPassword").value;
		var span = document.getElementById("span_LoginPassword");
			if(uPass.length == "") {
				span.innerHTML = "<font color='red' size='2'>Please enter the password</font>";
				return false;
			}
			else if(uPass.length < 6){
				span.innerHTML = "<font color='red' size='2'>Sorry, the password is invalid</font>";
				return false;
			}else{
				span.innerHTML = "";
				return true;
			}
	}
	
	function checLogin(){
		var flag = checkUsername() && checkPassword();
			return flag;
	}
</script>

</head>
<body>
<div id="mainWrapper">
  <header> 
  
    <div> <a href="index.php"><img src="logo2.png" alt="sample logo" width="100"> </a>
    </div>
	<div id="headerLinks">
      <div style="z-index:1; position: absolute;left: 40%; top: 0px;"><h4 style="text-align: center"> Hey, here is A Piece of Cake!</h4></div>
		<a href="aboutus.html" title="About Us">About Us</a>
		<a href="ContactUs.html" title="About Us">Contact Us</a>
		<a href="register.html" title="Register/Login">Register/Login</a>
		<a href="showcart.php" title="Cart">Cart</a>
		<a href="forum.php" title="Cart">Forum</a>
	  </div>
</header>


<div class="w3-container" id="result" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:600px;text-align:justify;">
    <br>
    
    <div class="w3-row w3-center w3-card-2 w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, '2');" id="myLink">
        <div class="w3-col s6 tablink"><font size="4">Login</font></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, '1');">
        <div class="w3-col s6 tablink"><font size ="4">Sign up</font></div>
      </a>
    </div>

    <div id="1" class="w3-container menu w3-padding-48 w3-card-2">
      
	<form name = "register" action="cusinfo.php" method="GET" onsubmit="return checkForm()">
	<table width="70%" align="center"> 																	
		<tr>
			<td>Username:</td>
			<td>
			<input type="text" id="username"  name="username" onfocus="showTips('span_username','(Length can not be less than 6)')" onblur="checkUsername()" onkeyup="checkUsername()" />
			<br><font size ="2"><span id="span_username"></span></font>
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
			<input type="password" id="password" name="password" onfocus="showTips('span_password','(Length can not be less than 6)')" onblur="checkPassword()" onkeyup="checkPassword()"/>
			<br><font size ="2"><span id="span_password"></span></font>
			</td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td>
			<input type="password" id="repassword" name="repassword" onblur="checkRePassword()" onkeyup="checkRePassword()" /><span id="span_repassword"></span>
			</td>
		</tr>
		<td>Name:</td>
			<td>
			<input type="text" id="name" name="namee" onfocus="showTips('span_name','')" onblur="checkName()" onkeyup="checkName()" />
			<br><span id="span_name"></span>
			</td>
		</tr>
		<tr>
			<td>Title:</td>
			<td>
			<input type="radio" value="Mr" id="title" name="title"/> Mr
			<input type="radio" value="Mrs" id="title" name="title"/> Mrs
			<input type="radio" value="Miss" id="title" name="title"/> Miss
			<input type="radio" value="Ms" id="title" name="title"/> Ms
			</td>
		</tr>
		<tr>
			<td>Birthday:</td>
			<td>
			<input type="date" name="bday">
			</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>
			<input type="text" id="email" name="email" onfocus="showTips('span_email','(The format should be eg. xxx@xx)')" onblur="checkMail()" onkeyup="checkMail()"/>
			<br><font size ="2"><span id="span_email"></span></font>
			</td>
		</tr>
		<tr>
			<td>Telephone Number:</td>
			<td>
			<input type="text" id="tel" name="tel" />
			</td>
		</tr>
		<tr>
			<td>
			<input type="submit" value="submit" />
			</td>
		</tr>
	</table>
	</form>
    
    </div>

    <div id="2" class="w3-container menu w3-padding-48 w3-card-2">
	<form name ="login" action="cookie.php" method="GET" onsubmit="return checkLogin()">
		<table width="70%" align="center"> 
			<tr>
				<td>Username:</td>
				<td>
				<input type="text" id="LoginUsername" name="loginusername" onblur="checkLUsername()" onkeyup="checkLUsername()" />
				<br><span id="span_LoginUsername"></span>
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
				<input type="password" id="LoginPassword" name="loginPassword" onblur="checkLPassword()" onkeyup="checkLPassword()"/>
				<br><span id="span_LoginPassword"></span>
				</td>
			</tr>
						
			<tr>
				<td>
				<input type="submit" value="submit"  />
				</td>
			</tr>
		</table>
	</form>
    
    </div>  

  </div>
</div>

<script>
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

<table align="center">
	<tr>
		<td align="center">		     
		<a href="#" style="color:#BEBEBE">Contact</a>
		<a href="#" style="color:#BEBEBE">Payment Method</a>
		<a href="#" style="color:#BEBEBE">Delivery</a>
		<a href="#" style="color:#BEBEBE">Customer Service</a>
					
		<br/>
		<p style="color:#BEBEBE">Thank you for visiting Piece of Cake</p>
		</td>
	</tr>
</table>


</body>
</html>