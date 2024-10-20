<?php
get_header();
?>


	<section id="slider">
		<div class="container bg-blanc px-0 mt-3">
			<div class="p-3">
				<h1 class="d-none">Concept et plan<h1>
				<div id="carouselExampleAutoplaying" class="carousel h-400px slide px-0" data-bs-ride="carousel">
				    <div class="carousel-indicators">
				        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
				        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
				    </div>
				    <div class="carousel-inner">
				        <div class="carousel-item active h-400px">
				            <img class="h-100 w-100 object-fit-cover" src="<?php the_field('image1_slider', 'option'); ?>" alt="Slide 1">
				        </div>
				        <div class="carousel-item h-400px">
				            <img class="h-100 w-100 object-fit-cover" src="<?php the_field('image2_slider', 'option'); ?>" alt="Slide 2">
				        </div>
				        <div class="carousel-item h-400px">
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
	</section>
			
	<section>
		<div class="container bg-blanc mt-4 p-4">
			<div class="text-center">							
				<h2>Concept et Plan</h2>
				<div class="flex-column">
					<p><?php the_field('adresse_rue', 'option'); ?></p>
					<p><?php the_field('code_postal', 'option'); ?></p>
					<p>Tel : <a href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></p>
					<p>Fax : <a href="tel:<?php the_field('fax', 'option'); ?>"><?php the_field('fax', 'option'); ?></a></p>
				</div>
				<h2 class="mt-4">Horaires :</h2>
				<div class="flex-column">
					<p>Lundi au Jeudi : <?php the_field('lundi_au_jeudi', 'option'); ?></p>
					<p>Vendredi : <?php the_field('vendredi', 'option'); ?></p>
				</div>
			</div>
			<div class="text-center px-0 row">							
				<div class=" col-lg-4">
					<h2 class="mt-4">Direction :</h2>
					<div class="flex-column">
						<p><?php the_field('nom_du_dirigeant', 'option'); ?></p>
						<a href="mailto:<?php the_field('e-mail_dirigeant', 'option'); ?>"><?php the_field('e-mail_dirigeant', 'option'); ?></a>
					</div>
				</div>
				<div class=" col-lg-4">
					<h2 class="mt-4">Service commercial :</h2>
					<div class="flex-column">
						<p><?php the_field('nom_du_commercial', 'option'); ?></p>
						<a href="mailto:<?php the_field('mail_du_commercial', 'option'); ?>"><?php the_field('mail_du_commercial', 'option'); ?></a>
					</div>
				</div>
				<div class=" col-lg-4">
					<h2 class="mt-4">Service de production :</h2>
					<div class="flex-column">
						<a href="mailto:<?php the_field('mail_du_producteur', 'option'); ?>"><?php the_field('mail_du_producteur', 'option'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>		

			


<?php
get_footer();
