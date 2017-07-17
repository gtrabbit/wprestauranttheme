
<?php 
	//about section
	$top_text		= get_field('top_text');
	$bottom_text 	= get_field('bottom_text');
 ?>

	<section class="about fullPage" id="about">

		<div class="flexDad fvAlign fullPage">
			<div class="flexKid card">
		
			<?php echo $top_text; ?>
				
			</div> 
			<div class="division">
			
			</div>
			
				
			<div class="flexKid card">
				
			<?php echo $bottom_text; ?>

			</div>
		</div>
	</section>
