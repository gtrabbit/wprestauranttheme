
	<section class="menu fullSizeBackground"  data-type="background" data-speed="5" data-offset="180" id="menu" data-url="<?php echo get_field('menu_background')['url']; ?>" >
	<br><br><br>
		<h2 class="centered"> <?php echo get_field('menu_title'); ?> </h2>
		<p class="headingDesc centered"> <?php echo get_field('general_menu_description'); ?> 	  </p>
		<div class="flexDad">

			<div class="flexKid menuCat">
				<h3 class="menuHeading centered"> <?php 
				 		$obj = get_post_type_object('breakfast_menu');
				 		echo $obj->labels->singular_name;
				 	?> 
				</h3>
				<p class="headingDesc"> 
					<?php echo get_field('breakfast_menu_description'); ?> 	  
				</p>

				<?php 
					$loop = new WP_Query( array(
						'post_type' => 'breakfast_menu',
						'orderby' 	=> 'post-id',
						'order'		=> 'ASC'
						));
				 ?>

				 <?php while( 
				 $loop->have_posts() ) : $loop->the_post(); ?>
				 	<div class="menuOption flexDad">
					<div class="itemName"> <?php the_field('item_name') ?> </div>
					<div class="itemPrice"> <?php the_field('item_price') ?> </div>
					<div class="itemDesc"> <?php the_field('item_description') ?> </div>
				</div>
	
				<?php endwhile; ?>

			</div>

			<div class="flexKid menuCat">
			<h3 class="menuHeading"> 
				<?php 
					$obj = get_post_type_object('lunch_menu');
					echo $obj->labels->singular_name;
				 ?> 
			</h3>
			<p class="headingDesc"> 
			<?php echo get_field('lunch_menu_description'); ?> 	
			</p>
				
				<?php 
					$loop = new WP_Query( array(
						'post_type' => 'lunch_menu',
						'orderby' 	=> 'post-id',
						'order'		=> 'ASC'
						));
				 ?>

				 <?php while( 
				 $loop->have_posts() ) : $loop->the_post(); ?>
				 	<div class="menuOption flexDad">
					<div class="itemName"> <?php the_field('item_name') ?> </div>
					<div class="itemPrice"> <?php the_field('item_price') ?> </div>
					<div class="itemDesc"> <?php the_field('item_description') ?> </div>
				</div>
	
				<?php endwhile; ?>

			</div>
			<div class="flexKid menuCat">
			<h3 class="menuHeading"> <?php 
				 		$obj = get_post_type_object('dinner_menu');
				 		echo $obj->labels->singular_name;
				 	?>  </h3>
			<p class="headingDesc"> <?php echo get_field('dinner_menu_description'); ?> 	</p>
				<?php 
					$loop = new WP_Query( array(
						'post_type' => 'dinner_menu',
						'orderby' 	=> 'post-id',
						'order'		=> 'ASC'
						));
				 ?>

				 <?php while( 
				 $loop->have_posts() ) : $loop->the_post(); ?>
				 	<div class="menuOption flexDad">
					<div class="itemName"> <?php the_field('item_name') ?> </div>
					<div class="itemPrice"> <?php the_field('item_price') ?> </div>
					<div class="itemDesc"> <?php the_field('item_description') ?> </div>
				</div>
	
				<?php endwhile; ?>


			</div>
						<div class="flexKid menuCat">
			<h3 class="menuHeading"> <?php 
					$obj = get_post_type_object('sides_menu');
					echo $obj->labels->singular_name;
				 ?>  </h3>
			<p class="headingDesc"> <?php echo get_field('sides_menu_description'); ?>  </p>
				<?php 
					$loop = new WP_Query( array(
						'post_type' => 'sides_menu',
						'orderby' 	=> 'post-id',
						'order'		=> 'ASC'
						));
				 ?>

				 <?php while( 
				 $loop->have_posts() ) : $loop->the_post(); ?>
				 	<div class="menuOption flexDad">
					<div class="itemName"> <?php the_field('item_name') ?> </div>
					<div class="itemPrice"> <?php the_field('item_price') ?> </div>
					<div class="itemDesc"> <?php the_field('item_description') ?> </div>
				</div>
	
				<?php endwhile; ?>
			</div>
		
			<?php wp_reset_query(); ?>
		</div>

	</section>