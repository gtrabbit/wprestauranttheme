
	<section id="pointLessPhoto" class="fullSizeBackground pointlessPhoto fullPage" data-image="<?php echo get_field('backdrop')['url']; ?>">
		<div class="flexDad fvAlign fullPage">
		<?php 
		$headerText = get_field('header');
		if (!empty($headerText)): ?>
<h2 class="centerBlock centered bigCaption"><?php echo $headerText; 
		endif; ?></h2>
		</div>
	</section>