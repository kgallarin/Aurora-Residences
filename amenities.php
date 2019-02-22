<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container  main-cont">
		<div class="uk-slidenav-position"  data-uk-slideshow="{autoplay:true}">
		    <ul class="uk-slideshow">
		        <li><img src="img/amenitiesslide.jpg" alt="Slider1"></li>
		        <li><img src="img/amenitiesslide2.jpg" alt="Slider2"></li>
		    </ul>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
		</div>
		<div class="am-text-ul">
			Pictures are architect's perspective of the actual plan.
		</div>
		<div class="am-text-ul nobord">
		Aurora Residences is a modern condominium concept offering luxurious living. Residents are provided with a wide range
		additional <br> of amenities and services to enhance the living experience to help create a more relaxing environment.
		</div>
		<div class="uk-grid">
			<div class="uk-width-small-1-3">
				<div class="am-grid">
					<div class="img" style="background:url('img/amenities/concierge.jpg') no-repeat center / cover ;"></div>
					<div class="am-details">
						<div class="title">Concierge</div>
						<div class="desc">
							Security, privacy and exclusivity is guaranteed to you with its 24/7 exit-entry system
							and CCTV in all common areas.
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-small-1-3">
				<div class="am-grid">
					<div class="img" style="background:url('img/amenities/lounge.jpg') no-repeat center / cover ;"></div>
					<div class="am-details">
						<div class="title">Lounge</div>
						<div class="desc">
							Pleasant setting for you to enjoy some down time with your friends, read a magazine or plan out your day while in an inviting and beautifully decorated environment, both casual and elegant.
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-small-1-3">
				<div class="am-grid">
					<div class="img" style="background:url('img/amenities/elevators.jpg') no-repeat center / cover ;"></div>
					<div class="am-details">
						<div class="title">TWO HIGH Speed elevators</div>
						<div class="desc">
							With relief from the higher traffic or high-rise condo buildings, Aurora is fitted with 2 high speed elevators, making your early morning rush to school or work so much easier.
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-small-1-3">
				<div class="am-grid">
					<div class="img" style="background:url('img/amenities/gym.jpg') no-repeat center / cover ;"></div>
					<div class="am-details">
						<div class="title">Gym</div>
						<div class="desc">
							A state of the art fitness centre, housing the latest in cardio and strength training equipment.
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-small-1-3">
				<div class="am-grid">
					<div class="img" style="background:url('img/amenities/roofdeck.jpg') no-repeat center / cover ;"></div>
					<div class="am-details">
						<div class="title">Roof deck</div>
						<div class="desc">
							Whether you're looking to bask in the sun or savour relaxing moments in the resort-like 18 meter infinity pool, complete with outdoor relaxation areas.
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-small-1-3">
				<div class="am-grid">
					<div class="img" style="background:url('img/amenities/sky.jpg') no-repeat center / cover ;"></div>
					<div class="am-details">
						<div class="title">Sky Lounge</div>
						<div class="desc">
							For family relaxation, or a new Sunday Barbeque area, the sky lounge blends stunning interiors with a peaceful outdoor environment.
						</div>
					</div>
				</div>
			</div>
		</div><!-- End grid -->
	</div><!-- End Main-container -->
	<div class="margin100"></div>
	
	<script type="text/javascript">
		$(function(){
			$('.amenities').addClass('uk-active');
		})
		document.title = "Aurora Residence - Amenities";
	</script>

<?php include('footer.php'); ?>