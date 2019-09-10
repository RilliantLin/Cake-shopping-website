<?php
session_start();

if(isset($_COOKIE['loginusername'])){
	unset($_COOKIE['loginusername']);
	setcookie("loginusername",$_GET["loginusername"],time()-60*60*24*365);
}
if(isset($_COOKIE['loginPassword'])){
	unset($_COOKIE['loginPassword']);
	setcookie("loginPassword",$_GET["loginPassword"],time()-60*60*24*365);
}

session_destroy();

header("Location:./index.php");

?>
