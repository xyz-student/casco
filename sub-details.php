<?
	include('function/function.php');
	$id=$_GET['id'];
	//$id=substr($a, strrpos($a, '/') + 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>shri ram/<?=$id?></title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="<?=SITE_URL?>css/mycustom.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?=SITE_URL?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=SITE_URL?>css/nav_left.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<script src="<?=SITE_URL?>js/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?=SITE_URL?>css/styles.css">
<script src="<?=SITE_URL?>js/jquery-latest.min2.js" type="text/javascript"></script>
<script src="<?=SITE_URL?>js/script.js"></script>
<!--product animation css-->
<link rel="stylesheet" href="<?=SITE_URL?>css/main.css">
<link href="<?=SITE_URL?>css/owl.carousel.css" rel="stylesheet">
<link href="<?=SITE_URL?>css/owl.theme.css" rel="stylesheet">
<script src="<?=SITE_URL?>js/jquery.min2.js"></script>


    <style>

</style>



	
	
	
	
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="<?=SITE_URL?>engine0/style.css" />
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
	$product=sqlfetch("select * from product where name='".$id."' and  actstat='1'");
	extract($product[0]);
?>
 
<div class="container">
	<div class="row">
		<div class="features">
		<div class="col-md-8">
			<div class="features1">
			 <h2 class="title">MODEL :- <?=ucwords($name)?></h2>
			 <h3>Features:</h3>
			 <ol>
				<?=ucwords($des)?>
			<!--	<li><a href="#">Speed Fan Levels</a></li>
				<li><a href="#">Automatic Vertical Louvres Moment</a></li>
				<li><a href="#">Manual adjustment for horizontal louvres</a></li>
				<li><a href="#">3 Side grills for larger air suction</a></li>
				<li><a href="#">Options for multi directional wheels for easy portability</a></li>
				<li><a href="#">Water Lebel Indicator</a></li>
				<li><a href="#">35 liters water tank capacity</a></li>
				<li><a href="#">Wood wool pads</a></li>
				<li><a href="#">Inverter compatible.</a></li>
				-->
				<a class="btn" href="<?=SITE_URL?>enquiry.html" style="margin-top:10px;">Enquiry Now</a>
			 </ol>
			 
			 </div>
			 
		</div>
			
				<div class="col-md-4 mycls">
				<div class="grow1 pic1">
					<a href="#"><img src="<?=SITE_URL?>uploaded_files/product/<?=$photo?>" class="img-responsive" /></a>
				</div>
				</div>
		</div>
	</div>
</div>



<div class="clear"></div>


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


    <script src="<?=SITE_URL?>js/bootstrap.min.js"></script>		


<script src="<?=SITE_URL?>js/owl.carousel.js"></script>
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