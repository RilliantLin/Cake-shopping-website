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
             <img alt="sample" src="cakebigimg/5.jpg" ></div>
          <p class="price">$70</p>
          <a href="cake1.php?nocake=5"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        
        <article class="productInfo"><!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/6.jpg"></div>
          <p class="price">$70</p>
          <a href="cake1.php?nocake=6"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/7.jpg"></div>
          <p class="price">$70</p>
           <a href="cake1.php?nocake=7"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
       
        <div>
             <img alt="sample" src="cakebigimg/8.jpg" ></div>
          <p class="price">$50</p>
          <a href="cake1.php?nocake=1"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        
        <article class="productInfo"><!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/9.jpg"></div>
          <p class="price">$50</p>
          <a href="cake1.php?nocake=2"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/10.jpg"></div>
          <p class="price">$50</p>
           <a href="cake1.php?nocake=3"><input type="button" value="Detail" class="buyButton"></a>
        </article>
      </div>
      
      <div class="productRow">
        <article class="productInfo"> <!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/11.jpg"></div>
          <p class="price">$50</p>
          <a href="cake1.php?nocake=4"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div>
              <img alt="sample" src="cakebigimg/12.jpg"></div>
          <p class="price">$70</p>
           <a href="cake1.php?nocake=12"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div>
             <img alt="sample" src="cakebigimg/13.jpg"></div>
          <p class="price">$70</p>
           <a href="cake1.php?nocake=13"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        </div>
        </div>
		
		
        <div id="page2" style="display:none;">
        <div class="productRow">
        <article class="productInfo"> 
          <div><img alt="sample" src="cakebigimg/14.jpg"></div>
          <p class="price">$70</p>
          <a href="cake1.php?nocake=14"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="cakebigimg/15.jpg"></div>
          <p class="price">$70</p>
          <a href="cake1.php?nocake=15"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="cakebigimg/16.jpg"></div>
          <p class="price">$90</p>
          <a href="cake1.php?nocake=16"><input type="button" value="Detail" class="buyButton"></a>
        </article>
      </div>
      
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="cakebigimg/17.jpg"></div>
          <p class="price">$90</p>
         <a href="cake1.php?nocake=17"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="cakebigimg/18.jpg"></div>
          <p class="price">$90</p>
          <a href="cake1.php?nocake=18"><input type="button" value="Detail" class="buyButton"></a>
        </article>
        
      </div>
	  </div>
<?php
if(!isset($_GET['ajax'])){
?>
    </section>
  </div>

</div>
</body>
</html>
<?php
}
?>