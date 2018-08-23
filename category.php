<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<main role="main " class="col-md-9 blog-main">
						<!-- section -->
				<!-- section -->
				<section>

					<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
			</main>	
				<!-- /section -->
			<div class=" col-sm blog-sidebar">
					<?php get_sidebar(); ?>
			</div>
		</div>	
	</div>
<?php get_footer(); ?> 