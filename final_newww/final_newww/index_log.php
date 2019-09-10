<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Piece of Cake</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="whole_css.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>

<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> 
</script>

<script>
var currentPage;
var listener;
var section;
function generatePages(){
	
	var pagebuttons=[]
	var pagebuttons=document.getElementById("pagebuttons");
	var node;
	currentPage=0;
	listener=[];
	while(node=pagebuttons.firstChild) pagebuttons.removeChild(node);
	for(var pageNo=0; pageNo<section.children.length;pageNo++){
		let page=section.children[pageNo]
		let button=document.createElement("a")
		if(page.previousElementSibling==null)
			button.classList.toggle("selected");
		else
			page.style.display="none"
		pagebuttons.appendChild(button)
		button.textContent=pageNo
		let localPageNo=pageNo
		listener.push(button.onclick=function(){
			button.classList.toggle("selected");
			pagebuttons.children[currentPage].classList.toggle("selected");
			section.children[currentPage].style.display="none"
			page.style.display=""
			currentPage=localPageNo
		});
	}
	
}
window.addEventListener("load",()=>{section=document.getElementById("pageparent");showContent("all")});
function showContent(str) {
  var xhttp;    
  if (str == "") {
    showContent("all")
    return;
  }
  console.log(str);
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pageparent").innerHTML = this.responseText;
	  generatePages();
    }
  };
  xhttp.open("GET", str+".php?ajax", true);
  xhttp.send();
}

</script>
</head>

<body>
<!--
$title=$_SESSION['title'];
$name=$_SESSION['namee'];
-->
<div id="mainWrapper">
  <header> 
  
    <div> <a href="index.php"><img src="logo2.png" alt="sample logo" width="100"> </a>
    </div>
	<div id="headerLinks">
      <div style="z-index:1; position: absolute;left: 40%; top: 0px;"><h4 style="text-align: center"> 
	  Hey, here is A Piece of Cake!&emsp;Welcome!</h4></div>
		<a href="aboutus.html" title="About Us">About Us</a>
		<a href="ContactUs.html" title="About Us">Contact Us</a>
		<a href="showcart.php" title="Cart">Cart</a>
		<a href="logout.php" title="Logout">Logout</a>
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
<br><br><br>

<iframe src="picture automatic carousel.html" align="left" frameBorder="0" width="95%" scrolling="no" height="450">
	
</iframe>

  <div id="content">
    <section class="sidebar"> 
      
      <!--<input type="text"  id="search" value="search">-->
	  
      <div id="menubar">
        <nav class="menu">
		<p><h3>Catergory</h3></p>
		<hr>
		<br>
        <a href="#" style="text-decoration:none;color:#9d9ea0;" onclick="showContent('all')"><h2>All Products</h2></a>
		<a href="#" style="text-decoration:none;color:#9d9ea0;" onclick="showContent('special')"><h2>Special Offers</h2></a>
		
        <hr>
		<br>
		<h2>Filter</h2>
		<form action=""> 
		<select name="Cakes" onchange="showContent(this.value)">
		<option value="all">Category</option>
		<option value="cakebox">Cake box</option>
		<option value="cakeroll">Cakeroll</option> 
		<option value="cartoon">Cartoon cake</option>
		<option value="creamcake">Cream cake</option>
		<option value="cupcake">Cupcake</option>
		<option value="doughnut">Doughnut</option>
		<option value="fondantcake">Fondant cake</option>
		<option value="flowercake">Wreath cake</option>
		</select>
		</form>
		<br>
		<form action=""> 
		<select name="Cakes" onchange="showContent(this.value)">
		<option value="">Price</option>
		<option value="cakebox">$0-$100</option>
		<option value="cartoon">$100-$200</option>
		<option value="flowercake">$200-$300</option>
		<option value="fondantcake">$300 or above</option>
		</select>
		</form>
		<br>
		<form action=""> 
		<select name="Cakes" onchange="showContent(this.value)">
		<option value="">Issue Time</option>
		<option value="newest">Newest to Oldest</option>
		<option value="oldest">Oldest to Newest</option>
		</select>
        </nav>

      </div>
    </section>
	<style>
	</style>
    
    <section class="mainContent" id="pageparent"></section>
	
	<div class="pagebuttons" style="margin-left:45%;">
		<style>
		.pagebuttons a{padding:3px 5px;border:1px solid #444;margin:0 3px;}
		.pagebuttons a:hover{color:#444;}
		.pagebuttons a.selected{background:#444;color:#fff;}
		</style>
		<a href="javascript:void(0);" style="color:#5e5e5e;text-decoration:none;font-family:sans-serif;" onclick="listener[Math.max(0,currentPage-1)]();">Previous page</a>
		<span id=pagebuttons></span>
		<a href="javascript:void(0);" style="color:#5e5e5e;text-decoration:none;font-family:sans-serif;" onclick="listener[Math.min(section.children.length-1,currentPage+1)]();">Next page</a>
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
