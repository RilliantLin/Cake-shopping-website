<?php 
session_start();
setcookie("name",$_GET["namee"],time()+60*60*24*365);
setcookie("title",$_GET["title"],time()+60*60*24*365);
setcookie("birthday",$_GET["bday"],time()+60*60*24*365);

$username=$_GET['username'];
$password=$_GET['password'];
$title=$_GET['title'];
$_SESSION['title']=$title;
$namee=$_GET['namee'];
$_SESSION['namee']=$namee;
$email=$_GET['email'];
$tel=$_GET['tel'];


$conn = mysqli_connect("localhost","root","","info");
if($conn->connect_error){
echo"Unable to connect to database";
exit;
}
$query2="INSERT INTO customers VALUES ('{$username}', '{$password}', '{$title}', '{$namee}','{$email}','{$tel}')";

if ( mysqli_query($conn,$query2) === TRUE) {
	 	header("Location:./index.php");
} 
else {
    echo "<h1>Error</h1>" ;
}


?>
