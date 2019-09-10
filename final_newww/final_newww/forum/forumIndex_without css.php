<head>
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


<form name="forum_form"  method="get" action="forumIndex.php">
<table width="90%" border="0" align="center" cellpadding="5" cellspacing="1">
<tr>
	<td colspan="3">Forum List</td>
</tr>
<tr>
	<td width="6%"><strong>Order</strong></td> 
	<td width="70%"><strong>Forum</strong></td>
	<td></td> <!--for delete -->
	<td width="24%"><strong>Time</strong></td>
</tr>
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



	
