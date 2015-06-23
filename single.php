<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

					<div id="main" class="small-12 columns first" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<?php get_template_part( 'partials/loop', 'single' ); ?>

					    <?php endwhile; else : ?>

					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>

					</div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
