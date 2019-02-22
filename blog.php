<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container main-cont">
		
		<div class="margin50"></div>
		<div class="margin30"></div>
		<?php 
		include('blogitems.php');
			if(isset($_GET['bid'])){
				$cat = $_GET['bid'];
			}
		 ?>
		<div class="uk-grid">
			<div class="uk-width-medium-3-4 uk-width-small-1-1">
					<img src="img/blog/<?php echo $blogItem[$cat][4]; ?>.jpg" alt="Blog Image"/>
				<div class="blog-desc-cont">
					<div class="blog-title">
						<?php echo $blogItem[$cat][1]; ?>
					</div>
					<div class="blog">
						<?php echo $blogItem[$cat][2]; ?>
					</div>
				</div>
			</div>

			<div class="uk-width-medium-1-4 uk-width-small-1-1">
				<div class="blog-side-title">Like Us on Facebook!</div>
				<div class="fb-page" data-href="https://www.facebook.com/AuroraResidences" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/AuroraResidences"><a href="https://www.facebook.com/AuroraResidences">Aurora Residences</a></blockquote></div></div>
				
				<div class="margin30"></div>
				
				<div class="blog-side-title">Aurora Residences</div>
				<div class="side-links">
					<a href="">Blog</a> 
					<a href="">Condo Living</a> 
					<a href="">Lifestyle</a> 
					<a href="">Press</a> 
				</div>

				<div class="margin30"></div>

				<div class="blog-side-title">What's Happening</div>
				<div class="side-links">
					<?php for ($i=1; $i < 6 ; $i++) { ?>
					<a href="blog.php?bid=<?php echo $blog[$i][0]; ?>"><?php echo $blog[$i][1]; ?></a> 
					<?php } ?>
				</div>

				<div class="margin30"></div>

				<div class="blog-side-title">Inquire Now</div>
				<?php include('mailer.php'); ?>
			</div>
		</div>
	</div><!-- End Main-container -->
	<div class="margin100"></div>

	<script type="text/javascript">
		$(function(){
			$('.updates').addClass('uk-active');
		})
		document.title = "Aurora Residence - Blogs";
	</script>

<?php include('footer.php'); ?>