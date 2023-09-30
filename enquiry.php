<?php
	include('function/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>shri ram/enquiry</title>
	
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
?> <!--Banner-->
  <div>
	<!-- Banner BODY section --> <!-- add to the <body> of your page -->
	<div class="banner">
		<img src="image/online_enquiry_banner.jpg" style="width:100%;"/>
	</div>	
	
	<!-- End Banner BODY section -->
<!--Banner end-->	
	
	
</div>

<div class="clear"></div>
<hr/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="enquiry">
				<div class="col-md-7">
					<h2>Enquiry Form</h2>
				<form action="<?=SITE_URL?>mailer.php" method="post">	
					<input class="foam" type="text" placeholder="Your Name" name="name" required />
					<input class="foam" type="email" placeholder="Email" name="emailid" required/>
					<input class="foam" type="text" placeholder="Subject" name="subject" />
					<input class="foam" type="text" placeholder="Phone Number" name="phone" />
					<input class="foam" type="text" placeholder="Mobile Number" name="mobile" required/>
					<input class="foam" type="text" placeholder="City" name="city" />
					<input class="quiry" type="text" placeholder="Address" name="address" />
					<input class="message" type="text" placeholder="Message" name="query"  />
					<input class="submit" type="submit" name="mail_query" value="Submit"/>
				</form>
				</div>
				<div class="col-md-5">
			<div class="address">
				<h1>Shri Ram Enterprises</h1>
					<p>Mobile No:9310083054, 9810083054<br/>
				        <strong>Unit-1:</strong> L 152,Sector-2 DSIIDC Bawana<br/> Industrial Area, Delhi-39<br/>
					<strong>Unit-2:</strong> B-56, phase-2, Mayapuri,<br/>Industrial Area, New Delhi<br/>
					
					Email Id:cascoindia@ymail.com
				
				</p>
			</div>
			
		</div>	
					
			</div>
		</div>		
	</div>
</div>
	
<hr />



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