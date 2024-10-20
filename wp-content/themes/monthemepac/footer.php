			</main>
			
				<footer class="" id="footer">
					<div class="container px-0 pt-4 bordertop mt-3 mb-5 " id="c-footer">
						<div class="d-flex px-0 justify-content-between align-items-center">	
							<div class="me-4">						
								<p class="fs-standar m-0">© 2024 Concept et Plan | Création par <a class="fs-standar" href="https://www.linkedin.com/in/benjamin-schacher-01b277269/" target="blank">Benjamin Schacher</a></p>
							</div>
							<div class="col-lg-3">
								<?php wp_nav_menu( array( 
									'theme_location'  	=> 'menu-footer',
									'container' 		=> false, 
									'depth'           	=> 3, // 1 = no dropdowns, 2 = with dropdowns. 
									'menu_class'     	=> 'px-0 horizontal-listbot', 
									'add_li_class'		=> 'd-block ',
									'link_class'		=> 'nav-link couleur1 ft-18 fw-400 px-3',
									'fallback_cb'     	=> 'WP_Bootstrap_Navwalker::fallback',
									'walker'          	=> new WP_Bootstrap_Navwalker(),
								) );?> 
							</div>
							<div class="d-flex px-0 gap-2 align-items-center me-4">
								<div class="col-lg-4 px-0">	
									<a href="https://www.facebook.com/conceptetplan/?fref=ts" target="blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/logofacebook-100x100.webp"></a>
				    			</div>
				    			<div class="col-lg-4 px-0">
									<a href="https://www.instagram.com/conceptetplan/" target="blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/logoinsta-100x100.webp"></a>
				    			</div>
				    			<div class="col-lg-4 px-0">
									<a href="https://www.linkedin.com/company/concept-et-plan/?originalSubdomain=fr" target="blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/logolinkdin-100x100.webp"></a>
				    			</div>
							</div>
							<a href="#" class="fs-standar text-center">Haut de page</a>
						</div>
					</div>
				</footer>

			<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/accessconfig.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap5-dropdown-ml-hack.js"></script>
			<?php wp_footer(); ?>
	</body>
</html>
