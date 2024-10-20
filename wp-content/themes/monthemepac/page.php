<?php
get_header(); 
?>

<?php 	
while ( have_posts() ) :
	the_post(); ?> 

		
			

	<aside id="aside">
		<div class="container mt-3">					
			<div class="row row-gap-3"> 
				<div class="col-lg-9 px-3 pt-3 bg-blanc h-100">
					<div class="separateur mb-3">
						<h1 class="rougegros mb-3 mt-3"><?php the_title(); ?></h1>
					</div>
						<?php the_content(); ?>	
					</div>		
				<div class="col-lg-3 pe-0" id="margchiante">
					<div class="bg-blanc p-3 centretoi">
						<h2 class="mt-3 rougegros">Nos Coordonées</h2>									
						<h3 class="mt-3">Concept et Plan</h3>
						<div class="flex-column">
							<p><?php the_field('adresse_rue', 'option'); ?></p>
							<p><?php the_field('code_postal', 'option'); ?></p>
							<p>Tel : <a href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></p>
							<p>Fax : <a href="tel:<?php the_field('fax', 'option'); ?>"><?php the_field('fax', 'option'); ?></a></p>
						</div>
						<h3 class="mt-3">Horaires :</h3>
						<div class="flex-column">
							<p>Lundi au Jeudi</p>
							<p><?php the_field('lundi_au_jeudi', 'option'); ?></p>
							<p>Vendredi</p>
							<p><?php the_field('vendredi', 'option'); ?></p>
						</div>
						<h3 class="mt-3">Direction :</h3>
						<div class="flex-column">
							<p><?php the_field('nom_du_dirigeant', 'option'); ?></p>
							<a href="mailto:<?php the_field('e-mail_dirigeant', 'option'); ?>"><?php the_field('e-mail_dirigeant', 'option'); ?></a>
						</div>
						<h3 class="mt-3">Service commercial :</h3>
						<div class="flex-column">
							<p><?php the_field('nom_du_commercial', 'option'); ?></p>
							<a href="mailto:<?php the_field('mail_du_commercial', 'option'); ?>"><?php the_field('mail_du_commercial', 'option'); ?></a>
						</div>
						<h3 class="mt-3">Service de production :</h3>
						<div class="flex-column mb-3">
							<a href="mailto:<?php the_field('mail_du_producteur', 'option'); ?>"><?php the_field('mail_du_producteur', 'option'); ?></a>
						</div>
					</div>
					<div id="slider">
						<div class="bg-blanc px-0 mt-3">
							<div class="p-1">
								<div id="carouselExampleAutoplaying" class="carousel h-minislider slide px-0" data-bs-ride="carousel">
								    <div class="carousel-indicators">
								        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
								        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
								    </div>
								    <div class="carousel-inner">
								        <div class="carousel-item active h-minislider">
								            <img class="h-100 w-100 object-fit-cover" src="<?php the_field('image1_slider', 'option'); ?>" alt="Slide 1">
								        </div>
								        <div class="carousel-item h-minislider">
								            <img class="h-100 w-100 object-fit-cover" src="<?php the_field('image2_slider', 'option'); ?>" alt="Slide 2">
								        </div>
								        <div class="carousel-item h-minislider">
								            <img class="h-100 w-100 object-fit-cover" src="<?php the_field('image3_slider', 'option'); ?>" alt="Slide 3">
								        </div>
								    </div>
								    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
								        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								        <span class="visually-hidden">Previous</span>
								    </button>
								    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
								        <span class="carousel-control-next-icon" aria-hidden="true"></span>
								        <span class="visually-hidden">Next</span>
								    </button>
								</div>
							</div>
						</div>
					</div>
				</div>							
			</div>
		</div>
	</aside>

				
	 
<?php endwhile; ?>

<?php  get_footer(); 