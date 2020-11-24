<? /* Template Name: streams-theme */?>
<?php //get_template_part('js/sql', 'event');?>



<?php get_header();?>
    <div class="streamer-name">
        <h1><span>Calendar</span></h1>
    </div>

	<section class="content">
		<div class="content-wrap">
		<?php //get_template_part('includes/sql', 'event');?>
		</div>
	</section>
	<section class="calendar-sc">
		<div class="content-wrap container">
        <?php get_template_part('calendar/section', 'streamCalendar');?>

		</div>
	</section>
	<?//POSTS?>
     <div class="new-events">
        <h1><span>Upcoming Streams</span></h1>
    </div>
	<section class="schedview-sc">
		<div class="content-wrap container">
			 <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'schedules',
            'post_status' => 'publish',
            'posts_per_page'    => 10,
            //'meta_key'=>'schedule_start_date schedule',
            'orderby'=>'meta_value',
            'order'=>'ASC',  
            'author' => $userID,
            //'posts_per_page' => 5,
            'paged' => $paged,
            /*'meta_query'     => array(array(
                   'key'    => 'schedule_start_date',
                   'value'  => $today,
                   'compare'=> '>=',
               ))*/
        );
			$schedules = new WP_Query( $args );
            if( $schedules->have_posts() ) :
            ?>

            <div class="streamtable">
                <table class="streams">
                    <tr>
                    	<th>Streamer</th>
                        <th>Stream Title</th>
                        <th>Details</th>
                        <th>Link</th>
                    </tr>

                    <?php while( $schedules->have_posts() ) :
                    $schedules->the_post();

                    $post_author = get_post_field( 'post_author', $post_id );
                    ?>

                    <tr>
                    	<td class="streamer"><a href="<?php echo site_url();?>/streamers/<?php echo get_the_author_meta('user_nicename', $post_author); ?>"><?php echo get_the_author();  ?></a></td>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="sched"><?php echo get_the_content();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                    </tr>
                
                <?php endwhile; wp_reset_postdata();?>
                </table>
                <!--
                <li><?php printf( '%1$s - %2$s', get_the_title(), get_the_content() );  ?></li>
                <a href="<?php the_permalink(); ?>";>View Schedule</a><a onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"  href="<?php echo get_delete_post_link( get_the_ID() ); ?>"> / Delete Schedule</a>
                
                insert this inside while loop.. removed it because it appears on every row item
                -->
            </div>
		<?php else :esc_html_e('No Content Yet');endif;?>
        </div>

	    </div>


	  </section>
    <section class="selected platforms">
        <div class="streamer-name">
            <h1><span>Specific Platforms</span></h1>
        </div>
    </section>
    <section class="specific platforms">
        <div class="container dflex">
           <div class="container content-wrap">
            <?php
            //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'facebookEvents',
            'post_status' => 'publish',
            'author' => $userID,
            //'paged' => $paged,
            
        );
            $facebook = new WP_Query( $args );
            ?>
            
            <div class="streamtable">
                <h5><i class="fa fa-facebook"></i>Facebook</h5>
                <table class="streams">
                    <tr>
                        <th>Streamer</th>
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $facebook->have_posts() ) :
                    $facebook->the_post();?>

                   <tr>
                        <td class="streamer"><a href="<?php echo site_url();?>/streamers/<?php echo get_the_author_meta('user_nicename', $post_author); ?>"><?php echo get_the_author();  ?></a></td>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        <td class="edit"><a id="" class="trigger_popup facebookUpdate btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <a class="trigger_popup" onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link(get_the_ID()); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
    
    <button href="<?php echo $editBio_post;?>"class="trigger_popup facebook btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
    
</div>
</div>






        <div class="container content-wrap">
            <?php
            //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'youtubeEvents',
            'post_status' => 'publish',
            'author' => $userID,
            //'paged' => $paged,
            
        );
            $youtube = new WP_Query( $args );
            ?>
            
            <div class="streamtable">
                <h5><i class="fa fa-youtube"></i>Youtube</h5>
                <table class="streams">
                    <tr>
                        <th>Streamer</th>
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $youtube->have_posts() ) :
                    $youtube->the_post();?>

                    <tr>
                        <td class="streamer"><a href="<?php echo site_url();?>/streamers/<?php echo get_the_author_meta('user_nicename', $post_author); ?>"><?php echo get_the_author();  ?></a></td>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        <td class="edit"><a id="" class="trigger_popup facebookUpdate btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                         <a class="trigger_popup" onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link(get_the_ID()); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
    
    <button href="<?php echo $editBio_post;?>"class="trigger_popup facebook btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
    
   
</div>
</div>




        <div class="container content-wrap">
            <?php
            //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'twitchEvents',
            'post_status' => 'publish',
            'author' => $userID,
            //'paged' => $paged,
            
        );
            $twitch = new WP_Query( $args );
            ?>
            
            <div class="streamtable">
                <h5><i class="fa fa-twitch"></i>Twitch</h5>
                <table class="streams">
                    <tr>
                        <th>Streamer</th>
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $twitch->have_posts() ) :
                    $twitch->the_post();?>

                    <tr>
                        <td class="streamer"><a href="<?php echo site_url();?>/streamers/<?php echo get_the_author_meta('user_nicename', $post_author); ?>"><?php echo get_the_author();  ?></a></td>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        <td class="edit"><a id="" class="trigger_popup facebookUpdate btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                         <a class="trigger_popup" onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link(get_the_ID()); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
     
    <button href="<?php echo $editBio_post;?>"class="trigger_popup facebook btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
    
   
</div>
</div>
 

 
     
</div>
    </section>














<?php get_footer();?>