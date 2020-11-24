<?php get_header(); ?>

<?php register_nav_menus( array(
    'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
    'footer_menu' => 'My Custom Footer Menu',
) ); ?>


<?php add_theme_support( 'post-thumbnails' ); ?>

<?php get_footer(); ?>