<?
	include('function/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>shri ram</title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="css/mycustom.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nav_left.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<script src="js/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/styles.css">
<script src="js/jquery-latest.min2.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<!--product animation css-->
<link rel="stylesheet" href="css/main.css">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<script src="js/jquery.min2.js"></script>


	
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--script type="text/javascript" src="engine3/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->
<style>
@media (max-width:320px) {
.navbar-default .navbar-nav .open .dropdown-menu > li > a{ color:#fff !important;}}
</style>
</head>


	
<body>

<!--Topstrip-->

<?
include('include/header.php');
?>

  <!--slider-->
  <div>
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container3">
	<div class="ws_images"><ul>
		<li><img src="data3/images/banner1.jpg" alt="wow slider" title="banner1" id="wows3_0"/></li>
		<li><img src="data3/images/banner2.jpg" alt="banner4" title="banner4" id="wows3_1"/></li>
		<li><img src="data3/images/banner4.jpg" alt="banner4" title="banner4" id="wows3_1"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.9/wow.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	
<!--slider end-->	
	
	
</div>


<div class="container">
	<div class="row">
		<div class="about">
		<div class="col-md-12">
			<div class="about1">
			 <h2 class="title">Welcome to Shri Ram Enterprises</h2>
			 <p>Shri Ram Enterprises is an ISO 9001: 2008 certified company & leading  manufacturer of plastic Cooler body, plastic blades and plastic geyser body. We offer a vast range of products under the brand name “CASCO” in various sizes and specifications according to the latest market trends . We manufacture using premium quality raw material which is procured from reliable vendors of the industry. The use of advanced technology and machines for the manufacturing process allows us to provide customers with best quality at a reasonable price....</p>
			 <a class="btn" href="about.html">Read More</a>
			 </div>
		</div>
			
				<!--<div class="col-md-4">
					<img src="images/aboutimg.png" style="margin-top:20px;" class="img-responsive">
				</div>-->
		</div>
	</div>
</div>



<div class="clear"></div>
<hr/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="about4">
			<h2>Our Featured Products</h2>	
		</div>
		</div>		
	</div>
</div>
	<div class="container">
	<div class="row">
	 <?
		foreach($products=sqlfetch("select * from product where actstat='1' and feature_img='1' order by fld_order limit 8") as $product)
		{  ?>
				<div class="col-md-3 mycls">
				<div class="grow pic">
					<a href="<?=SITE_URL?>product/<?=urlencode($product['name'])?>.html">
					<img src="<?=SITE_URL?>uploaded_files/product/<?=$product['photo']?>" class="img-responsive" /></a>
				</div>
				<h1 class="myh2"><?=ucwords($product['name'])?></h1>
				</div>
	<?
		}
	?>
	</div>
	<!--
				<div class="row">
					<div class="col-md-3 mycls">
				<div class="grow pic">
					<a href="superbtower.html"><img src="images/cooler4.png" class="img-responsive" /></a>	
				</div>
				<h1 class="myh2">Superb Tower</h1>
				</div>
				<div class="col-md-3 mycls">
				<div class="grow pic">
					<a href="ecostormdelux.html"><img src="image/Ecostrom Delux.png" class="img-responsive" /></a>	
				</div>
				<h1 class="myh2">Ecostorm</h1>
				</div>
				<div class="col-md-3 mycls">
				<div class="grow pic">
					<a href="ecostormsleek.html"><img src="image/ecostorm_sleek.png" class="img-responsive" /></a>	
				</div>
				<h1 class="myh2">Ecostorm Sleek</h1>
				</div>
				<div class="col-md-3 mycls">
				<div class="grow pic">
					<a href="f-1Junior.html"><img src="image/f-1 Junior.png" class="img-responsive" /></a>	
				</div>
				<h1 class="myh2"> f-1 Junior</h1>
				</div>
				
				
<div class="row">
<div class="col-md-4 col-md-offset-5 text-center">
<a href="product.html" class="getbtn3 center-block">Read More</a>
</div>
</div>
				</div>
				
				-->
			
	</div>

<hr />

	<div class="OwlWrap wow fadeInDown">
<div class="container">
<div class="wrapper">
<h2>Our Products</h2>


	 
	 <marquee onmouseover="stop();" onmouseout="start();">
	  <?
                $link="";
		foreach($products=sqlfetch("select * from product where actstat='1' and photo!='' order by fld_order ") as $product)
		{  
                $length=strlen($product['des']);
		if($length>50)
		{
			$link=SITE_URL;
			$link.="product/".urlencode($product['name']).".html";
		}
		else
		{
			$link="";
		}

?>
	   <div class="wrapp">
		   <a href="<?=$link?>" title="<?=$product['name']?>">
		   <img width="125" height="125" src="<?=SITE_URL?>uploaded_files/product/<?=$product['photo']?>" class="" alt="" /></a>		   		  
	   </div>
		<?  } ?>
	   
	   
	   
	   </marquee>
	   
	   
	   
	   

      	



</div>
</div>
</div>

<!--social icon-->

   <div class="bt-menu"> 
				<div class="bt-menu-trigger1">
				<ul>
					<li><a target="_blank" href="https://www.facebook.com/Shri-Ram-Enterprises-103580826827076/"><div class="facebook-hover social-slide"></div></a></li>
                    <li> <a target="_blank" href="https://www.linkedin.com/in/shri-ram-enterprises"><div class="linked-hover social-slide"></div></a></li>
                    <li> <a target="_blank" href="https://www.youtube.com/channel/UC16L8RU2NDOCPIZpgoSv3iQ"><div class="youtube-hover social-slide"></div></a></li>
                    <li> <a target="_blank" href="https://www.flickr.com/photos/147376945@N06/"><div class="flickr-hover social-slide"></div></a></li>
                    <li> <a target="_blank" href="https://plus.google.com/u/0/109321943088655889184"> <div class="googlepluse-hover social-slide"></div></a></li>
                    <li><a target="_blank" href="https://in.pinterest.com/cascocoin/"><div class="pintrest-hover social-slide"></div></a></li>
                    <li><a target="_blank" href="#"><div class="deelar_locater-hover social-slide"></div></a></li>
                    <li><a target="_blank" href="#"><div class="news_room-hover social-slide"></div></a></li>
					
				</ul>
                
			</div> 
			</div> 
<!--social icon end-->

<div class="clear"></div>
<!--footer-->
<?
	include('include/footer.php');
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script src="js/bootstrap.min.js"></script>		


<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
	
		  $("#owl-demo").owlCarousel({
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
			items : 5
		  });
	
		  $('.link').on('click', function(event){
			var $this = $(this);
			if($this.hasClass('clicked')){
			  $this.removeAttr('style').removeClass('clicked');
			} else{
			  $this.css('background','#7fc242').addClass('clicked');
			}
		  });
	
		});
	</script>



</body>

</html>