<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Google Maps || Powered By MapsEasy.com Maps Generator</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	///////////////////////////////////////////////////////////////////
	// Powered By MapsEasy.com Maps Generator                        
	// Please keep the author information as long as the maps in use.
	// You can find the free service at: http://www.MapsEasy.com     
	///////////////////////////////////////////////////////////////////
	function LoadGmaps() {
		var myLatlng = new google.maps.LatLng(28.795148,77.045347);
		var myOptions = {
			zoom: 16,
			center: myLatlng,
			disableDefaultUI: true,
			panControl: true,
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.DEFAULT
			},

			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
			},
			streetViewControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		var map = new google.maps.Map(document.getElementById("MyGmaps"), myOptions);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title:"Bawana Industrial Area, Sector 2, Bawana, Delhi, 110039"
		});
		var infowindow = new google.maps.InfoWindow({
			content: "L-152,Sector-2, DSIIDC Bawana Industrial Area, Delhi-39"
			});
			google.maps.event.addListener(marker, "click", function() {
				infowindow.open(map, marker);
			});
	}
</script>
</head>
<body onload="LoadGmaps()" onunload="GUnload()">
<!-- Maps DIV : you can move the code below to where you want the maps to be displayed -->
<div id="MyGmaps" style="width:570px;height:320px;border:1px solid #CECECE;"></div>
<!-- End of Maps DIV -->
</body>
</html>
