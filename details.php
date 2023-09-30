<?
	include('function/function.php');
	$id=$_GET['id'];
	//$id=$id1=substr($a, strrpos($a, '/') + 1);
	$category=sqlfetch("select * from category where name='$id'");
	$id=$category[0]['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>shri ram/<?=$id1?></title>
	
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

?>
 
<div class="container">
<div class="row">
	<?
	$link="";
	foreach($products=sqlfetch("select * from product where subcat='".$id."' and  actstat='1' order by fld_order") as $product)
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

		<div class="col-md-3 mycls">
		<div class="grow pic">
			<a href="<?=$link?>"><img src="<?=SITE_URL?>uploaded_files/product/<?=$product['photo']?>" class="img-responsive" /></a>
		</div>
		<h1 class="myh2"><?=ucwords($product['name'])?></h1>
		<?
			
		?>
		<a href="<?=$link?>" class="getbtn4 center-block">Read More</a>
		<a href="<?=SITE_URL?>enquiry.html" class="getbtn4 pull-right center-block">Enquiry Now</a>
		
		
		</div>
<? } ?>			
	</div>
	</div>

<hr />

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