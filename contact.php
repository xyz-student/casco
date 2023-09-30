<?
	include('function/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>shri ram/contact</title>
	
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
		<img src="image/contact_banner.jpg" style="width:100%;"/>
	</div>	
	
	<!-- End Banner BODY section -->
<!--Banner end-->	
	
	
</div>

<div class="clear"></div>
<hr/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.4494947541443!2d77.0414264150863!3d28.79567598235376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390da8260a910465%3A0xa6ee2e35aa6b5c74!2sShri+Ram+Enterprises!5e0!3m2!1sen!2sin!4v1546583372748" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		</div>
	
		<div class="col-md-7">
			<form action="mailer.php" method="post">
				<input class="foam" type="text" name="name" placeholder="Your Name" required />
				<input class="foam" type="text" name="emailid" placeholder="Email" required />
				<input class="foam" type="text" name="subject" placeholder="Subject"/>
				<input class="foam" type="text" name="phone"  placeholder="Phone Number" required />
				<input class="message" type="text" name="query" placeholder="Message" required/>
				<input class="submit" type="submit" name="mail_query" value="Submit"/>
                        </form>
		</div>	
		<div class="col-md-5">
			<div class="contact">
				<h1>Shri Ram Enterprises</h1>
				<p>Mobile No: 9310083054, 9810083054<br/>
				L-152,Sector-2 DSIIDC Bawana<br/> Industrial Area, Delhi-39 <br>
					Email Id:cascoindia@ymail.com
				
				</p>
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