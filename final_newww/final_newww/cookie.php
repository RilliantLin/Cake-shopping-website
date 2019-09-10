<?php 
session_start();
$loginusername=$_GET["loginusername"];
$loginPassword=$_GET["loginPassword"];
$conn = mysqli_connect("localhost","root","","info");
if($conn->connect_error){
echo"Unable to connect to database";
exit;
}
$query1="select username,password from customers where username='".$loginusername."'";
$query1 .= " and password='".$loginPassword."'";
$result1 = $conn->query($query1);
if(!$result1){
	header("Location:./login.php");
}
$result1->data_seek(0);
while($row=$result1->fetch_assoc()){
setcookie("loginusername",$_GET["loginusername"],time()+60*60*24*365);
setcookie("loginPassword",$_GET["loginPassword"],time()+60*60*24*365);
header("Location:./index.php");
}
$result1->free();
$conn->close();

?>