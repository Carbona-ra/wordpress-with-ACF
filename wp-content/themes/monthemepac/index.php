<?php
get_header();
?>

	<div class="container">
		<div class="row">
			<p class="col-lg-6"> flop <br>flop<br>flop</p>
			<div class="border col-lg-6">
				<img class="" src="" alt="">
			<div>	
		</div>
	</div>


	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-4">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium aliquam deleniti asperiores architecto tempore nihil! Tenetur neque sed sequi, dignissimos aliquid libero? Nam hic corrupti expedita veniam ratione recusandae praesentium?</p>
			</div>
			<div class="col-lg-8">
				<h2>Mes actus</h2>
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>

						<div class="">
							<h2 class="border"><?php the_title(); ?></h2>
							<a href="<?php echo get_permalink(); ?>">Lire article</a>
						</div>
					<?php }
				}

				?>
				
			</div>
			
		</div>
	</div>
<?php
get_footer();
