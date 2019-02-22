<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container  main-cont">
		<div class="uk-slidenav-position"  data-uk-slideshow="{autoplay:true}">
		    <ul class="uk-slideshow">
		        <li><img src="img/floorPlans/banner.jpg" alt="Slider1"></li>
		        <li><img src="img/floorPlans/banner2.jpg" alt="Slider1"></li>
		    </ul>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
		</div>
		<div class="am-text-ul nobord">
			Aurora Residences offers Studio units at 23 square meters, One Bedroom Units at 34 square meters, to 2 bedroom units at 46 square meters. Add a dash of style by picking units with a balcony or a garden. All units come with a 1 square meter drying area at the roof deck, so that your laundry won't add clutter to your living area.
		</div>

		<div class="margin30"></div>
		<!-- Array Declarations for Dynamic Floor Plans and Lightbox -->
			<?php 
			$fplan = array( 
						array("Studio Unit", "23.92 sm" , "Studio Unit, 23.92 sm"),
						array("One Bedroom Unit", "35.26 sm" , "One Bedroom Unit, 35.26 sm"),
						array("Two Bedroom Unit w/ Balcony", "51.58 sm" , "Two Bedroom Unit w/ Balcony, 51.58 sm"),
						array("Studio Unit w/ Garden", "30.22 sm" , "Studio Unit w/ Garden, 30.22 sm"),
						array("One Bedroom Unit w/ Balcony", "39.74 sm" , "One Bedroom Unit w/ Balcony, 39.74 sm"),
						array("Two Bedroom Unit w/ Balcony", "52.34 sm" , "Two Bedroom Unit w/ Balcony, 52.34 sm"),
						array("Studio Unit", "19.9 sm" , "Studio Unit, 19.9 sm"),
						array("One Bedroom Unit w/ Garden", "47.86 sm" , "One Bedroom Unit w/ Garden, 47.86 sm"),
						array("Two Bedroom Unit", "47.30 sm" , "Two Bedroom Unit, 47.30 sm"),
						array("One Bedroom Unit", "28.81 sm" , "One Bedroom Unit, 28.81 sm"),
						array("One Bedroom Unit w/ Garden", "62.73 sm" , "One Bedroom Unit w/ Garden, 62.73 sm"),
						array("One Bedroom Unit w/ Garden", "50.97 sm" , "One Bedroom Unit w/ Garden, 50.97 sm")
			        ); 
			?>
		<!-- Array Declarations for Dynamic Floor Plans and Lightbox -->

		<div class="flp-cont">
			<div class="uk-grid">
				<?php for ($i=0; $i < 12 ; $i++) { ?>
				<div class="uk-width-small-1-3">
					<div class="fp-grid">
						<a href="img/floorPlans/s<?php echo $i+1 ;?>.jpg" data-uk-lightbox="{group:'floor-plans'}" title="<?php echo $fplan[$i][2]; ?>">
							<div class="img">
								<img src="img/floorPlans/thmb/<?php echo $i+1 ;?>.jpg" alt="Aurora Floor Plans" />
							</div>
						</a>
						<div class="fp-foot">
							<div class="title"><?php echo $fplan[$i][0]; ?></div>
							<div class="sm"><?php echo $fplan[$i][1]; ?></div>
						</div>
					</div>
				</div>
				<?php
				} ?>
			</div>
		</div>

		<div class="am-text-ul nobord">
			Aurora incorporates several features with the resident’s convenience in mind. Units are fitted with more than the usual offerings, coming equipped with both upper and lower cabinets in kitchen areas unlike other developers who do not offer this alternative. Bedrooms will not be fitted with cabinets to give residents more freedom when customizing their layouts while bathrooms come fully equipped with an exposed tubular shower fixture, saving you time and money, while all rooms come fully furnished with 60cm x 60cm porcelain tiles giving an easy to maintain surface in floors in rooms both small and large.
		</div>
			
		<div class="home-text-bottom">
			<div class="hr-red">
				<span class="hl-text">turnover finishes</span>
			</div>
		</div>
		<div class="margin50"></div>
		<div class="uk-grid">
			<div class="uk-width-medium-1-2">
				<div class="itm-box">
					<div class="uk-grid uk-grid-collapse">
						<div class="uk-width-1">
							<div class="tr-title">Floors</div>
						</div>
						<div class="uk-width-2-3">
							<div class="text-cont-tr">
								<span>60x60 cm porcelain tiles for:</span>
								<ol type="1">
									<li>Studio units.</li>
									<li>Living Room 1 bedroom and 2 bedroom units.</li>
									<li>Dining Room 1 bedroom and 2 bedroom units.</li>
									<li>Kitchens.</li>
									<li>Hallways and alleys.</li>
									<li>Bathrooms.</li>
								</ol>
								<span>Laminated planks in all bedrooms. (for a more homely feel)</span>
							</div>
						</div>
						<div class="uk-width-1-3 uk-text-right">
							<img src="img/floorPlans/finishes.png" alt="Finishes" />
						</div>
					</div>
				</div>

				<div class="margin30"></div>
				<div class="itm-box">
					<div class="uk-grid uk-grid-collapse">
						<div class="uk-width-1">
							<div class="tr-title">Cabinets</div>
						</div>
						<div class="uk-width-1">
							<div class="text-cont-tr">
								Cabinets will be used in the kitchen, these cabinets will be made of highly gloss 
								painted solid wood,  laminated wood has poor water resistance.  <br><br>
								Our units will have both upper and lower cabinets in the kitchens, unlike other
								developers who only provide the lower cabinet for the kitchen or  does not provide
								any cabinet at all. <br><br>
								Units also come with provision (abang) for a washing machine near the electrical 
								supply by the kitchen. In case our new homeowners do not want to use this,  they
								can use the space for a refrigerator.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-2">
				
				<div class="itm-box">
					<div class="uk-grid uk-grid-collapse">
						<div class="uk-width-1">
							<div class="tr-title">Kitchen</div>
						</div>
						<div class="uk-width-1">
							<div class="text-cont-tr">
								<ol type="1">
									<li>Granite kitchen counter top.</li>
									<li>Gas stoves will not be allowed:</li>
									<ul class="nopad nomarg" style="padding-left:15px;">
										<li>Gas stoves require regular delivery which may damage the floors and elevator</li>
										<li>We want to avoid possible explosions</li>
									</ul>
								</ol>
							</div>
						</div>
					</div>
				</div>

				<div class="margin30"></div>

				<div class="itm-box">
					<div class="uk-grid uk-grid-collapse">
						<div class="uk-width-1">
							<div class="tr-title">Bathroom</div>
						</div>
						<div class="uk-width-2-3">
							<div class="text-cont-tr">
								The shower comes with an exposed tubular shower fixture.
								This is more expensive but is more convenient for our new 
								home owners. (In the case of a plumbing issue, they don’t 
								have to take down the wall to repair the water line)
							</div>
						</div>
						<div class="uk-width-1-3 uk-text-right">
							<img src="img/floorPlans/bathroom.png" alt="Finishes" />
						</div>
					</div>
				</div>

				<div class="margin30"></div>

				<div class="itm-box">
					<div class="uk-grid uk-grid-collapse">
						<div class="uk-width-1">
							<div class="tr-title">GEnerator</div>
						</div>
						<div class="uk-width-1">
							<div class="text-cont-tr">
							<span>In the event of a power outage, the generator can power:</span>
							<div class="nopad nomarg" style="padding-left:20px">
								1 Light per room.<br />
								1 Refrigerator per room.<br />
								1 Doorbell per room.
							</div>
							<span>Common Areas with power include :</span>
							<div class="nopad nomarg" style="padding-left:20px">
								Administrator Office. <br />
								1 Elevator.<br />
								All pumps for sump pit.<br />
								Transfer Pump from Cistern to Overhead Tank and booster tank. 
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</div><!-- End Main-container -->
	<div class="margin100"></div>

	<script type="text/javascript">
		$(function(){
			$('.fplans').addClass('uk-active');
		})
		document.title = "Aurora Residences - Floor Plans";
	</script>

<?php include('footer.php'); ?>