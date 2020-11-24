
<?php get_header();?>

<?php //echo $_GET['s'];
$search_streamer = $_GET['s'];
?>
<div class="topmost">
    <div class="back">
        <button onclick="history.go(-1);"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
    </div>
    <div class="search-singlestreamer">
        <?php get_search_form();?>
    </div>
</div>

<section class="container search-sc">

	<div class="content-wrap container">

		<div class="head dflex">
			<h2>Search Results</h2>
		</div>
      	<?php // The search term
		//$search_streamer = 'dwyt';
		// WP_User_Query arguments
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$stream_args = array (
		    //'role'       => 'subscriber',
		    'order'      => 'ASC',
		    'orderby'    => 'display_name',
		    'search'     => '*' . esc_attr( $search_streamer ) . '*',
		    'posts_per_page' => 3,
            'paged' => $paged,
		    'meta_query' => array(
		        'relation' => 'OR',
		        array(
		            'key'     => 'first_name',
		            'value'   => $search_streamer,
		            'compare' => 'LIKE'
		        ),
		        array(
		            'key'     => 'last_name',
		            'value'   => $search_streamer,
		            'compare' => 'LIKE'
		        ),
		        array(
		            'key'     => 'nickname',
		            'value'   => $search_streamer ,
		            'compare' => 'LIKE'
		        )
		    )
		);

		// Create the WP_User_Query object
		$streamer_query = new WP_User_Query( $stream_args );

		// Get the results
		$streamers = $streamer_query->get_results();

		?>
		<?php if ( ! empty( $streamers ) ) : ?>
		<div class="results dflex">

		    <?php
		    // loop through each author
		    foreach ( $streamers as $streamer ) : 
		    	// get all the user's data
		    	$streamer_info 	= get_userdata( $streamer->ID );
		    	$streamName 	= $streamer_info->first_name . ' ' . $streamer_info->last_name;
		    	$streamLink 	= $streamer_info->user_nicename;
		    	$streamImg 		= $streamer_info->avatar_thumb;
		    	echo $streamImg; ?>
		    	<div class="streamer-cont">
		    		<div class="contents">
			    		<h3 class="st-title" href="<?php echo site_url();?>/streamers/<?php echo $streamLink; ?>"><?php echo $streamName; ?></h3>
			    		<img class="stream-img" src="<?php echo esc_url( get_avatar_url( $streamer->ID ) ); ?>">
			    	</div>
			    	<a class="btn wrap" href="<?php echo site_url();?>/streamers/<?php echo $streamLink; ?>">View Profile</a>
		    	</div>
		        
		    <?php endforeach; ?>
      <?php if (function_exists("pagination")) {
          pagination($custom_query->max_num_pages);
      } ?>
		<?php else : ?>
		   <p>No authors found</p>
		<?php endif; ?>
		<?php //get_template_part('includes/section','content');?>
		</div>

</section>


<?php get_footer();?>