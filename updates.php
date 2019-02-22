<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container main-cont">
	<div class="slider-active-img slider-style">
		<img src="img/updates/1.jpg" alt="Active Image Slider" style="width:100%;" >
	</div>
	<div class="uk-slidenav-position" data-uk-slider="{center:true}">
		<div class="uk-slider-container" >
		    <div class="uk-slider-container">
		        <ul class="uk-slider uk-grid-width-medium-1-6 uk-grid-width-1-2">
		        	<?php for ($i=0; $i < 9; $i++) { ?>
		            <li>
		            	<div class="slide-img" data-src="<?php echo $i+1; ?>.jpg">
		            		<img src="img/updates/<?php echo $i+1; ?>.jpg" alt="">
		            	</div>
		            </li>
		            <?php 
		            } ?>
		        </ul>
		    </div>
		</div>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
    	<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
	</div>
	<div class="margin30"></div>
	<div class="am-text-ul nobord">
		Slightly over 1 year of the groundbreaking date, Aurora Residences is on track to completion by December 2014. The Project, being completely privately funded means you don't have to worry about developers defaulting on their commitments.
	</div>
	</div><!-- End Main-container -->
	<div class="margin100"></div>

	<script type="text/javascript">
		$(function(){
			$('.update').addClass('uk-active');

			$('.slide-img').click(function(){
				var click = $(this).attr('data-src');
				//alert(click);
				$('.slider-active-img img').attr('src','img/updates/'+click+'');
				$('.slider-active-img img').fadeIn( "fast", 0.33 );
			});
		})
		document.title = "Aurora Residences - Construction Updates";
	</script>

<?php include('footer.php'); ?>
