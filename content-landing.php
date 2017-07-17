<main>


<?php 

	$menu_title 	= get_field('menu_title');
	$about_title 	= get_field('about_title');
	$gallery_title 	= get_field('gallery_title');
	$contact_title 	= get_field('contact_title');
 ?>
	<section class="landing fullPage fullSizeBackground" id="landing"  data-type="background" data-speed="5" data-offset="0" data-url="<?php echo get_field('landing_background')['url']; ?>" >
		<div class="landingTitleHolder" id="landingTitleHolder">
			<h1 class="landingTitle" id="title">
				 <?php bloginfo('name') ?>
			</h1>
		
		<p class="about-brief tagline"> <?php bloginfo('description') ?> </p> 
		</div>
		<div class="bottom centerBlock">
		<div class="halfLine" id="landingLine"> </div>
			<div class="flexDad-nowrap">
			<a class="tinies" href="#menu"> <?php echo $menu_title; ?> </a>
			<a class="tinies" href="#about"> <?php echo $about_title; ?> </a>
			<a class="tinies" href="#gallery"> <?php echo $gallery_title; ?> </a>
			<a class="tinies" href="#contact"> <?php echo $contact_title; ?> </a>
		</div>
		</div>
		

	</section>