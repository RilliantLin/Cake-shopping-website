<!--sendemail.jsp-->

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gb2312">
<title>send Email</title>
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> 
</script>
<style>
.myForm {align:center;}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="registerlayout.css">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
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
		<a href="showcart.php" title="Cart">Cart</a>
		<a href="forum.php" title="Cart">Forum</a>
		<a href="logout.php" title="Logout">Logout</a>
	  </div>
</header>
<br><br><br>	
<h1 style="color: #666563;font-family:sans-serif;" align="center">Custmor Service</h1>
<form class="myForm" align="center" action="mailto:xueyx1619@gmail.com" method="post" enctype="text/plain">
<p style="color: #666563;font-family:sans-serif;">Please tell us your specail needs and leave any comment below.<br>
<textarea name="textarea" cols="100" rows="12">
<?php

$conn=mysqli_connect("localhost","root","","info");
if($conn->connect_error)
{
	echo "Unable to connect";
	exit;
}
$query1="Select * From orders where orderid='145777'";//".$_POST['orderid']."'";
        $result = mysqli_query($conn,$query1);

if (!$result) die("");
else
{
	$result->data_seek(0);
	while($row=$result->fetch_assoc()){
		echo "Your name is : ".$row["customername"];
		echo "            You have made order: ".$row["cake"];
		echo "             Total price is : ".$row["price"]*$row["quantity"];
	}
}
	$result->free();
	$conn->close();
	

?>
</textarea><br>
<p><input type="submit" value="Send">

<input type="button" value="Back" onclick="location.href='index.php'">

</form>
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
</body>
</html> 
