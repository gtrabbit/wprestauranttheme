<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mint_and_Marzipan
 */

?>

<?php 
	global $wp_query;
	$post = $wp_query->post;
 ?>

<footer class="footer">
	<h2 class="centerBlock centered fullWidth">  <?php bloginfo('name'); ?> </h2>
	<hr>
	<div class="flexDad">
		<div >
			<h3>Navigation:</h3>
			<a href="#menu"> <?php echo get_field('menu_title'); ?> </a> <br>
			<a href="#about"> <?php echo get_field('about_title'); ?> </a> <br>
			<a href="#gallery"> <?php echo get_field('gallery_title'); ?> </a> <br>
			<a href="#contact"> <?php echo get_field('contact_title'); ?> </a>
		</div>
		<div class="address">
			<p> <?php echo bloginfo('name'); ?> </p>
			<p> <?php echo get_field('address'); ?> </p>
			<p> <?php echo get_field('phone_number'); ?> </p>
			<p> <?php echo get_field('alt_phone'); ?> </p>
		</div>
		<?php 
		$footerText = get_field('footer_text');
		if(!empty($footerText)): ?>
			<div class="footerText">
				<p> <?php echo $footerText; ?> </p>
			</div>
		<?php endif; ?>
		
	</div>
	
	
</footer>

<?php wp_footer(); ?>

</body>
</html>
