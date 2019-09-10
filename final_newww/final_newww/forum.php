<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Piece of Cake</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="whole_css.css" rel="stylesheet" type="text/css">
<style type="text/css">
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 80%;
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
    background-color: #444;
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
	margin-left:5%;
	width:90%;
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

.row:after {
    content: "";
    display: table;
    clear: both;
}

</style>

<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> 
</script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
		window.location="forumIndex.php?id="+id;
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
<div id="mainWrapper">
<body>

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


  <h2>Share your comments below...</h2>
  <br>
<form name="forum_form"  method="get" action="forumIndex.php">
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
	<td width="6%"><strong>Order</strong></td> 
	<td width="64%"><strong>Comment</strong></td>
	<td></td> <!--for delete -->
	<td width="30%"><strong>Time</strong></td>
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

</form>
<br><br>
<div class="container">
  <form name="form" action="save_forum.php" method="get">
  
    <div class="row">
      <div class="col-25">
        <label >Comment</label>
      </div>
      <div class="col-75">
        <textarea name="forum_name" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
     Guest?&emsp;<input name="isguest" type="checkbox" id="isguest" value="0" />
    </div>
    <div class="row">
      <input name="Submit" type="submit"  value="add"/>
	  
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
