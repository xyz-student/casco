<?
	include('function/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>shri ram/about</title>
	
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


    <style>

</style>



	
	
	
	
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
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
  <!--Banner-->
  <div>
	<!-- Banner BODY section --> <!-- add to the <body> of your page -->
	<div class="banner">
		<img src="image/cooler_banner1.jpg" style="width:100%;"/>
	</div>	
	
	<!-- End Banner BODY section -->
<!--Banner end-->	
	
	
</div>


<div class="container">
	<div class="row">
		<div class="about">
		<div class="col-md-12">
			<div class="about1">
			 <h2 class="title">Welcome to Shri Ram Enterprises</h2>
			 <p>Shri Ram Enterprises is an ISO 9001: 2008 certified company & leading  manufacturer of plastic Cooler body, plastic blades and plastic geyser body. We offer a vast range of products under the brand name “CASCO” in various sizes and specifications according to the latest market trends . We manufacture using premium quality raw material which is procured from reliable vendors of the industry. The use of advanced technology and machines for the manufacturing process allows us to provide customers with best quality at a reasonable price.</p><p>We at “Shri Ram Enterprises” involve in active communication with clients to understand the perspective of clients. We believe in giving the highest priority to quality parameters. We manufacture the entire range of cooler body in high grade quality as per the set industry standards. Our knowledgeable quality analysts keep a watch on the overall production process to ensure the best quality.
   Our quality control unit is equipped with the requisite testing tools and equipment that helps in developing efficient parts as per the set industry norms. Also, our company has established spacious and sophisticated warehousing unit divided into various sections. This unit is developed with all the required facilities to facilitate us in arranging and storing the products safely. We also offer required packaging of our products to provide full protection during transit.</p>
<p>We believe in regularly updating our machines as per the latest market trends. The use of advanced machines allows us to meet the bulk requirements of the customers within the predefined time frame. Our highly skilled, experienced and dedicated team of professionals ensure the smooth and flawless production process. Our skillful employees enable our company to stay ahead of the competitors in the national market by offering world-class products. Our customers are spread across the country and are efficiently managed through a wide distribution network.


 </p>
			 
			 </div>
		</div>
			
				
		</div>
	</div>
</div>

	<div class="OwlWrap wow fadeInDown">
<div class="container">
<div class="wrapper">
<h2>Our Products</h2>


	 
	 <marquee onmouseover="stop();" onmouseout="start();">
	  <?
		foreach($products=sqlfetch("select * from product where actstat='1' and photo!='' order by fld_order ") as $product)
		{  ?>
	   <div class="wrapp">
		   <a href="<?=SITE_URL?>product/<?=urlencode($product['name'])?>.html" title="<?=$product['name']?>">
		   <img width="125" height="125" src="<?=SITE_URL?>uploaded_files/product/<?=$product['photo']?>" class="" alt="" /></a>		   		  
	   </div>
		<?  } ?>
	   
	   
	   
	   </marquee>
	   
	
</div>
</div>
</div>

<div class="clear"></div>
<hr/>


	

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