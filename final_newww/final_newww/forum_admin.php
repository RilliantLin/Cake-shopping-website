<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Piece of Cake</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="whole_css.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript">
</script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<?php
//only for administrator to open this page!!

session_start();
function checkIfAdmin(){
if(!isset($_COOKIE['loginusername']))
{ 
	header("Location:./login.php");
	
}
}




?>




<?php
	if (isset($_GET['id']) and  $_GET['id'] !=NULL)
   {
    $ID=$_GET['id'];
    delete($ID);
   }  
?>
<script>
function Deleteqry(id){
	if(confirm("Are you sure to delete this row?")==true)
		window.location="forum_admin.php?id="+id;
	return false;
}

</script>


<?php

function delete($ID){
	$conn = mysqli_connect("localhost", "root", "","mybbs");

	if ($conn->connect_error)  {
		echo "Unable to connect to database";
		exit;
	}
    $sql="DELETE FROM forums WHERE ID='".$ID."'";
    $result=mysqli_query($conn,$sql) or die("oopsy, error when tryin to delete events ");

}
?>


</head>

<body onload="checkIfAdmin()">
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

<div class="w3-container">
  <h2>Forum ManageMent</h2>
<form name="forum_form"  method="get" action="forum_admin.php">
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
	<td width="6%"><strong>Order</strong></td> 
	<td width="70%"><strong>Forum</strong></td>
	<td></td> <!--for delete -->
	<td width="24%"><strong>Time</strong></td>
      </tr>
    </thead>
<?php	
	
	
	$conn = mysqli_connect("localhost", "root", "","mybbs");

	if ($conn->connect_error)  {
		echo "Unable to connect to database";
		exit;
	}

	

?>

<?php
	$sql="select * from forums"; 
	$result=mysqli_query($conn,$sql); 
	$num=mysqli_num_rows($result);
	if($num>0){
		while($row=$result->fetch_assoc()){ 
		
?>
    <tr>
<td><?php echo $row["ID"]; ?> </td>
<td><?php echo $row["forum_name"] ?></td>
<td><input type="button" name="id" value="delete" onclick="return Deleteqry(<?php echo $row["ID"] ?>);"/></td>
<td><div><?php echo $row["last_post_time"]." By ".$row["last_post_author"]?></div></td>
    </tr>
<?php
		}//eof while loop
	}else{
	echo "<tr><td colspan=3>Sorry, there is no record yet……</td></tr>";
	}
	$conn->close();
?>
  </table>
</div>
</form>

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