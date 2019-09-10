<?php 
session_start();
if(!isset($_COOKIE['loginusername']))
{ 
//header("Location:./login.php");
	$author="Guest(without login)";
}
else
{
	$author=$_COOKIE['loginusername'];
}
	
$isAnonymous=$_GET["isAnonymous"];
if(isset($isAnonymous)){
	$author="Anonymous";
}


$forum_name=$_GET["forum_name"];


date_default_timezone_set('Asia/Hong_Kong');
$date = date('m/d/Y h:i:s a', time());
?>
<?php	
	
	
	$conn = mysqli_connect("localhost", "root", "","mybbs");

	if ($conn->connect_error)  {
		echo "Unable to connect to database";
		exit;
	}

?>
<?php
	$sql="insert into forums (forum_name,last_post_author,last_post_time)values('$forum_name','$author','$date')";
	$result=mysqli_query($conn,$sql); 
	header("location:add_forum.php"); 
?>