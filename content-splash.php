<?php 
	$backdrop = get_field('backdrop');
 ?>


	<section id="pointLessPhoto" class="fullSizeBackground pointlessPhoto fullPage" data-image="<?php echo $backdrop['url']; ?>">
		<div class="flexDad fvAlign">
		<?php 
		$headerText = get_field('header');
		if (!empty($headerText)): ?>
<h2 class="centerBlock centered bigCaption"><?php echo $headerText; 
		endif; ?></h2>
		</div>
	</section>