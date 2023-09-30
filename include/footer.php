<div class="footer wow fadeInDown">
<div class="container">
<div class="row">
<div class="col-md-3">

<div class="OurlinksWrap">

<div class="clearfix"></div>

<div class="Ourlinks">


<img src="<?=SITE_URL?>image/Casco1.png" class="img-responsive" style="margin-top:-15px;" />

  <p style="text-align:justify">"Shri Ram Enterprises" is an ISO 9001: 2008 certified company & leading  manufacturer of plastic Cooler body, plastic blades and plastic geyser body. We offer a vast range of products under the brand name “CASCO” in various sizes and specifications according to the latest market trends</p>
     <a class="footbtn" href="<?=SITE_URL?>about.html">Read More</a>
   
</div>
</div>


</div>



<div class="col-md-3">

<div class="OurlinksWrap">
<div class="clearfix"></div>


<div class="Ourlinks">

<h2>Our Links</h2>
<ul>
         <li><a href="<?=SITE_URL?>index.html">Home</a></li>
         <li><a href="<?=SITE_URL?>about.html">About us</a></li>
        <li><a href="<?=SITE_URL?>product.html">Our products</a></li></ul>
         <ul><li><a href="<?=SITE_URL?>enquiry.html">Enquiry</a></li>
         <li><a href="<?=SITE_URL?>contact.html">Contact</a></li>

</ul>
<div class="clear"></div>
<h2>Our Products</h2>
<ul>

 <?  
 $i=1;
 	foreach($categorys=sqlfetch("select * from category where actstat='1' order by name ") as $category)
	{
	if($i%6!=0)
	{
		$i++;
		?>
		  <li><a href="<?=SITE_URL?>products/<?=urlencode($category['name'])?>.html"><?=ucwords($category['name'])?></a></li>
		<?  
	}
	if($i>=6)
		{  ?>
				</ul><? $i=1;?><ul>
	<?	}
	
	?>
							
	<? } ?>	  
							













<?

/*
$i=1;
	foreach($products=sqlfetch("select * from product where actstat='1' order by RAND() limit 10") as $product)
	{  
		if($i%6!=0)
		{  $i++;
	?>
<!--
         <li><a href="<?//=SITE_URL?>product/<?//=urlencode($product['name'])?>.html"><?//=ucwords($product['name'])?></a></li>
-->
	<?  } 
	    if($i>=6)
		{  ?>
				<!--</ul><? //$i=1;?><ul>-->
	<?	}
	}
	*/
	?>		 
         
</ul>



<div class="clearfix"></div>
<div id="google_translate_element" style="float:left; margin-right:0px; margin-left:0px; margin-top:35px;"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="<?=SITE_URL?>//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</div>



</div>

</div>


<div class="col-md-3">
<div class="OurlinksWrap">

<div class="Ourlinks1">
<div class="addbox">
<h2>Get In Touch</h2>
<h3>Shri Ram Enterprises</h3>
<p>

L-152,Sector-2, DSIIDC Bawana Industrial Area, Delhi-39</p>




<ul>
<li><strong>Call Us : </strong>9310083054, 9810083054</li>
<li><strong>Email Id : </strong> cascoindia@ymail.com  </li>
</ul>



</div>

</div>
</div>



<div>
</div>
</div>
<div class="col-md-3">
<script type="text/javascript" src="//rc.revolvermaps.com/0/0/6.js?i=2doe48pijkk&amp;m=7&amp;s=280&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-150&amp;ly=130&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>

</div>
</div>







</div>
</div>
<!--footer end-->
<div class="clear"></div>

<div class="foot">
	<p>&copy; <b>Shri Ram Enterprises</b>  All right reserved Terms of use. Developed and managed by <a href="https://www.hedkey.com/">Hedkey India Pvt. Ltd.</a></p>
</div>

