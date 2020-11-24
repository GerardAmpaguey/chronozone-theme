<?php get_header();?>


<div class="topmost">
    <div class="back">
        <button onclick="history.go(-1);"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
    </div>
    <div class="search-singlestreamer">
        <?php get_search_form();?>
    </div>
</div>

<?php 
global $wpdb;
$streamerAcct = get_the_id();
$streamers = $wpdb->get_results( "SELECT user_id FROM $wpdb->usermeta WHERE meta_key = 'useracct' AND meta_value = $streamerAcct" );
$streamerID;
if( $streamers ) {
	foreach ( $streamers as $streamer ) {
		$streamerID = $streamer->user_id;
        $streamer_info   = get_userdata( $streamerID);
        $streamName     = $streamer_info->first_name . ' ' . $streamer_info->last_name;
        $streamerNiceName = $stream_info->user_nicename;
        //echo $streamerID;
	}
}

?>

<main>
    <div class="streamer-name">
      <?php
        $args = array(  
        'post_type' => 'streamers',
        'post_status' => 'publish',
        'author'=>$streamerID,
            );
        $myuser = new WP_Query( $args ); ?>    
        <?php 
            while ( $myuser->have_posts() ) : $myuser->the_post(); ?>

        <h1><span><?php echo get_the_title();?></span></h1>
        <?php endwhile;wp_reset_postdata(); ?>
    </div>
		<div class="container dflex">
            <div class='user-info d70'>
             <?php 
                      echo get_wp_user_avatar($streamer->user_id);
                //echo do_shortcode('[avatar_upload user="'.$current_user->ID.'"]');
                    ?>
            </div>
            <div class="d60 bio">
                <?php
            $args = array(  
            'post_type' => 'streamers',
            'post_status' => 'publish',
            'author'=>$streamerID,
            );
            $myBio = new WP_Query( $args ); ?>  
            <?php while ( $myBio->have_posts() ) : $myBio->the_post();?>
                <h3>About Me:</h3>
                <p><?php the_field('bio');?></p>
              <?php endwhile;wp_reset_postdata(); ?>
             </div>

            <?php
            $args = array(  
            'post_type' => 'streamers',
            'post_status' => 'publish',
            'author'=>$streamerID,
            );
            $loop = new WP_Query( $args ); ?>  
        </div>       
        <div class="socmed">

                <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                <a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
                <?php //<h3><?php echo "Email: ". $current_user->user_email;</h3>?>
                <a href="<?php the_field('twitter'); ?>" ><i class="fa fa-twitter"></i></a>
                <a href="<?php the_field('instagram'); ?>"><i class ="fa fa-instagram"></i></a>
                <a href="<?php the_field('twitch'); ?>" ><i class="fa fa-twitch"></i></a>
                <a href="<?php the_field('youtube'); ?>" ><i class="fa fa-youtube"></i></a>
                <a href="<?php the_field('youtube'); ?>" ><i class="fa fa-reddit"></i></a>
                <?php/* acf_form();?>
                <?php endwhile; */?>
              <?php endwhile;wp_reset_postdata(); ?>
        </div>
        <div class="streamer-name">
        <h1><span>Schedule Overview</span></h1>
        </div>
	<section class="schedview-sc">
        <div class="container content-wrap">
            
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'schedules',
            'post_status' => 'publish',
            'meta_key'=>'schedule_start_date',
            'orderby'=>'meta_value',
            'order'=>'DESC',  
            'author' => $streamerID,
            'posts_per_page' => 10,
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
                        <th>Stream Title</th>
                        <th>Details</th>
                        <th>Link</th>
                    </tr>

                    <?php while( $schedules->have_posts() ) :
                    $schedules->the_post();?>

                    <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="sched"><?php echo get_the_content();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details: </a><i class="fa fa-link" aria-hidden="true"></i></td>

                    </tr>

                <?php endwhile; ?>
                <?php wp_reset_postdata();?>
                </table>
          

            </div>
            <?php else : ?>
            <p>No Schedules Yet</p>
            <?php endif;?>


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
            'author' => $streamerID,
            //'paged' => $paged,
            
        );
            $facebook = new WP_Query( $args );
            ?>
            
            <div class="streamtable">
                <h5><i class="fa fa-facebook"></i>Facebook</h5>
                <table class="streams">
                    <tr>
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $facebook->have_posts() ) :
                    $facebook->the_post();?>

                   <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                      
                        
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
   
    
</div>
</div>






        <div class="container content-wrap">
            <?php
            //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'youtubeEvents',
            'post_status' => 'publish',
            'author' => $streamerID,
            //'paged' => $paged,
            
        );
            $youtube = new WP_Query( $args );
            ?>
            
            <div class="streamtable">
                <h5><i class="fa fa-youtube"></i>Youtube</h5>
                <table class="streams">
                    <tr>
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $youtube->have_posts() ) :
                    $youtube->the_post();?>

                    <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                      
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
     <?php get_template_part('includes/facebook', 'editForm'); ?>
    
    
   
</div>
</div>




        <div class="container content-wrap">
            <?php
            //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'twitchEvents',
            'post_status' => 'publish',
            'author' => $streamerID,
            //'paged' => $paged,
            
        );
            $twitch = new WP_Query( $args );
            ?>
            
            <div class="streamtable">
                <h5><i class="fa fa-twitch"></i>Twitch</h5>
                <table class="streams">
                    <tr>
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $twitch->have_posts() ) :
                    $twitch->the_post();?>

                    <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
    
    
    
</div>
</div>
 

 <?php get_template_part('includes/facebook', 'updateForm'); ?>
     
</div>
    </section>

</main>
<?php get_footer(); ?>