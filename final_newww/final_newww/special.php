<?php
if(!isset($_GET['ajax'])){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Piece of Cake</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> 
</script>

</head>
<body>
<section>
<?php
}
?> 
	<div id="page1" style="display:block;">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
      
        <article class="productInfo"><!-- Each individual product description -->
       
        <div>
             <img alt="sample" src="cakebigimg/sale1.jpg" ></div>
          <p class="price">$50</p>
          <a href="cake1.php?nocake=64"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        
        <article class="productInfo"><!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/sale2.jpg"></div>
          <p class="price">$50</p>
          <a href="cake1.php?nocake=15"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/sale3.jpg"></div>
          <p class="price">$50</p>
           <a href="cake1.php?nocake=22"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        </form>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/sale4.jpg"></div>
          <p class="price">$50</p>
          <a href="cake1.php?nocake=40"><input type="button" value="Detail" class="buyButton"></a>
        </article>
		<article class="productInfo"> <!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/sale5.jpg"></div>
          <p class="price">$50</p>
          <a href="cake1.php?nocake=47"><input type="button" value="Detail" class="buyButton"></a>
        </article>
      </div>
      </div>
  <?php
if(!isset($_GET['ajax'])){
?> 	      
    </section>

</div>
</body>
</html>
<?php
}
?>