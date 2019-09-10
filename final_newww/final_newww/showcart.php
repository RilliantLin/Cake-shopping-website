<!DOCTYPE html>

<html>
<head>
<title>Cart</title>

<style type="text/css">
table {
 border-collapse: collapse;
}
div.form {
	text-align:center;
}
.button1
{
	padding: 1px 56px;
}
.button2
{
	padding: 1px 50px;
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
<br><br><br><br><br>
<hr>
<br>
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
		echo "<table border='1' cellpadding='15' width='35%' align='center' class='table'>";
        echo "<tr>";
		
		echo "<td>";
		echo " &emsp;Name:&emsp;&emsp;&emsp;".$row["customername"]."<br>";
		echo "</td>";
		echo "</tr>";
		echo "<td>";
		echo "&emsp;Order:&emsp;&emsp;&emsp;".$row["cake"]."<br>";
		echo "</td>";
		echo "</tr>";
		echo "<td>";
		echo " &emsp;Total price:&emsp;".$row["price"]*$row["quantity"]."<br>";
		echo "</td>";
		echo "</tr>";
		
		echo "</tr>";
		echo "</table>";
	}
}
	$result->free();
	$conn->close();


?>

<br><br>
<div class="form">
<form action="checkout.php" method="post">
	<input type="submit" value="check out" class="button1" >
	</form>
<p>
<form action="deleteorder.php" method="post">
	<input type="submit" value="delete order" class="button2">
	</form>
</p>
	</div>
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