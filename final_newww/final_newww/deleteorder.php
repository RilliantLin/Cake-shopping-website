<!doctype html>
<html>
<head>

<title>Piece of Cake</title>
<style type="text/css">
table {
 border-collapse: collapse;
 font-size:20px;
}
div.form {
	text-align:center;
}
.button1
{
	padding: 1px 75px;
}
.button2
{
	padding: 1px 70px;
}
</style>
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> 
</script>
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
<br><br><br><br>
<hr>
<br>
<?php
$conn=mysqli_connect("localhost","root","","info");
if($conn->connect_error)
{
	echo "Unable to connect";
	exit;
}
$query3="DELETE FROM orders WHERE orderid='145777'";//".$_POST['orderid']."'";
$result = mysqli_query($conn,$query3);

if(! $result )
{
    die('delete unsuccesfully');
}
echo "<table align='center' class='table'>";
echo "<tr>";
echo "<td style='color:#82817f;font-family:sans-serif;font-size:18px;'>";
echo 'Your record is deleted succesfully!';
echo "</td>";
echo "</tr>";
echo "</table>";
mysqli_close($conn);
?>
<br>
<div class="form">
<form action="index.php" method="post" >
<input type="submit" value="Make a new Order" class ="button1">
</form>
<p>
<form action="index.php" method="post" >
<input type="submit" value="Back to Home page" class="button2">
</form>
</p>
</div>

<br><br><br>
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