<!DOCTYPE html>
<html>
<head>







</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Forum</h2>
<form name="forum_form"  method="get" action="forumIndex.php">
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
	<td></td>
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
</body>
</html> 
