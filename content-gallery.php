<?php 
//gallery variables
	$gallery_text 	= get_field('gallery_text_1');
	$gallery_text_2	= get_field('gallery_text_2');
	$image_1 		= get_field('gallery_image_1');
	$image_2 		= get_field('gallery_image_2');
	$image_3 		= get_field('gallery_image_3');

	$images = array();

	if (!empty($image_1)){
		array_push($images, $image_1);
	}
	if (!empty($image_2)){
		array_push($images, $image_2);
	}
	if (!empty($image_3)){
		array_push($images, $image_3);
	}


 ?>


	<section class="sideBySide fullPage flexDad" id="gallery">

		<div class="flexDad">
			<div class="left side"> 
			<h3 class="centerBlock centered"> <?php echo get_field('gallery_heading'); ?> </h3>
			<p>	
			<?php if (!empty($gallery_text) ){
				echo $gallery_text;
				}   ?>
			</p>  </div>
			<div class="right side">
				<h2 class="centerBlock"> <?php echo get_field('gallery_title'); ?>  </h2>
	
			
				<div class="imgHolder centerBlock">
					<img  src="<?php echo $images[0]['url']; ?>" id="theImage" class="img centerBlock">
					<div class="flexDad-nowrap smoosh">
					<?php 
						foreach ($images as $i=>$pic):
					 ?>
						<div data-url='<?php echo $pic["url"]; ?>' class="tinyCircle" id="img<?php echo $i; ?>"></div>
					<?php endforeach ?>				
					</div>
				</div>

				<p class="centerBlock card">
					<?php if (!empty($gallery_text_2) ){
				echo $gallery_text_2;
				}   ?>
				</p>
			 </div>


		</div>
	</section>