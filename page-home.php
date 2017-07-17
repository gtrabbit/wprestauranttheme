<?php
/*
	Template Name: Home Page
*/




get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/js/main.js"></script>

	<?php get_template_part('content','landing'); ?>

	<?php get_template_part('content','about'); ?>

	<?php get_template_part('content','menu'); ?>

	<?php get_template_part('content','gallery'); ?>

	<?php get_template_part('content','splash'); ?>

	<?php get_template_part('content','contact'); ?>

<?php

get_footer();
?>