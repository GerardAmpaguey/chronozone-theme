<? /* Template Name: accounts-theme */?>
<?php get_template_part('includes/schedule', 'addEditFunction'); ?>



<?php $userID = get_current_user_id(); acf_form_head();?>


<?php 
global $current_user;
get_currentuserinfo();
?>

<?php get_header();?>

<?php //global $post_information;?>







<?php if ( is_user_logged_in() ) : ?>

	<div class="streamer-name">
        <?php
        $args = array(  
        'post_type' => 'streamers',
        'post_status' => 'publish',
        'author'=>$userID,
            );
        $myuser = new WP_Query( $args ); ?>    
        <?php 
            while ( $myuser->have_posts() ) : $myuser->the_post(); ?>
		<h1><button href="<?php echo $editBio_post;?>" class="trigger_popup user btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><span><?php echo get_the_title();?></span></h1>
        <?php get_template_part('includes/user', 'editForm');?>
        <?php endwhile;wp_reset_postdata(); ?>
	</div>
   <div class="container dflex">

        <div class="user-info d70"> 
        	 <?php 
				  echo get_wp_user_avatar($current_user->ID);
        	//echo do_shortcode('[avatar_upload user="'.$current_user->ID.'"]');
				?>
        </div>
         <div class="d60">  

        <?php
        $PostInfo;
        $args = array(  
        'post_type' => 'streamers',
        'post_status' => 'publish',
        'author'=>$userID,
            );
        $mybio = new WP_Query( $args ); ?>    
        <?php 
            while ( $mybio->have_posts() ) : $mybio->the_post(); ?>
                            <?php $PostInfo = get_field('bio'); ?>
         	<h3>About Me:</h3>
            <p><?php the_field('bio');?>
         
    		 <button href="<?php echo $editBio_post;?>"class="trigger_popup bio btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Update</button>
             <?php get_template_part('includes/bio', 'addform');?>
              <?php endwhile;wp_reset_postdata(); ?>

              
         </div>

        <?php
        $args = array(  
    	'post_type' => 'streamers',
    	'post_status' => 'publish',
    	'author'=>$userID,
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
            <button href="<?php echo $editBio_post;?>"class="trigger_popup socsite btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Update</button>
            <?php get_template_part('includes/socmed', 'editForm');?>
		  <?php endwhile;wp_reset_postdata(); ?>

    </div>
    <div class="streamer-name">
        <h1><i><span>My Schedules</span></i></h1>
    </div>
    <section class="oldschedules">
        <div class="container content-wrap">
            <?php
            //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            //$today = date('Y-m-d H:i:s');
            $args = array(
            'post_type'   => 'schedules',
            'post_status' => 'publish',
            'posts_per_page'    => -1,
            'meta_key'=>'schedule_start_date',
            'orderby'=>'meta_value',
            'order'=>'DESC',  
            'author' => $userID,
            //'posts_per_page' => 5,
            //'paged' => $paged,
            
        );
            $schedules = new WP_Query( $args );
            if( $schedules->have_posts() ) :
            ?>

            <div class="streamtable">
                <table class="streams">
                    <tr>
                        <th>Stream Title</th>
                        <th>Details</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $schedules->have_posts() ) :
                    $schedules->the_post();?>

                    <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="sched"><?php echo get_the_content();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        <td class="edit">
                          <section class="edit-button">
                            <div class="container dflex">
        <div>
            <a id="edit-<?php echo get_the_ID(); ?>" class="trigger_popup editAccsched"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
        </div>
    </section>
    <?php get_template_part('includes/schedule', 'editForm'); ?>
                            <?php if( !(get_post_status() == 'trash') ) : ?>
                                <div>
                                <a class="trigger_popup" onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link(get_the_ID()); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>
                            <?php endif; ?>
                        </td>
                    </tr>

                <?php get_template_part('includes/schedule', 'editForm'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata();?>

                </table>
          	     
               
            </div>
             <button class="trigger_popup addsched btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Schedule</button>
            <?php else : ?>
            <p>No Schedules Yet</p>
             <button class="trigger_popup addsched btn"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Schedule</button>
            <?php endif;?>
           

        </div>
    </section>


    <?php get_template_part('includes/schedule', 'addForm');?>
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
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $facebook->have_posts() ) :
                    $facebook->the_post();?>

                   <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        <td class="edit"><a id="edit-<?php echo get_the_ID(); ?>" class="trigger_popup facebookUpdate btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <a class="trigger_popup" onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link(get_the_ID()); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
     <?php get_template_part('includes/facebook', 'editForm'); ?>
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
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $youtube->have_posts() ) :
                    $youtube->the_post();?>

                    <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        <td class="edit"><a id="edit-<?php echo get_the_ID(); ?>" class="trigger_popup facebookUpdate btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                         <a class="trigger_popup" onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link(get_the_ID()); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
     <?php get_template_part('includes/facebook', 'editForm'); ?>
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
                        <th>Stream Title</th>
                        <th><i class="fa fa-link" aria-hidden="true"></i> Link</th>
                        <th></th>
                    </tr>

                    <?php while( $twitch->have_posts() ) :
                    $twitch->the_post();?>

                    <tr>
                        <td class="title"><?php echo get_the_title();  ?></td>
                        <td class="link"><a href="<?php the_permalink(); ?>";>More Details</a></td>
                        <td class="edit"><a id="edit-<?php echo get_the_ID(); ?>" class="trigger_popup facebookUpdate btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                         <a class="trigger_popup" onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')"href="<?php echo get_delete_post_link(get_the_ID()); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
        <?php endwhile;wp_reset_postdata(); ?>
    </table>
     <?php get_template_part('includes/facebook', 'editForm'); ?>
    <button href="<?php echo $editBio_post;?>"class="trigger_popup facebook btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
    
    
</div>
</div>
 

 <?php get_template_part('includes/facebook', 'updateForm'); ?>
     
</div>
    </section>


<!-- ELSE | show register -->
<?php else : ?>
    <section class="register-sc">
        <div class="card-body container">
            <h2>Login to your account</h2>
       
            <?php echo do_shortcode('[login-with-ajax]'); ?>
        </div>

    </section>
<?php endif; ?>    


<?php get_footer();?>