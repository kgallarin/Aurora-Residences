<?php include('header.php'); ?>
	<!-- End Header -->
	<div class="main-container main-cont">
		
		<div class="margin50"></div>
		<div class="margin30"></div>
		<?php include('blogitems.php'); ?>
		<div class="uk-grid">
			<div class="uk-width-medium-3-4 uk-width-small-1-1">
			<?php 
				if(isset($_GET['cat'])){
					$cat = $_GET['cat'];
				
				for ($i=1; $i < 21 ; $i++) {
					if($blog[$i][3] == $cat){
				 ?>
					<div class="uk-width-1">
						<div class="blog-item">
							<div class="title">
								<a href="blog.php?bid=<?php echo $blog[$i][0]; ?>">
									<?php echo $blog[$i][1]; ?>
								</a>
							</div>
								<hr class="uk-hr uk-visible-small hr-title">
							<div class="uk-clearfix" style="margin-top: 1.3%;">
							<div class="img" style="background:url('img/blog/<?php echo $blog[$i][4]; ?>.jpg') no-repeat center / cover ;"></div>
							<div class="descript">
								<?php echo $blog[$i][2]; ?>
								... <span class="readmore"><a href="blog.php?bid=<?php echo $blog[$i][0]; ?>">Read more</a></span>
							</div>
							</div>
								<hr class="uk-hr uk-visible-small">

						</div>
					</div>
				<?php
					}
				} ?>

			<?php

				}
				else{
			 ?>

			
				<?php for ($i=1; $i < 21 ; $i++) { ?>
				<div class="uk-width-1">
					<div class="blog-item">
						<div class="title">
							<a href="blog.php?bid=<?php echo $blog[$i][0]; ?>">
								<?php echo $blog[$i][1]; ?>
							</a>
						</div>
							<hr class="uk-hr uk-visible-small hr-title">
						<div class="uk-clearfix" style="margin-top: 1.3%;">
						<div class="img" style="background:url('img/blog/<?php echo $blog[$i][4]; ?>.jpg') no-repeat center / cover ;"></div>
						<div class="descript">
							<?php echo $blog[$i][2]; ?>
							... <span class="readmore"><a href="blog.php?bid=<?php echo $blog[$i][0]; ?>">Read more</a></span>
						</div>
						</div>
							<hr class="uk-hr uk-visible-small">

					</div>
				</div>
				<?php
				} ?>
			 <?php } ?>
			 </div>
			<div class="uk-width-medium-1-4 uk-width-small-1-1">
				<div class="blog-side-title">Like Us on Facebook!</div>
				<div class="fb-page" data-href="https://www.facebook.com/AuroraResidences" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/AuroraResidences"><a href="https://www.facebook.com/AuroraResidences">Aurora Residences</a></blockquote></div></div>
				
				<div class="margin30"></div>
				
				<div class="blog-side-title">Aurora Residences</div>
				<div class="side-links">
					<a href="blogs.php?cat=blog">Blog</a> 
					<a href="blogs.php?cat=cl">Condo Living</a> 
					<a href="blogs.php?cat=lifestyle">Lifestyle</a> 
					<a href="blogs.php?cat=press">Press</a> 
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