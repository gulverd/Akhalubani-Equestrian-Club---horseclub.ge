<?php include 'header.php';?>

<?php include 'nav.php';?>

<?php include 'carousel.php';?>

 <div class="col-md-12" id="middle">
    <div class="container" id="middle_container">
		<div class="col-md-12">
		<div class="col-md-12" id="map_header">
			<h3><i class="icon-time main-color"></i> ადგილმდებარეობა </h3>
		</div>	
		<div class="col-md-12" id="maps">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div style="overflow:hidden;height:400px;width:100%;">
			<div id="gmap_canvas" style="height:400px;width:100%;"></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				<a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">www.map-embed.com</a>
			</div>
			<script type="text/javascript"> 
			function init_map(){
				var myOptions = {
					zoom:13,
					center:new google.maps.LatLng(41.940099, 44.700613),mapTypeId: google.maps.MapTypeId.ROADMAP};
					map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
					marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.940099, 44.700613)});
					infowindow = new google.maps.InfoWindow({content:"<b>Akhalubani</b><br/><br/> " });
					google.maps.event.addListener(marker, "click", 
						function(){infowindow.open(map,marker);
						});
					infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
			</script>
		</div>
	</div>

	</div>
</div>

<?php include 'footer.php';?>

