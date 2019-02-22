<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container  main-cont">
		<div class="margin50"></div>
		<div class="uk-grid">
			<div class="uk-width-medium-2-3  margin30">
				<div id="map-canvas" style="height:400px;width:100%;"></div>
				<div class="margin30"></div>
				<div class="am-text-ul nopad"></div>
				<div class="margin30"></div>
				<div class="uk-grid uk-grid-medium">
					<div class="uk-width-small-1-3">
						<img src="img/auro-logo.png" alt="Aurora Residences">
					</div>
					<div class="uk-width-small-2-3">
						<div class="thmp">
							120 J. De Mesa St. San Juan, Metro Manila <br>
							<a class="contact2" href="tel:6332674">(02) 633-2674</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a class="contact2" href="tel:7260258">(02) 726-0258</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a class="contact2" href="tel:+639178264335">+63 917 826-4335</a> <br>	
							<a href="mailto:sales@auroraresidences.com">sales@auroraresidences.com</a>
							<div class="margin30"></div>
							<div class="margin30"></div>	
							HLURB LTS NO 28485
							COMPLETION DATE DECEMBER 2014
							<small>This advertisment is approved and authorized by hlurb</small>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-3">
				<?php include('mailer.php'); ?>
			</div>
		</div>
	</div><!-- End Main-container -->
	<div class="margin100"></div>
	
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
			var mapCanvas = document.getElementById('map-canvas');
			var myLatlng = new google.maps.LatLng(14.610725, 121.027812);
			var mapOptions = {
				center: myLatlng,
				zoom: 15,
				scaleControl: false,
				scrollwheel: false,
				disableDoubleClickZoom: true,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(mapCanvas, mapOptions)
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<script type="text/javascript">
		$(function(){
			$('.contactus').addClass('uk-active');
		})
		document.title = "Aurora Residence - Contact Us";
	</script>

<?php include('footer.php'); ?>