<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/accessconfig.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
		<script src="<?php echo get_template_directory_uri(); ?>/js/JQuery.min.js"></script>
		<?php wp_head(); ?>
	</head>

	<body style="background-image: url('<?= get_template_directory_uri(); ?>/images/back.webp'); background-repeat: no-repeat; background-size: cover;" <?php body_class(); ?>>
		
		<header class="">
			<div class="container bg-blanc mt-3">
				<div class="row px-3 py-2 justify-content-between">
					
					<div class="px-0 col-lg-2" id="centerrr">	
						<img class="w-150px object-fit-cover" src="<?php the_field('logo', 'option'); ?>">
					</div>
					
					<nav class="navbar px-0 col-lg-10 navbar-expand-lg navbar-light justify-content-end" id="agauchetoute">
					    <div class="" id="fluidfluidfluidfluidjesuisfluid">
					        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					            <span class="navbar-toggler-icon"></span>
					        </button>
					        <div class="collapse navbar-collapse" id="navbarNav">
					            <?php wp_nav_menu( array( 
					                'theme_location'  	=> 'menu-principal',
					                'container' 		=> false, 
					                'depth'           	=> 3, // 1 = no dropdowns, 2 = with dropdowns. 
					                'menu_class'     	=> 'navbar-nav me-auto ms-0 mb-2 mb-lg-0 px-0 horizontal-list', 
					                'add_li_class'		=> 'nav-item d-block',
					                'link_class'		=> 'nav-link couleur1 ft-18 fw-400 px-3',
					                'fallback_cb'     	=> 'WP_Bootstrap_Navwalker::fallback',
					                'walker'          	=> new WP_Bootstrap_Navwalker(),
					            ) );?> 
					        </div>
					    </div>
					</nav>

				</div>
			</div>
									

		</header><!-- #site-header -->

		<main class="overhiden"> 