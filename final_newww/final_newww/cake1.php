<!doctype html>

<?php
session_start();
$noofcake=$_GET['nocake'];

$_SESSION["nocake"]=$noofcake ;
$conn = mysqli_connect("localhost","root","","info");
if($conn->connect_error){
echo"Unable to connect to database";
exit;
}
for($i=1;$i<=68;$i++){
if($_SESSION["nocake"]==$i){
$query1="select type,name,price,description from cakes where noofcake='".$i."'";
}
}
$result1 = $conn->query($query1);
$result1->data_seek(0);
while($row=$result1->fetch_assoc()){
$type=$row["type"];
$name=$row["name"];
$price=$row["price"];
$description=$row["description"];
}
$result1->free();
$conn->close();
$noofcake=$_GET['nocake'];
$_SESSION["name"]=$name;
$_SESSION["price"]=$price;

?>  



<html>
<head>
<meta charset="utf-8">
<title>Piece of Cake</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
.deco
{
	color: #666563;
	font-family:sans-serif;
	font-size: 18px;
	text-align: left;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> 
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
<br><br><br>

<iframe src="picture automatic carousel.html" align="left" frameBorder="0" width="95%" scrolling="no" height="450">
	
</iframe>

  <div id="content">
    <section class="sidebar"> 
     
      <input type="text"  id="search" value="search">
      <div id="menubar">
        <nav class="menu">
          <h2>All Cakes</h2>
          <hr>
          <ul>
            
            <li><a href="newest.php" title="Link">Newest !</a></li>
            <li><a href="cakebox.php" title="Link">Cake box</a></li>
            <li><a href="cakeroll.php" title="Link">Cakeroll</a></li>
			<li><a href="creamcake.php" title="Link">Cream cake</a></li>
			<li><a href="fondantcake.php" title="Link">Fondant cake</a></li>
			<li><a href="flowercake.php" title="Link">Wreath cake</a></li>
			<li><a href="cartoon.php" title="Link">Cartoon cake</a></li>
			<li><a href="cupcake.php" title="Link">Cupcake</a></li>
			<li><a href="doughnut.php" title="Link">Doughnut</a></li>
         
          </ul>
        </nav>
        
      </div>
    </section>
    <section class="mainContent">
      
      <img src="cakebigimg/<?php echo $noofcake; ?>.jpg" height="500"></img>
      <div id="2" class="w3-container menu w3-padding-48 w3-card-2">
	<form name ="buy" action="check.php" method="post" ">
	<br>
		<table width="50%" align="center"> 
			<tr>
				<td class="deco">Type:</td>
				<td class="deco">
				<?php echo $type; ?>
				</td>
			</tr>
			<tr>
				<td class="deco">Name:</td>
				<td class="deco">
				<?php echo $name; ?>
				</td>
			</tr>
			<tr>
				<td class="deco">Price:</td>
				<td class="deco">
				<?php echo $price; ?>
				</td>
			</tr>
			<tr>
				<td class="deco">Description:</td>
				<td class="deco">
				<?php echo $description; ?>
				</td>
			</tr>
			<tr>
				<td class="deco">
				Quantity:
				</td>
				<td>
				<select name="quantity" style="width:120px;">
				<option value="1" selected="select">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				</select>
				</td>
			</tr><td></td><tr>	
			</tr><td></td><tr>	
			</tr>
			<tr>
				<td>
				<input type="submit" value="ADD TO CART"/ >
				</td>
			</tr>
		</table>
	</form>
	</div>

    

    </section>
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
