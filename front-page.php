<?php get_header();?>






<div class="content-wrap2">

	<h1><?php echo bloginfo('name');?></h1>
	<p><?php echo do_shortcode( '[live_simple_clock]' );?></p>
	<div class="searchtest">
		<?php get_search_form();?>
	</div>
	<h2><?php echo bloginfo('description');?></h2>
</div>

<?php get_footer();?>
