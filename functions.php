

<?php 

  
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function my_theme_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/my-script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


function my_validation(){
  wp_register_script( 'validation', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js', array( 'jquery' ) );
wp_enqueue_script( 'validation' );

}
add_action('wp_enqueue_scripts', 'my_validation');

  
function load_css(){


  wp_register_style('boostrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
  wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css',array(),false,'all');
  wp_register_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(),false,'all');
  wp_register_style( 'calendar-style', get_template_directory_uri() . '/css/calendar.css',array(),false,'all');
  wp_register_style( 'gerd-style', get_template_directory_uri() . '/css/gerd-style.css',array(),false,'all');
  wp_register_style( 'second-style', get_template_directory_uri() . '/css/second-style.css',array(),false,'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('normalize');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('calendar-style');
  wp_enqueue_style('gerd-style');
  wp_enqueue_style('second-style');

}
add_action('wp_enqueue_scripts' , 'load_css');


add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'menus' ); 
add_theme_support( 'widgets' ); 




function schedules_posttype() {

    $args = array(
      'labels' => array(
          'name' => 'Schedules',
          'singular_name' =>'Schedule'
      ),
      'hierarchical' => true,
      'public' => true,
      'menu_icon' => 'dashicons-schedule
    ',
      'has_archive' => true,
      'supports'=>array('title','editor','thumbnail','custom-fields'),

);
register_post_type( 'schedules',$args);


}
// Hooking up our function to theme setup
add_action( 'init', 'schedules_posttype' );

function streamers_posttype() {

    $args = array(
      'labels' => array(
          'name' => 'Streamers',
          'singular_name' =>'Streamer'
      ),
      'hierarchical' => true,
      'public' => true,
      'menu_icon' => 'dashicons-schedule
    ',
      'has_archive' => true,
      'supports'=>array('title','editor','thumbnail','custom-fields'),

);
register_post_type( 'streamers',$args);


}
// Hooking up our function to theme setup
add_action( 'init', 'streamers_posttype' );

//Function to create post after a user registers. this will tie up the user to the page/streamer page display
function create_new_user_posts($user_id){
        if (!$user_id>0)
                return;
        //here we know the user has been created so to create 
        //3 posts we call wp_insert_post 3 times.
        // Create post object
        $user = get_user_by('id', $user_id);    
        $streamer_account = array(
             'post_title' => $user->user_nicename,
             'post_status' => 'publish',
             'post_author' => $user_id,
             'post_type' => 'streamers'
        );

        // Insert the post into the database
        $streamer_act = wp_insert_post( $streamer_account );
        update_user_meta( $user_id, 'useracct', $streamer_act ); //this gets the id of the use, adds a meta useracct and places the added post id for the account, so that there will be only 1 streamer post per user account
        wp_update_post();

}
add_action('user_register','create_new_user_posts');




function chronozone_logo() {
 $defaults = array(
 'height'      => 30,
 'width'       => 20,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'chronozone_logo' );



function facebookEvents_posttype() {

    $args = array(
      'labels' => array(
          'name' => 'FacebookEvents',
          'singular_name' =>'FacebookEvent'
      ),
      'hierarchical' => true,
      'public' => true,
      'menu_icon' => 'dashicons-schedule
    ',
      'has_archive' => true,
      'supports'=>array('title','editor','thumbnail','custom-fields'),

);
register_post_type( 'facebookEvents',$args);


}
// Hooking up our function to theme setup
add_action( 'init', 'facebookEvents_posttype' );


function youtubeEvents_posttype() {

    $args = array(
      'labels' => array(
          'name' => 'YoutubeEvents',
          'singular_name' =>'YoutubeEvent'
      ),
      'hierarchical' => true,
      'public' => true,
      'menu_icon' => 'dashicons-schedule
    ',
      'has_archive' => true,
      'supports'=>array('title','editor','thumbnail','custom-fields'),

);
register_post_type( 'youtubeEvents',$args);


}
// Hooking up our function to theme setup
add_action( 'init', 'youtubeEvents_posttype' );



function twitchEvents_posttype() {

    $args = array(
      'labels' => array(
          'name' => 'TwitchEvents',
          'singular_name' =>'TwitchEvent'
      ),
      'hierarchical' => true,
      'public' => true,
      'menu_icon' => 'dashicons-schedule
    ',
      'has_archive' => true,
      'supports'=>array('title','editor','thumbnail','custom-fields'),

);
register_post_type( 'twitchEvents',$args);


}
// Hooking up our function to theme setup
add_action( 'init', 'twitchEvents_posttype' );