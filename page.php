
<?php get_header();?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), ); ?>

<div class="accounts-background" style="background-image: url('<?php echo $url ?>')"></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>


<?php get_footer();?>