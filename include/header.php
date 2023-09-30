<div class="topstrip">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<div class="logo">
				<img src="<?=SITE_URL?>image/logo.png" class="img-responsive"   />
			</div>
			</div>
				<div class="col-md-4">
				<div class="img">
					<ul>
					<li><img src="<?=SITE_URL?>images/n1.jpg" class="img-responsive" style="width: 81px;"></li>
					<li><img src="<?=SITE_URL?>images/n2.jpg" class="img-responsive" ></li>
					<li><img src="<?=SITE_URL?>images/n3.jpg" class="img-responsive"></li>
					</ul>
				</div>
				</div>
					<div class=" col-md-4">
					<div class="call">
						<ul> 
						<li><strong>Call on:</strong>  9310083054, 9810083054 </li>
						<li> <strong>Email id:</strong> cascoindia@ymail.com </li>
						</ul>
					</div>
					</div>
		</div>
	</div>

</div>


  
  <div class="menu">
  <div class="container">
	<div class="row">
		<div class="col-md-7">
			  <nav class="navbar navbar-default">
				<div class="navbar-header">
				  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="<?=SITE_URL?>index.html"><b>Home</b></a>
				</div>


				<div class="collapse navbar-collapse js-navbar-collapse">
				  <ul class="nav navbar-nav">
				  <li> <a href="<?=SITE_URL?>about.html">About us</a></li>
				  <li class="dropdown">
					  <a href="<?=SITE_URL?>product.html" class="dropdown-toggle" data-toggle="dropdown"> Our Products
<span class="caret"></span></a>
							<ul class="dropdown-menu">
						 <?
						foreach($categorys=sqlfetch("select * from category where actstat='1' order by name ") as $category)
						{  ?>
							  <li><a href="<?=SITE_URL?>products/<?=urlencode($category['name'])?>.html"><?=ucwords($category['name'])?></a></li>
					<? } ?>	  
							<li><a href="<?=SITE_URL?>product.html">View All</a></li>
							</ul>
						
				 </li>
					<li><a href="<?=SITE_URL?>enquiry.html">Enquiry</a></li>
					  <li><a href="<?=SITE_URL?>contact.html">Contact</a></li>
					  
				  </ul>
					
				</div>
				
				<!-- /.nav-collapse -->
			  </nav>
		</div>
		<!--	<div class="col-md-5">
				<div class="foam">
				   <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
			</div>
			</div>-->
	</div>
  </div>
  </div>