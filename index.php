<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container main-cont">
		<div class="uk-slidenav-position"  data-uk-slideshow="{autoplay:true}">
		    <ul class="uk-slideshow">
		    	
		        <li><img src="img/homeslide.jpg" alt="Slider1"></li>
		        <li><img src="img/slider1.jpg" alt="Slider1"></li>
		        <li><img src="img/slider2.jpg" alt="Slider1"></li>
		        <li><img src="img/slider3.jpg" alt="Slider1"></li>
		        <li><img src="img/slider4.jpg" alt="Slider1"></li>
		    </ul>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
		</div>
		
		<div class="margin30"></div>
		<div class="uk-grid bg">
			<div class="uk-width-medium-1-4 resp-margin">
				<div class="home-grid" style="background:url('img/affordable.jpg') no-repeat center / cover ;">
					<div class="hl-line"></div>
					<div class="color-overlay1"></div>
					<div class="text-container">
					Invest in an <br>
					affordable home <br>
					that gives you <br>
					maximum value <br>
					for your money
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-4 resp-margin">
				<div class="home-grid" style="background:url('img/security.jpg') no-repeat center / cover ;">
					<div class="hl-line"></div>
					<div class="color-overlay2"></div>
					<div class="text-container">
					Enjoy the security<br>
					of mid-rise<br>
					condominium living
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-4 resp-margin">
				<div class="home-grid" style="background:url('img/comfort.jpg') no-repeat center / cover ;">
					<div class="hl-line"></div>
					<div class="color-overlay3"></div>
					<div class="text-container">
					Live in luxurious comfort<br>
					at a price well<br>
					within your reach
					</div>
				</div>
			</div>
			<style type="text/css">
			.ig-cont{width:100%;height:auto;position:relative;margin:0 auto;min-height: 200px;max-height: 200px;overflow: hidden;border:1px solid #D3D3D3;}
			.instaslider-wrapper{width:100%;height:auto;overflow:hidden;max-height: 200px}
			.instaslider-wrapper ul{width:10000px;list-style:none;padding-left: 0;max-height: 200px}
			.instaslider-wrapper ul li{float:left;width:100%;max-width:249.5px;max-height: 200px;text-align: center;}
			.instaslider-wrapper ul li img{max-height:200px;margin:0 auto;  width: 100%;}
			.instaslider-nav{display: none;}
			.ribbon{height: 35px;background-color: #c55b04;position: absolute;z-index: 3;top: 0;width: 100%;}
			.ig-link{margin-top: 8px;}
			.ig-cont a{color: #fff;}
			.ig-cont a:hover{color: #fff;}
			</style>
			<div class="uk-width-medium-1-4">
				<div class="ig-cont"><a href="https://instagram.com/auroraresidences/"><div class="ribbon uk-text-center"><p class="ig-link"><i class="uk-icon-instagram"></i>&nbsp;&nbsp;@AuroraResidences</p></div></a></div>
			</div>
		</div>
	

		<div class="home-text-bottom">
			<div class="hr-red">
				<span class="hl-text">affordable condominiums in san juan, manila</span>
			</div>
		</div>

		<div class="det-text">
			Welcome to Aurora Residences, your quiet nook in the city with efficient living spaces from studios to two bedroom apartments.
			<br /><br />
			Built with your family's security as our primary concern, your new home is only 7 stories tall, giving you and your loved ones maximum protection against fires and earthquakes. Conveniently located along R. Lagmay St., San Juan City Metro Manila, it is a quick 2 minute walk to the J. Ruiz MRT Station and 3 minute walk to the Aurora Blvd jeepney line.
			<br /><br />
			With plenty of amenities awaiting our new residents, your next home comes equipped with a 18 meter infinity lap pool, a fitness gym on the roof deck and sky lounge where friends and family can gather.
			<br /><br />
			<!--
			Welcome to Aurora Residences, your quiet nook in the city with efficient living spaces from studios to two bedroom apartments.
			Built with your family's security as our primary concern, your new home is only 7 stories tall, giving you and your loved ones 
			maximum protection against fires and earthquakes. Conveniently located along R. Lagmay St., San Juan City, Metro Manila, it is 
			a quick 2 minute walk to the J. Ruiz MRT Station and 3 minute walk to the Aurora Blvd jeepney line.
			<br><br>
			With plenty of amenities awaiting our new residents, your next home comes equipped with a 18 meter infinity lap pool, a fitness gym on the roof deck and sky lounge where friends and family can gather. 
			<br><br>
			Our pricing is below industry levels taken on a price per square meter computation, Our units are within your budget and they hold and investment value for the future.
			<br><br>-->
			For more information on our units: <br>
			Email: sales@auroraresidences.com <br>
			Mobile No.: +63 917 826 4335 <br>

		</div>
	</div><!-- End Main-container -->
	<div class="margin100"></div>

	<script type="text/javascript">
		$(function(){
			$('.home').addClass('uk-active');
			document.title = "Aurora Residences - Home";
		})

		// instafeeds
		$('.ig-cont').instaSlider({
			clientID: "e952611b61dd4d03adecb777719d7399",
			access_token: "1941411364.e952611.9196f6de6d314d1fb14bfcafbdaff2d4",
			search: '@auroraresidences',
			limit: 10,
			duration: 1000,
			prevClass: '',
       		nextClass: '',
			delay: 5000,
			auto: true
		});
		// instafeeds
	</script>

<?php include('footer.php'); ?>