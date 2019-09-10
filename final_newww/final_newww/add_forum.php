<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Piece of Cake</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="whole_css.css" rel="stylesheet" type="text/css">
<?php 
session_start();
if(!isset($_COOKIE['loginusername']))
{ 

	$author="Anonymous Guest";
}
else
{
	$author=$_COOKIE['loginusername'];
}
	



?>
<style type="text/css">
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


</style>
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript">
</script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript">
	var xmlHttp;
 	function myFunction() {
		
            xmlHttp = null;
			xmlHttp = new XMLHttpRequest();
            
            if (xmlHttp != null) {
				document.getElementById("forumAjax").innerHTML="123";
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", "forum_guest.php?forum_name=form.forum_name.value&forum_description=form.forum_description.value&isAnonymous=form.isAnonymous.value", true);
                xmlHttp.send(null);

            }else {
                alert( "Your browser does not support XMLHTTP.");
            }
	}
	
     function stateChange(){
        if((xmlHttp.readyState ==4)&&(xmlHttp.status == 200)){
            
            document.getElementById("forumAjax").innerHTML=xmlHttp.responseText;
           

            
        }            
    }
</script>

</head>
<body onload="myFunction()">
<div id="mainWrapper">

  <header> 
    <div> <a href="index.php"><img src="logo2.png" alt="sample logo" width="100"> </a>
    </div>
	<div id="headerLinks">
      <div style="z-index:1; position: absolute;left: 40%; top: 0px;"><h4 style="text-align: center"> Hey, here is A Piece of Cake!</h4></div>
		<a href="aboutus.html" title="About Us">About Us</a>
		<a href="ContactUs.html" title="About Us">Contact Us</a>
		<a href="login.php" title="Register/Login">Register/Login</a>
		<a href="showcart.php" title="Cart">Cart</a>
		<?php
		if(!isset($_COOKIE['loginusername']))
		{ 
		$forum="add_forum.php";
	
		}
		else if($_COOKIE['loginusername']=="Rilliant") //This is the Administrator's name.
		{
			$forum="forum_admin.php";
		
		}else{
			$forum="add_forum.php";
		}
		
		?>
		<a href=<?php echo $forum; ?> title="forum">Forum</a>
		<a href="logout.php" title="Logout">Logout</a>
	  </div>
</header>
<br><br><br>


  <h2>Share your comments below...</h2>
  <br>

<div class="container">
  <form name="form" action="save_forum.php" method="get">
  
    <div class="row">
      <div class="col-25">
        <label >Forum Name</label>
      </div>
      <div class="col-75">
        <textarea name="forum_name" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
     Anonymous?<input name="isAnonymous" type="checkbox" id="isAnonymous" value="0" />
    </div>
    <div class="row">
      <input name="Submit" type="submit"  value="add"/>
	  
    </div>

  </form>
</div>

<section class="forumIndex" id="forumAjax"></section>


  <br><br>
 <footer> 
	<table align="center">
	<tr>
		<td align="center">		     
		<a href="#" style="color:#ffffff">Contact</a>&emsp;
		<a href="#" style="color:#ffffff">Payment Method</a>&emsp;
		<a href="#" style="color:#ffffff">Delivery</a>&emsp;
		<a href="#" style="color:#ffffff">Customer Service</a>&emsp;
					
		<br/>
		<p style="color:#ffffff">Thank you for visiting Piece of Cake</p>
		</td>
	</tr>
	</table>
  </footer>
</div>

</body>
</html>