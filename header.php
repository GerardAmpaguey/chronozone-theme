<!DOCTYPE html>

<html>

<head>



	<title><?php echo bloginfo('name');?></title>

	<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,300;0,700;1,400;1,600&family=Rubik:ital,wght@0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>











</head>



<body <?php body_class();?>>



	

	<header class="mainHeader">

		<section class="topbar">

			<?php if ( is_user_logged_in() ) : ?>

				<?php //echo do_shortcode('[login-with-ajax]'); 
				echo login_with_ajax();
				//echo do_shortcode('[lwa]');?>

			<?php else : ?>

				<a class="login-btn">Login</a>

			<?php endif; ?>

		</section>

		<section class="navigation-sc">

	  		<div class="myLogo">

				<div class="costum-logo">

					<?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();}?>

				</div>

			</div>

			<div class="navMenu">

				<div>

				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'main-menu ul'  ) ); ?>

				</div>

			</div>

		</section>

	</header>



	<div class="loginform">

		<span class="login-modal-close"><i class="fa fa-window-close"></i></span>

		<?php echo do_shortcode('[login-with-ajax]'); ?>


	</div>

	<main>



