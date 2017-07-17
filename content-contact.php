<section id="contact">
		<div class="flexDad fullPage contact fvAlign">

			<h2 class="centered fullWidth spaceAbove"> <?php echo get_field('contact_greeting'); ?> </h2>

			<div class="flexDad centerBlock fullWidth">
			<hr>
				<h3 class="flexKid centerBlock centered spaceAbove fullWidth"> <?php echo get_field('hours_header'); ?> </h3>
				<p class="fullWidth flexKid centered centerBlock">
					<?php echo get_field('hours'); 
					?>

				</p>
				<div class="spaceAbove"></div>
				<hr>
			</div>
			<div class="flexDad fullWidth" id="location">
				<h3 class="fullWidth centered spaceAbove"> <?php echo get_field('location_greeting'); ?> </h3>
					<p class="card centerBlock">
					<?php echo get_field('location_description'); ?>
					</p>
			</div>
			
			<div id="directions" class="flexDad fullWidth">
			<div class="flexDad fullWidth">
				<div class="flexKid">
					<h3 class="centerBlock centered spaceAbove"> <?php echo get_field('directions_greeting'); ?> </h3>
				<?php 
					$loop = new WP_Query( array(
						'post_type' => 'directions',
						'orderby' 	=> 'post-id',
						'order'		=> 'ASC'
						));
				 ?>

				 <?php while( 
				 $loop->have_posts() ) : $loop->the_post(); ?>

				 <?php switch(get_field('direction_type')){
				 			case "Transit":
				 				$class = 'fa fa-train';
				 				break;
				 			case "Driving":
				 				$class = 'fa fa-car';
				 				break;
				 			case "Alternative":
				 				$class = 'fa fa-bicycle';
				 				break;
				 			default:
				 				$class="monsters!";
				 				break;
				 		}

				  ?> 
				 	<h4><i class='<?php echo $class; ?>' aria-hidden="true"></i>&emsp; <?php echo get_the_title(); ?></h4>
					<p class="card centerBlock">
						<?php the_field('direction_description'); ?>
					</p>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</div>
				
			<?php if (!empty(get_field('google_maps_url'))): ?>
			<div class="imgHolder flexKid">
				<iframe src="<?php echo get_field('google_maps_url'); ?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		<?php endif; ?>
			</div>
		</div>
		<?php 
			$phone = get_field('phone_number');
			$altPhone = get_field('alt_phone');
			$email = get_field('contact_email');
			 ?>
		<?php if(!empty($phone || $email || $altPhone)): ?>

			<div class="flexDad smoosh fullWidth card">
				<h3 class="centerBlock centered">Get in Touch</h3>
			<div class="contactDetails flexDad card">
			<?php if(!empty($phone)): ?>
				<p class="">Phone: <?php echo $phone; ?> </p>
			<?php endif; ?>
			<?php if(!empty($altPhone)): ?>
				<p class="">Alt: <?php echo $altPhone; ?> </p>
			<?php endif; ?>
			<?php if(!empty($email)): ?>
				<p class="">Email: username@email.com </p>
			<?php endif; ?>
			</div>
			</div>
		<?php endif; ?>

		<?php 
			$twitter 	= get_field('twitter_link');
			$facebook 	= get_field('facebook_link');
			$instagram 	= get_field('instagram_link');
			$googlePlus = get_field('google_plus_link');
			$pinterest 	= get_field('pinterest_link');
		 ?>
		<?php if (!empty($twitter || $facebook || $instagram || $googlePlus)): ?>
		<div class="fullWidth alignBot">
		<br><br>
		
		<h3 class="centered">Follow Us!</h3>
			<div class="socialMedia flexDad-nowrap">
			<?php if (!empty($facebook)): ?>
				<a class="socialHolder fb" href="<?php echo $facebook; ?>">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
			<?php if (!empty($twitter)): ?>
				<a class="socialHolder twt" href="<?php echo $twitter; ?>">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
			<?php if(!empty($googlePlus)): ?>
				<a class="socialHolder gplus" href="<?php echo $googlePlus; ?>">
					<i class="fa fa-google-plus" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
			<?php if(!empty($pinterest)): ?>
				<a class="socialHolder pint" href="<?php echo $pinterest; ?>">
					<i class="fa fa-pinterest-p" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
			<?php if(!empty($instagram)): ?>
				<a class="socialHolder inst" href="<?php echo $instagram; ?>">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			<?php endif; ?>

			</div>
		</div>
		<?php endif; ?>
		</div>
		
	</section>

</main>