<?php
get_header(); 
?>

<?php 	
while ( have_posts() ) :
	the_post(); ?> 

		
			

		<section id="GODMODE">
				<div class="container">
					<div class="row justify-content-center"> 
						<h1><?php the_title(); ?></h1>		
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</section>


	 
<?php endwhile; ?>

<?php  get_footer(); 